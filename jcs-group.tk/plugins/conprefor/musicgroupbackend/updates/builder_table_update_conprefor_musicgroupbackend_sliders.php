<?php namespace Conprefor\Musicgroupbackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateConpreforMusicgroupbackendSliders extends Migration
{
    public function up()
    {
        Schema::table('conprefor_musicgroupbackend_sliders', function($table)
        {
            $table->text('link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('conprefor_musicgroupbackend_sliders', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
