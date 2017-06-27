<?php namespace Enguerrand\Boards\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGestionBoardsTable extends Migration
{
    public function up()
    {
        Schema::create('Etags_Edocuments', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('Edocuments_id')->unsigned();
            $table->integer('Etags_id')->unsigned();
            $table->primary(['Edocuments_id','Etags_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('Etags_Edocuments');
    }
}
