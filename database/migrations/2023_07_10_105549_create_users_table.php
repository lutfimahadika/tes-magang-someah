<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',100);
            $table->string('username',100)->unique();
            $table->string('password',100);
            $table->string('role',100);
            $table->timestamps();
        });

        DB::table('users')->insert([
            'fullname'=>'Lutfi',
            'username'=>'admin',
            'password'=> Hash::make('admin123'),   
            'role'=>'admin',  
            'created_at'=>now(),
            'updated_at'=>now()   
        ],
        [
            'fullname'=>'Mahadika',
            'username'=>'employee',
            'password'=> Hash::make('employee123'),
            'role'=>'employee',
            'created_at'=>now(),
            'updated_at'=>now()        
        ],
        [
            'fullname'=>'LutfiM',
            'username'=>'manager',
            'password'=> Hash::make('manager123'),
            'role'=>'manager',  
            'created_at'=>now(),
            'updated_at'=>now()      
        ],
        [
            'fullname'=>'LutfiMahadika',
            'username'=>'director',
            'password'=> Hash::make('director123'),
            'role'=>'director',  
            'created_at'=>now(),
            'updated_at'=>now()      
        ],
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
