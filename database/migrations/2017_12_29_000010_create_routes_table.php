<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'routes';

    /**
     * Run the migrations.
     * @table routes
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('duration');
            $table->enum('time_suggestion', ['spring', 'summer', 'autumn', 'winter']);
            $table->double('cost_food');
            $table->double('cost_ticket');
            $table->string('additional_info');
            $table->string('cover_url')->nullable()->default(null);
            $table->string('content');
            $table->softDeletes();
            $table->tinyInteger('is_published')->default('1');
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
