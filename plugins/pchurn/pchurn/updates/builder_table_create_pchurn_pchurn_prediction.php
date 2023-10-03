<?php namespace Pchurn\Pchurn\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreatePchurnPchurnPrediction extends Migration
{
    public function up()
{
    Schema::create('pchurn_pchurn_prediction', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->integer('model_id')->unsigned();
        $table->integer('dataset_id')->unsigned();
        $table->dateTime('realized_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('pchurn_pchurn_prediction');
}
}
