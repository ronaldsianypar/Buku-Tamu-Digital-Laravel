<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('no_telp', 15);
            $table->text('alamat');
            $table->string('sb_kritik_saran', 100)->nullable();
            $table->string('sb_saran', 100)->nullable();
            $table->string('keperluan', 100);
            $table->string('sb_instansi', 100)->nullable();
            $table->string('sb_jabatan', 100)->nullable();
            $table->bigInteger('jenistamu_id');
            $table->string('signature');
            $table->string('foto');
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
        Schema::dropIfExists('tamus');
    }
}
