<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create27HocPhanCtKhoiKienThucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HOCPHAN_CTKHOIKIENTHUC', function (Blueprint $table) {
            $table->string('maHocPhan',20)->unique();
            $table->string('maCTKhoiKT',255)->unique();
            $table->primary(['maHocPhan','maCTKhoiKT']);
            $table->boolean('isDelete')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('maHocPhan')->references('maHocPhan')->on('HOC_PHAN')->onDelete('cascade');
            $table->foreign('maCTKhoiKT')->references('maCTKhoiKT')->on('CT_KHOI_KIEN_THUC')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('23_hoc_phan_ct_khoi_kien_thuc');
    }
}
