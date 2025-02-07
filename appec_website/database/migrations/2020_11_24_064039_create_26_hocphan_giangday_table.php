<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create26HocphanGiangdayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HOCPHAN_PPGIANGDAY', function (Blueprint $table) {
            $table->string('maHocPhan',20);
            $table->integer('maPP')->unsigned()->nullable()->default(12);
            $table->longText('dienGiai')->nullable()->default('text');
            $table->primary(['maHocPhan','maPP']);
            $table->boolean('isDelete')->nullable()->default(false);
            $table->foreign('maHocPhan')->references('maHocPhan')->on('HOC_PHAN')
            ->onUpdate('restrict')
            ->onDelete('cascade');
            $table->foreign('maPP')->references('maPP')->on('PP_GIANGDAY')
            ->onUpdate('restrict')
            ->onDelete('cascade');
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
        Schema::dropIfExists('HOCPHAN_GIANGDAY');
    }
}
