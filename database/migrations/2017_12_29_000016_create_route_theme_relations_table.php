<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteThemeRelationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'route_theme_relations';

    /**
     * Run the migrations.
     * @table route_theme_relations
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('route_id');
            $table->unsignedInteger('route_theme_id');

            $table->index(["route_id"], 'route_id');

            $table->index(["route_theme_id"], 'route_theme_id');
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('route_id', 'route_id')
                ->references('id')->on('routes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('route_theme_id', 'route_theme_id')
                ->references('id')->on('route_themes')
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
