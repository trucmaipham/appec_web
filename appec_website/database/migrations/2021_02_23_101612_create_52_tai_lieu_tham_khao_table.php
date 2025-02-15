<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create52TaiLieuThamKhaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_lieu_tham_khao', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('giaoTrinh')->nullable()->default('text');
            $table->longText('thamKhaoThem')->nullable()->default('text');
            $table->longText('taiLieuKhac')->nullable()->default('text');
            $table->string('maHocPhan',20);
            $table->foreign('maHocPhan')->references('maHocPhan')->on('HOC_PHAN')->onUpdate('restrict')->onDelete('cascade');
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
        Schema::dropIfExists('52_tai_lieu_tham_khao');
    }
}
