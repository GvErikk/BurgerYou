<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateErikvangemertTwororderfoodOpeningHours extends Migration
{
    public function up()
    {
        Schema::create('erikvangemert_twororderfood_opening_hours', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 50);
            $table->string('type', 50);
            $table->time('opening_time');
            $table->time('closing_time');
            $table->date('special_date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('open');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('erikvangemert_twororderfood_opening_hours');
    }
}
