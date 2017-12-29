<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteTodosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'route_todos';

    /**
     * Run the migrations.
     * @table route_todos
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
            $table->enum('type', ['attraction', 'rides', 'food and drink', 'trips']);
            $table->string('ir_hashtag')->nullable()->default(null);
            $table->string('name');
            $table->string('description');
            $table->unsignedInteger('creator_id');

            $table->index(["route_id"], 'route_id');

            $table->index(["creator_id"], 'creator_id');
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('route_id')
                ->references('id')->on('routes')
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
