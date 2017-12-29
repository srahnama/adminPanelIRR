<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
//            $table->string('family');
            $table->string('email');
            $table->string('password');
//            $table->string('verify_token');
//            $table->string('mobile');
//            $table->tinyInteger('active')->default('1');
//            $table->tinyInteger('verified_passport')->default('0');
//            $table->tinyInteger('verified_phone')->default('0');
//            $table->tinyInteger('verified_email')->default('0');
//            $table->tinyInteger('verified_guide')->default('0');
//            $table->tinyInteger('verified_driver')->default('0');
//            $table->enum('level', ['Newcomer', 'Silver', 'Gold', 'Diamond']);
//            $table->enum('guide_level', ['Newcomer', 'Intermediate', 'Experienced', 'expert', 'Amberassador']);
//            $table->tinyInteger('ir_hashtag')->nullable()->default(null);
//            $table->rememberToken();
//
//            $table->unique(["email"], 'users_email_unique');
            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
