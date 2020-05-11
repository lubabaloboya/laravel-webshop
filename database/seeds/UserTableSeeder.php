<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_customer = Role::where('name', 'customer')->first();
        $role_admin  = Role::where('name', 'admin')->first();
        
        $customer = new User();
        $customer->name = 'Lubabalo Boya';
        $customer->email = 'lubabaloboya@gmail.com';
        $customer->password = bcrypt('secret');
        $customer->save();

        $customer->roles()->attach($role_customer);

        $admin = new User();
        $admin->name = 'Lulama Boya';
        $admin->email = 'lulamaboya@gmail.com';
        $admin->password = bcrypt('secret');
        $admin->save();

        $admin->roles()->attach($role_admin);
    }
}
