<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripLocationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'trip_locations';

    /**
     * Run the migrations.
     * @table trip_locations
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
            $table->unsignedInteger('location_id');
            $table->integer('order');

            $table->index(["location_id"], 'location_id');

            $table->index(["trip_id"], 'trip_id');
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('location_id', 'location_id')
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
