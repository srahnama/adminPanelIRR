<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'contents';

    /**
     * Run the migrations.
     * @table contents
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('content_name');
            $table->string('url');
            $table->string('hierarchy_path');
            $table->string('title');
            $table->string('content');
            $table->tinyInteger('is_published')->default('1');
            $table->unsignedInteger('creator_id')->default('0');
            $table->softDeletes();
            $table->index(["creator_id"], 'creator_id');
            $table->nullableTimestamps();
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
