<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateErikvangemertTwororderfoodOrder3 extends Migration
{
    public function up()
    {
        Schema::table('erikvangemert_twororderfood_order', function($table)
        {
            $table->time('delivery_time');
        });
    }
    
    public function down()
    {
        Schema::table('erikvangemert_twororderfood_order', function($table)
        {
            $table->dropColumn('delivery_time');
        });
    }
}
