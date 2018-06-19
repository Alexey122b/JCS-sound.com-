<?php namespace Conprefor\Musicgroupbackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateConpreforMusicgroupbackendEvents extends Migration
{
    public function up()
    {
        Schema::table('conprefor_musicgroupbackend_events', function($table)
        {
            $table->string('type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('conprefor_musicgroupbackend_events', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
