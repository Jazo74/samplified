<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnippetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snippets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('topic_id')->unsigned()->index();
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->smallInteger('serial');
            $table->text('python_note_eng');
            $table->text('python_note_hun');
            $table->text('python_syntax');
            $table->text('python_output');
            $table->text('csharp_note_eng');
            $table->text('csharp_note_hun');
            $table->text('csharp_syntax');
            $table->text('csharp_output');
            $table->text('jscript_note_eng');
            $table->text('jscript_note_hun');
            $table->text('jscript_syntax');
            $table->text('jscript_output');
            $table->text('java_note_eng');
            $table->text('java_note_hun');
            $table->text('java_syntax');
            $table->text('java_output');
            $table->text('php_note_eng');
            $table->text('php_note_hun');
            $table->text('php_syntax');
            $table->text('php_output');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('snippets');
    }
}
