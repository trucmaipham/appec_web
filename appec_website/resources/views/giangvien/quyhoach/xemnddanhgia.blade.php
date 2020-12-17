@extends('giangvien.master')
@section('content')
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                  Đồ án<noscript></noscript>
                  <nav></nav>
                </h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="{{ asset('/giang-vien') }}">Trang chủ</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="quyhoachKQHT.html">Đồ án</a>
                  </li>
                  <li class="breadcrumb-item active">Nội dung đánh giá</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        @if(session('success'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-check"></i> Thông báo!</h5>
          {{session('success')}}
        </div>
      @endif
      @if(session('warning'))
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> Thông báo!</h5>
          {{session('warning')}}
        </div>
      @endif
      
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
                        <i class="fas fa-plus"></i> Thêm
                      </button>
                      <a href="{{ asset('giang-vien/quy-hoach-danh-gia/xem-tieu-chi-danh-gia/'.$maCTBaiQH) }}"class="btn btn-primary">
                       
                          <i class="fas fa-plus"></i> Tiêu chí đánh giá đồ án
                        
                      </a>

                      {{-- <button
                        type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#addLecture"
                      >
                        <i class="fas fa-user-plus"></i> Thêm giảng viêng cộng
                        tác
                      </button> --}}

                      <!-- Modal -->
                      <div
                        class="modal fade bd-example-modal-lg"
                        id="exampleModal"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <form action="{{ asset('/giang-vien/quy-hoach-danh-gia/them-phieu-cham') }}" method="post">
                           @csrf
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Thêm phiếu chấm
                              </h5>
                              <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label for="hocphan" style="font-size: 20px">Chọn đề tài</label> 
                                <!-- Button trigger modal -->
                                <select name="maDe" id="" class="form-control custom-select">
                                    @foreach ($deThi as $md)
                                        
                                        <option value="{{$md->maDe}}">
                                            {{$md->tenDe}}
                                        </option>
                                    @endforeach
                                </select>
                              </div>
                              <div>
                                <label for="">Chọn sinh viên</label>
                                <select name="maSSV" id="" class="form-control custom-select">
                                  @foreach ($dsLop as $sv)
                                      <option value="{{$sv->maSSV}}">{{$sv->maSSV}}--{{$sv->HoSV}} {{$sv->TenSV}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">
                                Lưu
                              </button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Hủy
                              </button>
                            </div>
                          </div>
                          </form>
                         
                        </div>
                      </div>

                      <!-- Modal -->
                      <div
                        class="modal fade bd-example-modal-lg"
                        id="addLecture"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Thêm giảng viên cộng tác
                              </h5>
                              <button  type="button" class="close" data-dismiss="modal" aria-label="Close"
                               >
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label for="hocphan" style="font-size: 20px">Chọn khoa</label>
                                <!-- Button trigger modal -->
                                <select name="" id="" class="form-control">
                                  <option value="1">
                                    Khoa kỹ thuật và công nghệ
                                  </option>
                                  <option value="1">
                                    Nông nghiệp thủy sản
                                  </option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="hocphan" style="font-size: 20px"
                                  >Chọn bộ môn</label>
                                <!-- Button trigger modal -->
                                <select name="" id="" class="form-control">
                                  <option value="1">Công nghệ thông tin</option>
                                  <option value="1">Điện tử</option>
                                </select>
                              </div>
                              <div>
                                <label for=""  style="font-size: 20px">Chọn giảng viên</label>
                                <select name="" id="" class="form-control">
                                  <option value="">Võ Thành C</option>
                                  <option value="">Dương Ngọc Vân Khanh</option>
                                </select>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary">
                                Lưu
                              </button>
                              <button type="button"  class="btn btn-secondary"  data-dismiss="modal">
                                Hủy
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </h3>
                  </div>
                  {{-- <div class="card-header">Giảng viên cộng tác: <b>Võ Thành C</b></div> --}}
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table
                      id="example2"
                      class="table table-bordered table-hover"
                    >
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>
                         
                          
                          <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#themDT">
                              <i class="fas fa-plus"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="themDT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <form action="{{ asset('/giang-vien/quy-hoach-danh-gia/them-de-tai') }}" method="post">
                                  @csrf
                                  <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm đề tài</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label for="">Nhập mã đề tài:</label>
                                      <input type="text" name="maDe" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Nhập tên đề tài:</label>
                                      <input type="text" name="tenDe" class="form-control">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                   
                                  </div>
                                </div>
                                </form>
                                
                              </div>
                            </div>
                          Tên đề tài
                          </th>
                          <th>Sinh viên thực hiện</th>
                          <th>Mã sinh viên</th>
                          <th>Tùy chọn</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($deThi as $dt)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$dt->tenDe}}</td>
                          <td>{{$dt->HoSV}} {{$dt->TenSV}}</td>
                          <td>{{$dt->maSSV}}</td>
                          <td>
                            <button class="btn btn-primary">
                              <i class="fas fa-edit"></i> Chỉnh sửa
                            </button>
                          </td>
                        </tr>
                        @endforeach
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
      <!-- /.content-wrapper -->
@endsection