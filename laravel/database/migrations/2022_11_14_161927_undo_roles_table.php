<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
        });
        Schema::dropIfExists('roles');
    }
    public function down()
    {
        
        Schema::create('roles', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoincrement();
            $table->primary('id');
            $table->string('name')->unique();
        });
        Schema::table('users', function (Blueprint $table) {

            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles');   
        });
        Artisan::call('db:seed', [
            '--class' => 'RoleSeeder',
            '--force' => true
         ]);
         
    }

};
