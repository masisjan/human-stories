<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('friend_id');
            $table->unsignedBigInteger('city_id');
            $table->string('type_comment')->default('not');
            $table->unsignedBigInteger('music_fon_id')->nullable();
            $table->unsignedBigInteger('video')->nullable();
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('date');
            $table->string('position')->nullable();
            $table->text('biography')->nullable();
            $table->text('other')->nullable();
            $table->text('speech')->nullable();
            $table->string('images')->nullable();
            $table->text('family')->nullable();
            $table->string('gender');
            $table->string('publish')->default('not');
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('friend_id')->references('id')->on('friends');
            $table->foreign('music_fon_id')->references('id')->on('music')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
