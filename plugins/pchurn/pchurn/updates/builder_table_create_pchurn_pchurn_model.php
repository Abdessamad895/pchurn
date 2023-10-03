<?php namespace Pchurn\Pchurn\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreatePchurnPchurnModel extends Migration
{
    public function up()
{
    Schema::create('pchurn_pchurn_model', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->text('version');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->text('link')->nullable();
        $table->text('description')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('pchurn_pchurn_model');
}
}
