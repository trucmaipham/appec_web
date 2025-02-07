<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' =>'App\Http\Middleware\isAdmin'], function (){ 
    Route::group(['prefix' => 'quan-ly','namespace'=>'App\Http\Controllers\Admin'], function () {
        Route::post('ckeditor/image_upload', 'GVCKEditorController@upload')->name('upload');
        Route::get('/', 'homeController@index');
        //bậc đào tạo
        Route::group(['prefix' => 'bac-dao-tao'], function () {
            Route::get('/', 'bacDaoTaoController@index');
            Route::post('them', 'bacDaoTaoController@them');
            Route::post('sua', 'bacDaoTaoController@sua');
            //PTTMai có sửa phần xóa
            Route::get('xoa/{maBac}', 'bacDaoTaoController@xoa');
        });
        //ngành học
        Route::group(['prefix' => 'nganh-hoc'], function () {
            Route::get('/', 'nganhController@index');
            Route::post('them', 'nganhController@them');
            Route::post('sua/', 'nganhController@sua');
            Route::get('xoa/{maNganh}', 'nganhController@xoa');
        });
        //PTTMai thêm 
        //chuyên ngành
        Route::group(['prefix' => 'chuyen-nganh'], function () {
            Route::get('/', 'cNganhController@index');
            Route::post('them', 'cNganhController@them');
            Route::post('sua', 'cNganhController@sua');
            Route::get('xoa/{maCNganh}', 'cNganhController@xoa');
        });
        //Hết PTTMai thêm
        //hệ
        Route::group(['prefix' => 'he'], function () {
            Route::get('/', 'heController@index');
            Route::post('/them', 'heController@them');
            Route::post('/sua', 'heController@sua');
            Route::get('xoa/{maHe}', 'heController@xoa_he');
        });

        //chương trình đào tạo
        Route::group(['prefix' => 'chuong-trinh-dao-tao'], function () {
            Route::get('/', 'chuongTrinhDTController@index');
            Route::post('them', 'chuongTrinhDTController@them');
            Route::post('sua', 'chuongTrinhDTController@sua');
            Route::get('xoa/{maCT}', 'chuongTrinhDTController@xoa');
            Route::get('/excel','chuongTrinhDTController@excel');
        });

        //chuẩn đầu ra PTTMai có sửa
        Route::group(['prefix' => 'chuan-dau-ra'], function () {
            Route::get('/', 'chuanDauRaController@index');
            Route::post('them', 'chuanDauRaController@them_cdr_submit');
            Route::post('sua', 'chuanDauRaController@sua_cdr_submit');
            Route::get('xoa/{maCDR1}', 'chuanDauRaController@xoa_cdr_submit');
            Route::get('/chuan-dau-ra-2/{maCDR1}', 'chuanDauRaController@chuanDR2');
            Route::get('/chuan-dau-ra-3/{maCDR2}', 'chuanDauRaController@chuanDR3');
            // Route::post('sua/{id}', '');
            // Route::post('xoa/{id}', '');
        });

        //loại học phần
        Route::group(['prefix' => 'loai-hoc-phan'], function () {
            Route::get('/', 'loaiHocPhanController@index');
            Route::post('them', 'loaiHocPhanController@them');
            Route::post('sua', 'loaiHocPhanController@sua');
            Route::get('xoa/{maLoaiHocPhan}', 'loaiHocPhanController@xoa');
        });

        //loại học phần
        Route::group(['prefix' => 'hoc-phan'], function () {
            Route::get('/', 'hocPhanController@index');
            Route::post('them', 'hocPhanController@them');
            Route::post('sua', 'hocPhanController@sua');
            Route::get('xoa/{maHocPhan}', 'hocPhanController@xoa');
            Route::prefix('/de-cuong-mon-hoc')->group(function () {
                Route::get('/{maHocPhan}','hocPhanController@de_cuong_mon_hoc');
                Route::get('/in-de-cuong-mon-hoc/{maHocPhan}','AdWordController@in_de_cuong_mon_hoc');
                Route::post('/them_chuan_dau_ra_mon_hoc','hocPhanController@them_chuan_dau_ra_mon_hoc');
                
                Route::post('/sua_mo_ta_mon_hoc','hocPhanController@them_mo_ta_hoc_phan');
                Route::post('/sua_yeu_cau_mon_hoc','hocPhanController@them_yeu_cau_hoc_phan');

                Route::post('/sua_giao_trinh','hocPhanController@them_giao_trinh');
                Route::post('/sua_tai_lieu_tham_khao_them','hocPhanController@them_tai_lieu_tham_khao_them');
                Route::post('/sua_tai_lieu_khac','hocPhanController@them_tai_lieu_khac');
                Route::post('/them_phuong_phap_giang_day','hocPhanController@them_phuong_phap_giang_giay');
                Route::post('/them_mon_tien_quyet','hocPhanController@them_mon_tien_quyet');
                Route::post('/them_muc_do_ky_nang_uti','hocPhanController@them_muc_do_ky_nang_uti');
                Route::post('/them_noi_dung_mon_hoc','hocPhanController@them_noi_dung_mon_hoc');
                Route::post('/them_noi_dung_muc_chuong','hocPhanController@them_muc');
                Route::post('/them_phuong_phap_danh_gia','hocPhanController@them_hoc_phan_loaiHTDG');
            });
            // Route::post('sua/{id}', '');
            // Route::post('xoa/{id}', '');
        });

        //khối kiến thức
        Route::group(['prefix' => 'khoi-kien-thuc'], function () {
            Route::get('/', 'khoiKienThucController@index');
            Route::post('them', 'khoiKienThucController@them');
            Route::post('sua', 'khoiKienThucController@sua');
            Route::get('xoa/{maKhoiKT}', 'khoiKienThucController@xoa');
        });

        //phương pháp giảng dạy
        Route::group(['prefix' => 'phuong-phap-giang-day'], function () {
            Route::get('/', 'ppGiangDayController@index');
            Route::post('/them', 'ppGiangDayController@them');
            Route::post('/sua', 'ppGiangDayController@sua');
            // Route::post('xoa/{id}', '');
        });

        //quản lý tài khoản
        Route::prefix('tai-khoan')->group(function () {
            Route::get('/','AdAccountController@index');
            Route::post('/them', 'AdAccountController@them');
            Route::post('/sua', 'AdAccountController@sua');
            Route::get('/xoa/{username}','AdAccountController@xoa');
            Route::get('/khoa/{username}','AdAccountController@khoa');

            Route::get('/mo-khoa/{username}','AdAccountController@mo_khoa');

        });

        //PTTMai thêm, thống kê admin
        Route::group(['prefix' => 'thong-ke'], function () {
            Route::get('/', 'thongKeController@index');
            Route::group(['prefix' => 'thong-ke-cap-chuong-trinh'], function () {
                Route::get('/{maCT}', 'thongKeController@thong_ke_CT_theo_CDR3');
                Route::get('/get-chuan-dau-ra-3-chuong-trinh','thongKeController@get_CDR3_chuong_trinh');
                //Route::get('/get-xep-hang','thongKeController@get_xep_hang');
                //Route::get('/thong-ke-theo-diem-chu/{maCTBaiQH}/{maCanBo}', 'thongKeController@thong_ke_theo_diem_chu');
                //Route::get('/get-diem-chu','thongKeController@get_diem_chu');
                //Route::get('/thong-ke-theo-tieu-chi/{maCTBaiQH}/{maCanBo}', 'thongKeController@thong_ke_theo_tieu_chi');
                //Route::get('/get-tieu-chi','thongKeController@get_tieu_chi'); 


                //Route::get('/thong-ke-theo-xep-hang-kl/{maCanBo}','thongKeController@thong_ke_theo_xep_hang_kl');
                //Route::get('/get-xep-hang-kl','thongKeController@get_xep_hang_kl');
                //Route::get('/thong-ke-theo-diem-chu-kl/{maCanBo}','thongKeController@thong_ke_theo_diem_chu_kl');
                //Route::get('/get-diem-chu-kl','thongKeController@get_diem_chu_kl');
                //Route::get('/thong-ke-theo-tieu-chi-kl/{maCanBo}','thongKeController@thong_ke_theo_tieu_chi_kl');
                //
                
            });
        });
        //Hết phần PTTMai thêm
    });
 });
