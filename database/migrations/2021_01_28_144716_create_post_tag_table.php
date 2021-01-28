<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id'); //per relazionarci con la tabella post
            $table->unsignedBigInteger('tag_id');

            // relazioni
            $table->foreign('post_id') //l colonna che ho definito per la foreign key
            ->references('id')
            ->on('post')//tabella
            ->onDelete('cascade');

            $table->foreign('tag_id') //l colonna che ho definito per la foreign key
            ->references('id')
            ->on('tags')//tabella
            ->onDelete('cascade');
            
        //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
