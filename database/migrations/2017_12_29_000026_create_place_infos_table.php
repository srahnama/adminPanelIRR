<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceInfosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'place_infos';

    /**
     * Run the migrations.
     * @table place_infos
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('place_id');
            $table->string('duration')->nullable()->default(null);
            $table->string('spring_time1')->nullable()->default(null);
            $table->string('spring_time2')->nullable()->default(null);
            $table->string('summer_time1')->nullable()->default(null);
            $table->string('summer_time2')->nullable()->default(null);
            $table->string('autumn_time1')->nullable()->default(null);
            $table->string('autumn_time2')->nullable()->default(null);
            $table->string('winter_time1')->nullable()->default(null);
            $table->string('winter_time2')->nullable()->default(null);
            $table->enum('best_time', ['spring', 'summer', 'autumn', 'winter'])->default('spring');
            $table->string('website')->nullable()->default(null);
            $table->string('tel')->nullable()->default(null);
            $table->string('food_drink')->nullable()->default(null);
            $table->string('ticket_cost')->nullable()->default(null);
            $table->string('additional_info');
            $table->string('content');

            $table->index(["place_id"], 'place_id');
            $table->nullableTimestamps();

            $table->softDeletes();
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
