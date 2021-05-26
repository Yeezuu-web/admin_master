<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('content_id');
            $table->string('title_of_content');
            $table->string('type_of_content');
            $table->string('type_of_file');
            $table->string('episode');
            $table->string('duration');
            $table->string('file_extension');
            $table->string('resolution');
            $table->string('m-e');
            $table->string('khmer_dub');
            $table->string('path');
            $table->string('storage');
            $table->date('date_received');
            $table->string('year');
            $table->string('poster');
            $table->string('trailer_promo');
            $table->text('synopsis');
            $table->string('file_size');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('period_of_time');
            $table->string('remark');
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
        Schema::dropIfExists('files');
    }
}
