<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('disk');
            $table->string('folder');
            $table->string('original_filename');
            $table->string('hash_filename');
            $table->string('extension');
            $table->string('mime_type');
            $table->string('type')->nullable();
            $table->timestamps();
            //$table->softDeletes();
        });

        Schema::create('attachmentables', function (Blueprint $table) {
            $table->id();
            $table->integer('attachment_id');
            $table->morphs('attachmentable');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
        Schema::dropIfExists('attachmentables');
    }
};
