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
            $table->id()->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('friend_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('type_comment')->default('not');
            $table->unsignedBigInteger('music_fon_id')->nullable();
            $table->string('video')->nullable();
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
            $table->string('qr')->default('not');
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('friend_id')->references('id')->on('friends')->onDelete('set null');
            $table->foreign('music_fon_id')->references('id')->on('music')->onDelete('set null');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');
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
