<?php namespace Enguerrand\Boards\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGestionTagsTable extends Migration
{
    public function up()
    {
        Schema::create('Etags', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nametag');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Etags');
    }
}
