<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripThemeRelationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'trip_theme_relations';

    /**
     * Run the migrations.
     * @table trip_theme_relations
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->enum('trip_type', ['free', 'trip'])->default('free');
            $table->unsignedInteger('trip_id');
            $table->unsignedInteger('theme_id');

            $table->index(["theme_id"], 'theme_id');
            $table->softDeletes();
            $table->index(["trip_id"], 'trip_id');
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
