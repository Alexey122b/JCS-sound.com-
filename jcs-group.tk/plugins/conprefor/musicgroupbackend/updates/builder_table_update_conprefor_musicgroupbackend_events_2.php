<?php namespace Conprefor\Musicgroupbackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateConpreforMusicgroupbackendEvents2 extends Migration
{
    public function up()
    {
        Schema::table('conprefor_musicgroupbackend_events', function($table)
        {
            $table->text('place_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('conprefor_musicgroupbackend_events', function($table)
        {
            $table->dropColumn('place_link');
        });
    }
}
