<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class Contact extends BaseController
{
    /**
     * Handle frontend contact form submission via AJAX
     */
    public function submit()
    {
        // Only accept AJAX/POST requests
        if (!$this->request->isAJAX() || !$this->request->is('post')) {
            return $this->response->setStatusCode(405)->setJSON(['success' => false, 'message' => 'Method not allowed.']);
        }

        $rules = [
            'name'    => 'required|min_length[2]|max_length[100]',
            'email'   => 'required|valid_email|max_length[150]',
            'subject' => 'required|min_length[3]|max_length[255]',
            'message' => 'required|min_length[10]'
        ];

        if (!$this->validate($rules)) {
            $errors = $this->validator->getErrors();
            $firstError = reset($errors);
            return $this->response->setJSON([
                'success' => false,
                'message' => $firstError
            ]);
        }

        $model = new ContactModel();

        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];

        if ($model->insert($data)) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully.'
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Sorry, there was an error processing your request. Please try again later.'
            ]);
        }
    }

    /**
     * Admin View: List all contacts
     */
    public function index()
    {
        $model = new ContactModel();

        // Get all messages ordered by newest first
        $data['contacts'] = $model->orderBy('created_at', 'DESC')->findAll();
        $data['title'] = 'Contact Messages';

        return view('admin/contacts', $data);
    }

    /**
     * Admin Action: Delete a contact message
     */
    public function delete($id = null)
    {
        $model = new ContactModel();

        // Ensure contact exists
        $contact = $model->find($id);

        if ($contact) {
            $model->delete($id);
            session()->setFlashdata('success', 'Message deleted successfully.');
        } else {
            session()->setFlashdata('error', 'Message not found.');
        }

        return redirect()->to('/admin/contacts');
    }
}
