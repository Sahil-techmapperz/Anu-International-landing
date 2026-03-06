<?php

namespace App\Controllers;

use App\Models\SubscriberModel;

class Newsletter extends BaseController
{
    public function subscribe()
    {
        if ($this->request->isAJAX()) {
            $email = $this->request->getPost('email');

            if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid email address.']);
            }

            $model = new SubscriberModel();

            // Check if exists
            if ($model->where('email', $email)->first()) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Email is already subscribed.']);
            }

            if ($model->insert(['email' => $email])) {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Successfully subscribed!']);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'An error occurred.']);
            }
        }
        return $this->response->setStatusCode(400);
    }

    public function subscribers()
    {
        $model = new SubscriberModel();
        // Get all subscribers ordered by newest first
        $data['subscribers'] = $model->orderBy('created_at', 'DESC')->findAll();
        $data['title'] = 'Newsletter Subscribers';

        return view('admin/subscribers', $data);
    }

    public function delete($id = null)
    {
        $model = new SubscriberModel();

        // Ensure subscriber exists
        $subscriber = $model->find($id);

        if ($subscriber) {
            $model->delete($id);
            session()->setFlashdata('success', 'Subscriber deleted successfully.');
        } else {
            session()->setFlashdata('error', 'Subscriber not found.');
        }

        return redirect()->to('/admin/subscribers');
    }
}
