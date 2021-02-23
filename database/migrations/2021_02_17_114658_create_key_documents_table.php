<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_documents', function (Blueprint $table) {
            $table->id();
            $table->string('title_lao')->unique();
            $table->string('title_en')->nullable();
            $table->string('file')->nullable();
            $table->string('key_cate')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('key_cate')->references('title_lao')->on('key_doc_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('key_documents');
    }
}
