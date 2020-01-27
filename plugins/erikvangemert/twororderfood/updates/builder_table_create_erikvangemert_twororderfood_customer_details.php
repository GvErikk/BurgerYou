<?php namespace ErikVanGemert\TwoROrderFood\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateErikvangemertTwororderfoodCustomerDetails extends Migration
{
    public function up()
    {
        Schema::create('erikvangemert_twororderfood_customer_details', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 50);
            $table->string('streetname', 100);
            $table->integer('housenumber');
            $table->string('addition', 5);
            $table->string('postalcode', 6);
            $table->string('place', 50);
            $table->string('phonenumber', 12);
            $table->string('email', 75);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('erikvangemert_twororderfood_customer_details');
    }
}
