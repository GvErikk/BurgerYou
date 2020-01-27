<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateErikvangemertTwororderfoodOrder extends Migration
{
    public function up()
    {
        Schema::table('erikvangemert_twororderfood_order', function($table)
        {
            $table->integer('order_total_price')->default(0)->change();
            $table->text('order_note')->nullable()->change();
            $table->integer('status_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('erikvangemert_twororderfood_order', function($table)
        {
            $table->integer('order_total_price')->default(null)->change();
            $table->text('order_note')->nullable(false)->change();
            $table->integer('status_id')->nullable(false)->change();
        });
    }
}
