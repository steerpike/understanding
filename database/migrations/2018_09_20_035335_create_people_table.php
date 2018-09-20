<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('wikipedia_id')->nullable();
            $table->string('qid')->nullable();
            $table->string('title')->nullable();
            $table->string('wikipedia_path')->nullable();
            $table->string('wikipedia_canonical_path')->nullable();
            $table->string('wikipedia_canonical_url')->nullable();
            $table->string('name')->nullable();
            $table->string('sex')->nullable();
            $table->string('redirected_name')->nullable();
            $table->string('given_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->decimal('place_of_birth_lng', 10, 7)->nullable();
            $table->decimal('place_of_birth_lat', 10, 7)->nullable();
            $table->string('date_of_birth')->nullable();
            $table->smallInteger('year')->nullable();
            $table->smallInteger('month')->nullable();
            $table->smallInteger('day')->nullable();
            $table->boolean('processed')->nullable();
            $table->string('stored_json_file')->nullable();
            $table->text('description')->nullable();
            $table->smallInteger('type')->nullable();
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
        Schema::dropIfExists('people');
    }
}
