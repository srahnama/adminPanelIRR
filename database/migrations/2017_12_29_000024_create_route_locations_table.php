<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteLocationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'route_locations';

    /**
     * Run the migrations.
     * @table route_locations
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
            $table->unsignedInteger('place_id');
            $table->integer('order');
            $table->string('type');
            $table->string('duration');
            $table->string('visiting_time');
            $table->string('content');

            $table->index(["route_id"], 'route_id');

            $table->index(["place_id"], 'place_id');
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('route_id')
                ->references('id')->on('routes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('place_id')
                ->references('id')->on('places')
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
