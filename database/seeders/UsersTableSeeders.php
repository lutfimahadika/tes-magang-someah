<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
        [
            'fullname'=>'LutfiMahadika',
            'username'=>'director',
            'password'=> Hash::make('director123'),
            'role'=>'director',  
            'created_at'=>now(),
            'updated_at'=>now()      
        ]
    );
    }
}
