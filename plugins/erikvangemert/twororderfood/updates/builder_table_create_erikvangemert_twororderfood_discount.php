<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateErikvangemertTwororderfoodDiscount extends Migration
{
    public function up()
    {
        Schema::create('erikvangemert_twororderfood_discount', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 50);
            $table->integer('percentage');
            $table->integer('number');
            $table->string('code', 75);
            $table->boolean('status_used');
            $table->string('type', 50);
            $table->date('date_active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('erikvangemert_twororderfood_discount');
    }
}
