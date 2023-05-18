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

        $user = new User();
        $user->name = 'User';
        $user->email = 'D@D';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'A@A';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Secret';
        $user->email = 's@s';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_secret);

        $user = new User();
        $user->name = 'Dire';
        $user->email = 'di@di';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_dire);

        $user = new User();
        $user->name = 'Presi';
        $user->email = 'p@p';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_presi);

        $user = new User();
        $user->name = 'cordiTec';
        $user->email = 'ct@ct';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_cordiTec );

        $user = new User();
        $user->name = 'jefe_gabinate';
        $user->email = 'jg@jg';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_jefe_gabinete);


        $user = new User();
        $user->name = 'Secretario Particular';
        $user->email = 'atnsecretarioparticular@tulancingo.gob.mx';
        $user->password = bcrypt('f84W#JNd4A');
        $user->save();
        $user->roles()->attach($role_secretp);

        $user = new User();
        $user->name = 'Secretaria General Municipal';
        $user->email = 'secretariageneral@tulancingo.gob.mx';
        $user->password = bcrypt('3^cHj724tU');
        $user->save();
        $user->roles()->attach($role_secretgm);

        $user = new User();
        $user->name = 'Secretaria de desarrollo urbano opyma';
        $user->email = 'desarrollourbano@tulancingo.gob.mx';
        $user->password = bcrypt('ErGKZfCdsM');
        $user->save();
        $user->roles()->attach($role_secretduo);

        $user = new User();
        $user->name = 'Secretaria de desarrollo humano y social';
        $user->email = 'atdesarrollosocial@tulancingo.gob.mx';
        $user->password = bcrypt('OnveReptiN');
        $user->save();
        $user->roles()->attach($role_secretdhs );

        $user = new User();
        $user->name = 'Jefatura de gabinete';
        $user->email = 'jefedegabinete@tulancingo.gob.mx';
        $user->password = bcrypt('F5a8!f4WJ*');
        $user->save();
        $user->roles()->attach($role_jefe_gabinete);

        $user = new User();
        $user -> name = 'Secretaria de seguridad ciudadana';
        $user ->email = 'seguridadciudadana@tulancingo.gob.mx';
        $user->password = bcrypt('@y*61Z2nXq');
        $user->save();
        $user->roles()->attach($role_secretsc);

        $user = new User();
        $user -> name = 'Secretaria de fomento económico';
        $user ->email = 'fomentoeconomico@tulancingo.gob.mx';
        $user->password = bcrypt('fkvHfcGrMh');
        $user->save();
        $user->roles()->attach($role_secretfe);

        $user = new User();
        $user -> name = 'Secretaria de cultura, educación, deporte y cultura';
        $user ->email = 'secretariacultura@tulancingo.gob.mx';
        $user->password = bcrypt('KENTraCiaN');
        $user->save();
        $user->roles()->attach($role_secretcedc);

        $user = new User();
        $user -> name = 'Secretaria del campo';
        $user ->email = 'secretariadelcampo@tulancingo.gob.mx';
        $user->password = bcrypt('5Mz9$V!22z');
        $user->save();
        $user->roles()->attach($role_secretc);

        $user = new User();
        $user -> name = 'Secretaria de servicios municipales';
        $user ->email = 'serviciosmunicipales@tulancingo.gob.mx';
        $user->password = bcrypt('miRHf57%&6');
        $user->save();
        $user->roles()->attach($role_secretsm);

        $user = new User();
        $user -> name = 'Secretaria de tesoreria y administracion';
        $user ->email = 'ingresos@tulancingo.gob.mx';
        $user->password = bcrypt('Up0n#19lU0');
        $user->save();
        $user->roles()->attach($role_secretta);

        $user = new User();
        $user -> name = 'Seguimiento y evaluación';
        $user ->email = 'seguimientoyevaluacion@tulancingo.gob.mx';
        $user->password = bcrypt('546*GWii40');
        $user->save();
        $user->roles()->attach($role_secrete);

        $user = new User();
        $user -> name = 'SIPINNA';
        $user ->email = 'sipinna@tulancingo.gob.mx';
        $user->password = bcrypt('wX#9^Q311a');
        $user->save();
        $user->roles()->attach($role_secrets);

        $user = new User();
        $user -> name = 'Caamt';
        $user ->email = 'atngeneral@caamt.gob.mx';
        $user->password = bcrypt('7783wR%&eh');
        $user->save();
        $user->roles()->attach($role_secretca);

        $user = new User();
        $user -> name = 'DIF';
        $user ->email = 'dif@tulancingo.gob.mx';
        $user->password = bcrypt('cUPHiNGban');
        $user->save();
        $user->roles()->attach($role_secretdif);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'innovaciongubernamental@tulancingo.gob.mx';
        $user->password = bcrypt('J3!KbM51Ex');
        $user->save();
        $user->roles()->attach($role_admin);

     }
}
