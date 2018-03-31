<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('type');
            $table->mediumText('subtype')->nullable();
            $table->mediumText('name');
            $table->mediumText('url');
            $table->mediumText('img_url')->nullable();
            $table->longText('description');
            $table->boolean('navmenu');
            $table->boolean('sidebar');
            $table->boolean('active');
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
        Schema::dropIfExists('links');
    }
}
