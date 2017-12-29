<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLicencesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'user_licences';

    /**
     * Run the migrations.
     * @table user_licences
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
            $table->enum('type', ['Nature', 'Culture and History'])->default('Nature');
            $table->integer('year');
            $table->string('lang');
            $table->double('fee');
            $table->string('file')->nullable()->default(null);
            $table->string('destinations');
            $table->tinyInteger('is_verify')->default('0');

            $table->index(["user_id"], 'user_id');
            $table->nullableTimestamps();

            $table->softDeletes();
            $table->foreign('user_id', 'user_id')
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
