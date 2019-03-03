@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
      <h1>
        Edit Users
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Edit Users</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="">
              {{ csrf_field() }}
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12"><label>UserName:</label>
                      <input type="text" class="form-control" placeholder="" name="name" value="{{$users->name}}">
                    </div>
                    <div class="col-xs-12"><label>Email:</label>
                      <input type="text" class="form-control" placeholder="" name="email" value="{{$users->email}}">
                    </div>
                    <div class="col-xs-12"><label>Password:</label>
                      <input type="password" class="form-control" placeholder="" name="password" value="{{$users->password}}">
                    </div>
                  </div>
                </div>
              <button type="submit" class="btn btn-block btn-primary btn-lg" name="edit">Lưu lại</button>
              </form>
            </div>
            <!-- /.box-body -->
          </div>        
        </div>
      </div>
    </section>
  <!-- /.content-wrapper -->
@endsection