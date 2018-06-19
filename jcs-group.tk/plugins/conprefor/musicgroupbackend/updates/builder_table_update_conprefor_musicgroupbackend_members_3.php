<?php namespace Conprefor\Musicgroupbackend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateConpreforMusicgroupbackendMembers3 extends Migration
{
    public function up()
    {
        Schema::table('conprefor_musicgroupbackend_members', function($table)
        {
            $table->renameColumn('image', 'avatarimage');
        });
    }
    
    public function down()
    {
        Schema::table('conprefor_musicgroupbackend_members', function($table)
        {
            $table->renameColumn('avatarimage', 'image');
        });
    }
}
