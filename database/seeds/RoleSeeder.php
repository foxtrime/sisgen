<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert(['role' =>   'Adm_Master',   ]);
        DB::table('roles')->insert(['role' =>   'Adm',   ]);
        DB::table('roles')->insert(['role' =>   'User',   ]);
        DB::table('roles')->insert(['role' =>   'User_ti', ]);
        DB::table('roles')->insert(['role' =>   'User_Atenção_Basica', ]);
        DB::table('roles')->insert(['role' =>   'User_Atenção_Basica_Coleta',  ]);
        DB::table('roles')->insert(['role' =>   'User_Atenção_Basica_Imunização', ]);
        DB::table('roles')->insert(['role' =>   'User_Infra',  ]);
        DB::table('roles')->insert(['role' =>   'User_Almoxarifado', ]);
        DB::table('roles')->insert(['role' =>   'User_Odontologia', ]);
        DB::table('roles')->insert(['role' =>   'User_Farmacia',  ]);
    
    }
}
