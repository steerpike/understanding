<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->text('source_id')->nullable();
            $table->text('title')->nullable();
            $table->text('source')->nullable();
            $table->string('url')->nullable();
            $table->string('duration')->nullable();
            $table->bigInteger('views')->nullable();
            $table->bigInteger('likes')->nullable();
            $table->bigInteger('comments')->nullable();
            $table->bigInteger('dislikes')->nullable();
            $table->decimal('ranking', 20,8)->nullable();
            $table->longText('description')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('media');
    }
}
