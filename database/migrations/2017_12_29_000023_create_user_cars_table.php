<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCarsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'user_cars';

    /**
     * Run the migrations.
     * @table user_cars
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->enum('classification', ['Sedan', 'Compact Car', 'Station Wagon', 'SUV', 'van', 'Hatch Back', 'Luxury'])->default('Sedan');
            $table->string('color')->nullable()->default(null);
            $table->string('plate_number');
            $table->tinyInteger('wifi')->default('0');
            $table->tinyInteger('roof_rock')->default('0');
            $table->double('fee_day')->nullable()->default(null);
            $table->double('fee_km')->nullable()->default(null);
            $table->enum('insurance_type', ['Third party', 'Car body'])->default('Third party');
            $table->date('insurance_expiry');
            $table->tinyInteger('active')->default('1');
            $table->tinyInteger('is_verify')->default('0');

            $table->index(["user_id"], 'user_id');
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')->on('users')
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
