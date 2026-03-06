<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username'      => 'admin',
            // Using password_hash('password123', PASSWORD_BCRYPT)
            'password_hash' => password_hash('password123', PASSWORD_BCRYPT),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ];

        // Simple check to avoid duplicates if run multiple times
        $builder = $this->db->table('admins');
        if ($builder->where('username', 'admin')->countAllResults() == 0) {
            $builder->insert($data);
        }
    }
}
