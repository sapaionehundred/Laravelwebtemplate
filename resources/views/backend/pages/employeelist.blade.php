@extends('backend.layouts.main_template')
@section('content')

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Employee List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Employee List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">ตารางแสดงรายชื่อพนักงาน</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="mt-b">
                    {{$employees->links('pagination::bootstrap-4');}}
                    </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>ชื่อ-สกุล</th>
                  <th>เพศ</th>
                  <th>อายุ(ปี)</th>
                  <th>ที่อยู่</th>
                  <th>เบอร์โทร</th>
                  <th>รูปภาพ</th>
                  <th>สถานะ</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($employees as $employee)      
                <tr>
                  <td>{{$employee->id}}</td>
                  <td>{{$employee->fullname}}</td>
                  <td>{{$employee->gender}}
                  <td>{{$employee->age}}
                  <td>{{$employee->address}}
                  <td>{{$employee->tel}}
                  <td><img src="{{$employee->avartar}}" width="50"></td>
                  <td>{{$employee->status}}
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>ชื่อ-สกุล</th>
                    <th>เพศ</th>
                    <th>อายุ(ปี)</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th>รูปภาพ</th>
                    <th>สถานะ</th>
                </tr>
                </tfoot>
              </table>
              <div class="mt-3">
              {{$employees->links('pagination::bootstrap-4');}}
              </div>
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

@endsection