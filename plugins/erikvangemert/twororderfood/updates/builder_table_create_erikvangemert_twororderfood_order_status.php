<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateErikvangemertTwororderfoodOrderStatus extends Migration
{
    public function up()
    {
        Schema::create('erikvangemert_twororderfood_order_status', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('status', 50);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('erikvangemert_twororderfood_order_status');
    }
}
