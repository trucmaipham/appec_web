@extends('admin.master')
@section('content')
<div class="content-wrapper" style="min-height: 96px;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            Hệ đào tạo<noscript></noscript>
            <nav></nav>
          </h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Hệ đào tạo</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus"></i>Thêm
    </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Thêm hệ đào tạo</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
<div class="modal-body">
  
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
  <button type="button" class="btn btn-primary">Lưu</button>
</div>
</div>
</div>
</div>

                <!-- Modal -->
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                          Thêm học phần
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="">Nhập tên hệ đào tạo:</label>
                          <input type="text" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary">
                          Lưu
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                          Hủy
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Thêm học phần
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="">Nhập tên hệ đào tạo:</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary">
                            Lưu
                          </button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Hủy
                          </button>
                        </div>
                      </div>
                    </div>
                  </div><table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên hệ đào tạo</th>
                    <th>Tùy chọn</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Chính quy</td>
                    <td>
                      
                        <button class="btn btn-success" data-toggle="modal" data-target="#addModal">
                          <i class="fas fa-align-justify"></i> chỉnh sửa
                        </button>
                      
                    </td>
                  </tr>
                  
                  <tr>
                    <td>2</td>
                    <td>Liên thông</td>
                    <td>
                      <a href="#">
                        <button class="btn btn-success">
                          <i class="fas fa-align-justify"></i> chỉnh sửa
                        </button>
                      </a>
                    </td>
                  </tr>
                </tbody>
                <tfoot></tfoot>
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