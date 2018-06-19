<?php namespace Conprefor\Musicgroupbackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateConpreforMusicgroupbackendMembers2 extends Migration
{
    public function up()
    {
        Schema::table('conprefor_musicgroupbackend_members', function($table)
        {
            $table->boolean('active')->nullable()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('conprefor_musicgroupbackend_members', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
