<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create34HocphanLoaiHinhthucDgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HOCPHAN_LOAI_HINHTHUC_DG', function (Blueprint $table) {
            $table->string('maHocPhan',20);
            $table->integer('maLoaiDG')->unsigned()->nullable()->default(12);
            $table->string('maLoaiHTDG',255);
            $table->integer('trongSo')->unsigned()->nullable()->default(12);
            $table->primary(['maHocPhan','maLoaiDG','maLoaiHTDG']);
            $table->boolean('isDelete')->nullable()->default(false);

            $table->timestamps();

            $table->foreign('maHocPhan')->references('maHocPhan')->on('HOC_PHAN')
            ->onUpdate('restrict')
            ->onDelete('cascade');
            $table->foreign('maLoaiDG')->references('maLoaiDG')->on('LOAI_DANH_GIA')
            ->onUpdate('restrict')
            ->onDelete('cascade');
            $table->foreign('maLoaiHTDG')->references('maLoaiHTDG')->on('LOAI_HT_DANHGIA')
            ->onUpdate('restrict')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HOCPHAN_LOAI_HINHTHUC_DG');
    }
}
