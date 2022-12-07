<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranUkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_ukms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('id_ukm_list');
            $table->string('nim');
            $table->string('semester');
            $table->string('tlp');
            $table->string('alamat');
            $table->boolean('status_serta')->default(1)->change();
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
        Schema::dropIfExists('pendaftaran_ukms');
    }
}
