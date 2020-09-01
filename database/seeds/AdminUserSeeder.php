<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
                'name' => 'sekretaris',
                'email' => 'sekretaris@bem.fik',
                'password' => bcrypt('12341234'),
                'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
