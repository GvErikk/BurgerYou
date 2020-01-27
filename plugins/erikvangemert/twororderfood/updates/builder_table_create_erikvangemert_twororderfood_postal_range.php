<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateErikvangemertTwororderfoodPostalRange extends Migration
{
    public function up()
    {
        Schema::create('erikvangemert_twororderfood_postal_range', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('postalcode', 6);
            $table->integer('delivery_costs');
            $table->integer('minimum_order');
            $table->boolean('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('erikvangemert_twororderfood_postal_range');
    }
}
