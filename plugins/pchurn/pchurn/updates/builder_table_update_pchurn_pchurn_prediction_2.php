<?php namespace Pchurn\Pchurn\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdatePchurnPchurnPrediction2 extends Migration
{
    public function up()
{
    Schema::table('pchurn_pchurn_prediction', function($table)
    {
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::table('pchurn_pchurn_prediction', function($table)
    {
        $table->dropColumn('deleted_at');
    });
}
}
