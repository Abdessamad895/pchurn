<?php namespace Pchurn\Pchurn\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdatePchurnPchurnPrediction extends Migration
{
    public function up()
{
    Schema::table('pchurn_pchurn_prediction', function($table)
    {
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::table('pchurn_pchurn_prediction', function($table)
    {
        $table->dropColumn('created_at');
        $table->dropColumn('updated_at');
    });
}
}
