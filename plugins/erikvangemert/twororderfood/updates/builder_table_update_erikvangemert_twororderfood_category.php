<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateErikvangemertTwororderfoodCategory extends Migration
{
    public function up()
    {
        Schema::table('erikvangemert_twororderfood_category', function($table)
        {
            $table->boolean('status')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('erikvangemert_twororderfood_category', function($table)
        {
            $table->string('status', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
