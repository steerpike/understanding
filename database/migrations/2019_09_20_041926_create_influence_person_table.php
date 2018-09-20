<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateInfluencePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influence_person', function (Blueprint $table) {
            $table->primary(['influence_id', 'person_id']);
            $table->integer('influence_id')->unsigned();
            $table->integer('person_id')->unsigned();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('influence_person');
    }
}