<?php namespace Conprefor\Musicgroupbackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateConpreforMusicgroupbackendSliders extends Migration
{
    public function up()
    {
        Schema::create('conprefor_musicgroupbackend_sliders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title')->nullable();
            $table->text('subtitle')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('conprefor_musicgroupbackend_sliders');
    }
}
