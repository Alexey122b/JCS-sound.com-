<?php namespace Conprefor\Musicgroupbackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateConpreforMusicgroupbackendMembers extends Migration
{
    public function up()
    {
        Schema::table('conprefor_musicgroupbackend_members', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('conprefor_musicgroupbackend_members', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
