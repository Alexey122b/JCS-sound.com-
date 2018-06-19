<?php namespace Conprefor\Musicgroupbackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateConpreforMusicgroupbackendMembers4 extends Migration
{
    public function up()
    {
        Schema::table('conprefor_musicgroupbackend_members', function($table)
        {
            $table->dropColumn('avatarimage');
        });
    }
    
    public function down()
    {
        Schema::table('conprefor_musicgroupbackend_members', function($table)
        {
            $table->text('avatarimage')->nullable();
        });
    }
}
