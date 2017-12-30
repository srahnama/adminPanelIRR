<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSocialsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'user_socials';

    /**
     * Run the migrations.
     * @table user_socials
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
            $table->string('whatsapp')->nullable()->default(null);
            $table->string('skype')->nullable()->default(null);
            $table->string('facebook')->nullable()->default(null);
            $table->string('googleplus')->nullable()->default(null);
            $table->string('twitter')->nullable()->default(null);
            $table->string('linkedin')->nullable()->default(null);
            $table->string('instagram')->nullable()->default(null);

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
