<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateErikvangemertTwororderfoodPayment extends Migration
{
    public function up()
    {
        Schema::create('erikvangemert_twororderfood_payment', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('order_id');
            $table->string('type');
            $table->boolean('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('erikvangemert_twororderfood_payment');
    }
}
