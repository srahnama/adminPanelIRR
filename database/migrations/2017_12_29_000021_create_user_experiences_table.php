<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserExperiencesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'user_experiences';

    /**
     * Run the migrations.
     * @table user_experiences
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
            $table->tinyInteger('lic_nature')->default('0');
            $table->tinyInteger('lic_culture')->default('0');
            $table->tinyInteger('art_music')->default('0');
            $table->tinyInteger('architecture')->default('0');
            $table->tinyInteger('museum')->default('0');
            $table->tinyInteger('unesco')->default('0');
            $table->tinyInteger('religues')->default('0');
            $table->tinyInteger('eastern_bazaar')->default('0');
            $table->tinyInteger('food_drink')->default('0');
            $table->tinyInteger('handicraft')->default('0');
            $table->tinyInteger('nomad')->default('0');
            $table->tinyInteger('adventure')->default('0');
            $table->tinyInteger('hiking')->default('0');
            $table->tinyInteger('cycling')->default('0');
            $table->tinyInteger('safari')->default('0');
            $table->tinyInteger('desert')->default('0');
            $table->tinyInteger('hours')->default('0');
            $table->tinyInteger('sport')->default('0');
            $table->tinyInteger('ecotourism')->default('0');
            $table->tinyInteger('sking')->default('0');
            $table->tinyInteger('fishing')->default('0');
            $table->tinyInteger('spirtual')->default('0');
            $table->tinyInteger('festival')->default('0');
            $table->tinyInteger('solo')->default('0');
            $table->tinyInteger('horror')->default('0');
            $table->tinyInteger('rail')->default('0');
            $table->tinyInteger('relax')->default('0');
            $table->tinyInteger('slow')->default('0');
            $table->tinyInteger('social_science')->default('0');
            $table->tinyInteger('history')->default('0');
            $table->tinyInteger('geography')->default('0');
            $table->tinyInteger('archeology')->default('0');
            $table->tinyInteger('juries_prudence')->default('0');
            $table->tinyInteger('linguistic')->default('0');
            $table->tinyInteger('ethnology')->default('0');
            $table->string('biography')->default('0');

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
