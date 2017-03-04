<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'remember_token'=>'RfcTOJEBDe95nwVtFPkv3ocdISbiR8PrGnaxmDkuJ3CaVSoODRjaADm4ZxYU',
            'password' => bcrypt('admin'),
        ]);
    }
}
