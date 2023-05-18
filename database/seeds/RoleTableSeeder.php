<?php


use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder {
    public function run() {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();
        $role = new Role();
        $role->name = 'user';
        $role->description = 'User';
        $role->save();
        $role = new Role();
        $role->name = 'secret';
        $role->description = 'Secretarias';
        $role->save();
        $role = new Role();
        $role->name = 'secretp';
        $role->description = 'SecretariasParticular';
        $role->save();
        $role = new Role();
        $role->name = 'secretgm';
        $role->description = 'SecretariasGeneralMunicipal';
        $role->save();
        $role = new Role();
        $role->name = 'secretduo';
        $role->description = 'Secretariasdedesarrollourbanoopyma';
        $role->save();
        $role = new Role();
        $role->name = 'secretdhs';
        $role->description = 'Secretariadedesarrollohumanoysocial';
        $role->save();
        $role = new Role();
        $role->name = 'secretsc';
        $role->description = 'Secretariadeseguridadciudadana';
        $role->save();
        $role = new Role();
        $role->name = 'secretfe';
        $role->description = 'Secretariadefomentoeconómico';
        $role->save();
        $role = new Role();
        $role->name = 'secretcedc';
        $role->description = 'Secretariadecultura,educación,deporteycultura';
        $role->save();
        $role = new Role();
        $role->name = 'secretc';
        $role->description = 'Secretariadelcampo';
        $role->save();
        $role = new Role();
        $role->name = 'secretsm';
        $role->description = 'Secretariadeserviciosmunicipales';
        $role->save();
        $role = new Role();
        $role->name = 'secretta';
        $role->description = 'Secretariadetesoreriayadministracion';
        $role->save();
        $role = new Role();
        $role->name = 'secrete';
        $role->description = 'Seguimientoyevaluación';
        $role->save();
        $role = new Role();
        $role->name = 'dire';
        $role->description = 'Direcciones';
        $role->save();
        $role = new Role();
        $role->name = 'presi';
        $role->description = 'Presidente';
        $role->save();
        $role = new Role();
        $role->name = 'jefe_gabinate';
        $role->description = 'Jefe Gabinete';
        $role->save();
        $role = new Role();
        $role->name = 'cordiTec';
        $role->description = 'Coordinadora Tec ';
        $role->save();
        $role = new Role();
        $role->name = 'secrets';
        $role->description = 'SIPINNA';
        $role->save();
        $role = new Role();
        $role->name = 'secretca';
        $role->description = 'CAAMT ';
        $role->save();
        $role = new Role();
        $role->name = 'secretdif';
        $role->description = 'DIF ';
        $role->save();

    }
}
