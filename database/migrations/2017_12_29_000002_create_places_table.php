<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'places';

    /**
     * Run the migrations.
     * @table places
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->enum('category', ['destination', 'restaurant', 'cofe', 'place'])->default('place');
            $table->string('name');
            $table->string('description');
            $table->double('lat');
            $table->double('long');
            $table->unsignedInteger('parent_id')->nullable()->default(null);
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->tinyInteger('is_active')->default('1');
            $table->string('ir_hashtag')->nullable()->default(null);
            $table->string('rate')->default('0');
            $table->string('review')->default('0');

            $table->index(["parent_id"], 'parent_id');
            $table->nullableTimestamps();


            $table->softDeletes();

            $table->foreign('parent_id')
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
