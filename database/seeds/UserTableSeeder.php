<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder {
    public function run() {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_secret = Role::where('name', 'secret')->first();
        $role_secretp = Role::where('name', 'secretp')->first();
        $role_secretgm = Role::where('name', 'secretgm')->first();
        $role_secretduo = Role::where('name', 'secretduo')->first();
        $role_secretdhs = Role::where('name', 'secretdhs')->first();
        $role_secretsc  = Role::where('name', 'secretsc')->first();
        $role_secretfe  = Role::where('name', 'secretfe')->first();
        $role_secretcedc  = Role::where('name', 'secretcedc')->first();
        $role_secretta  = Role::where('name', 'secretta')->first();
        $role_secretc  = Role::where('name', 'secretc')->first();
        $role_secretsm  = Role::where('name', 'secretsm')->first();
        $role_secrete  = Role::where('name', 'secrete')->first();
        $role_secrets  = Role::where('name', 'secrets')->first();
        $role_secretca = Role::where('name', 'secretca')->first();
        $role_secretdif  = Role::where('name', 'secretdif')->first();
        $role_dire = Role::where('name', 'dire')->first();
        $role_presi = Role::where('name', 'presi')->first();
        $role_jefe_gabinete = Role::where('name', 'jefe_gabinate')->first();
        $role_cordiTec = Role::where('name', 'cordiTec')->first();

     }
}
