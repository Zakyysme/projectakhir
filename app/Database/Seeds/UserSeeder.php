<?php

namespace App\Database\Seeds;

use App\Models\UserModels;
use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModels();

        $userModel->save([
            'email'    => 'admin@example.com',
            'password' => password_hash('password', PASSWORD_BCRYPT),
        ]);
    }
}
