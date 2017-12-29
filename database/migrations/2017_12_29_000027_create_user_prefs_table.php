<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPrefsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'user_prefs';

    /**
     * Run the migrations.
     * @table user_prefs
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('pass_no');
            $table->string('major')->nullable()->default(null);
            $table->string('education')->nullable()->default(null);
            $table->date('birthdate')->nullable()->default(null);
            $table->string('native_lang');
            $table->string('nationality');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('street')->nullable()->default(null);
            $table->string('street2')->nullable()->default(null);
            $table->string('address_more')->nullable()->default(null);
            $table->string('po_code');
            $table->double('rate')->default('0.00');
            $table->integer('review')->default('0');
            $table->string('bio')->nullable()->default(null);
            $table->string('phone');
            $table->string('gender');
            $table->string('image_url')->nullable()->default(null);

            $table->index(["user_id"], 'user_id');
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
