<?php namespace Enguerrand\Boards\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateListDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('Edocuments', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('doctitle',100);
            $table->string('pdf')->nullable();
            $table->string('resumer')->nullable();
            $table->string('duree')->nullable();
            $table->string('dejarea')->nullable();
            $table->string('dates')->nullable();
            $table->integer('numnews')->nullable();
            $table->string('skills')->nullable();
            $table->string('contenu')->nullable();
            $table->string('quest')->nullable();
            $table->string('exper')->nullable();
            $table->string('intitul')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('Edocuments');
    }
}