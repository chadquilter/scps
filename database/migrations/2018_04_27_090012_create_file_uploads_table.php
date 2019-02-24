<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('upload_name');
            $table->string('upload_type')->nullable();
            $table->string('upload_preview')->nullable();
            $table->string('upload_active');
            $table->string('upload_display')->nullable();
            $table->string('upload_cat')->nullable();
            $table->string('upload_size')->nullable();
            $table->string('upload_depts')->nullable();
            $table->string('upload_owners')->nullable();
            $table->string('upload_users')->nullable();
            $table->string('upload_dir')->nullable();
            $table->string('upload_url_long')->nullable();
            $table->string('upload_url_short')->nullable();
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
        Schema::dropIfExists('file_uploads');
    }
}
