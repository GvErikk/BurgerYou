<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateErikvangemertTwororderfoodOrder extends Migration
{
    public function up()
    {
        Schema::create('erikvangemert_twororderfood_order', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('order_total_price');
            $table->text('order_note');
            $table->dateTime('order_ordertime');
            $table->string('customer_name', 50);
            $table->string('customer_streetname', 100);
            $table->integer('customer_streetnumber');
            $table->string('customer_addition', 5);
            $table->string('customer_postalcode', 6);
            $table->string('customer_place', 50);
            $table->string('customer_phonenumber', 15);
            $table->string('customer_email', 50);
            $table->integer('status_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('erikvangemert_twororderfood_order');
    }
}
