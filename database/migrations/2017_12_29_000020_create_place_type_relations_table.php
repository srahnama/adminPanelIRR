<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceTypeRelationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'place_type_relations';

    /**
     * Run the migrations.
     * @table place_type_relations
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('cat_id');
            $table->unsignedInteger('place_id');

            $table->index(["cat_id"], 'cat_id');

            $table->index(["place_id"], 'place_id');
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('cat_id', 'cat_id')
                ->references('id')->on('place_types')
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
