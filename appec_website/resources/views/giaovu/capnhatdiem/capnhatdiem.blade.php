@extends('giaovu.master')
@section('content')
<div class="content-wrapper" style="min-height: 155px;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Cập nhật điểm kết thúc môn<noscript></noscript><nav></nav></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Cập nhật điểm kết thúc môn</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  


  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                   
                  <div class="form-group">
                      <label for="hocphan">Chọn ngành</label>
                      <!-- Button trigger modal -->
                      <select id="nganh" class="form-control custom-select">
                          <option disabled="">--Chọn ngành--</option>
                          <option value="1" selected="">Công nghệ thông tin</option>
                          <option value="2">Cơ khí</option>
                          <option value="1">Điện tử - tự động hóa</option>
                          <option value="1">Xây dựng</option>
                      </select>
                    </div>
                    <div class="from-group">
                      <label for="">Chọn học kì</label>
                      <select name="" id="" class="form-control custom-select">
                        <option value="">Học kì 1</option>
                        <option value="">Học kì 2</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Nhập năm học:</label>
                      <input type="text" class="form-control" placeholder="VD: 2018-2019">
                    </div>
                    <button class="btn btn-success">
                      <i class="fas fa-filter"></i> Lọc
                    </button>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable no-footer dtr-inline" role="grid" aria-describedby="example2_info">
                  <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="STT: activate to sort column descending">STT</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Tên học phần: activate to sort column ascending">Tên học phần</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Giảng viên hướng dẫn: activate to sort column ascending">Giảng viên hướng dẫn</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Ngành: activate to sort column ascending">Ngành</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Học kì: activate to sort column ascending">Học kì</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Năm học: activate to sort column ascending">Năm học</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Tùy chọn: activate to sort column ascending">Tùy chọn</th></tr>
                </thead>
                 <tbody>
                    
                    
                  <tr role="row" class="odd">
                        <td class="sorting_1 dtr-control">1</td>
                        <td>Hệ quản trị cơ sở dữ liệu</td>
                        <td>Phan Thị Phương Nam</td>
                        <td>Công nghệ thông tin</td>
                        <td>Học kì 1</td>
                        <td>2018-2019</td>
                        <td>
                          
                          <a href="diemtheohocphan_1.html">
                            <button class="btn btn-primary"> 
                              <i class="fas fa-align-justify"></i> Cập nhật điểm theo nội dung đánh giá
                           </button>
                          </a>
                        </td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1 dtr-control">2</td>
                      <td>Công nghệ phần mềm</td>
                      <td>Phạm Minh Đương</td>

                      <td>Công nghệ thông tin</td>
                      <td>Học kì 1</td>
                      <td>2018-2019</td>
                      <td>
                        
                          <a href="diemtheohocphan_2.html">
                              <button class="btn btn-primary"> 
                                <i class="fas fa-align-justify"></i> Cập nhật điểm theo nội dung đánh giá
                             </button>
                            </a>
                       
                      </td>
                  </tr><tr role="row" class="odd">
                    <td class="sorting_1 dtr-control">3</td>
                    <td>Kỹ thuật Lập Trình</td>
                    <td>Võ Thành C</td>

                    <td>Công nghệ thông tin</td>
                    <td>Học kì 1</td>
                    <td>2018-2019</td>
                    <td>
                      <a href="diemtheohocphan_3.html">
                        <button class="btn btn-primary"> 
                          <i class="fas fa-align-justify"></i> Cập nhật điểm theo nội dung đánh giá
                       </button>
                      </a>
                     
                    </td>
                 </tr></tbody>
                  <tfoot>
               
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

         
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->





</div>
@endsection