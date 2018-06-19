<?php namespace Conprefor\Musicgroupbackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateConpreforMusicgroupbackendEvents extends Migration
{
    public function up()
    {
        Schema::create('conprefor_musicgroupbackend_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('place')->nullable();
            $table->dateTime('date_and_time')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('conprefor_musicgroupbackend_events');
    }
}
