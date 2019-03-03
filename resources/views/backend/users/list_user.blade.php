@extends('backend.layouts.master')

@section('content')
@include('errors.success')
<section class="content-header">
        <h1>
        DANH SÁCH USERS
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Quản lý users</a></li>
            <li class="active">Danh sách users</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                    <h3 class="box-title">Danh sách Users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr  style="width: 100%;">
                                <th style="width: 5%;">ID</th>
                                <th style="width: 15%;">Tên tài khoản</th>
                                <th style="width: 20%;">Email</th>
                                <th style="width: 25%;">Mật khẩu</th>
                                <th style="width: 6%;"></th>
                                <th style="width: 6%;"></th>
                            </tr>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->password}}</td>
                                <td><a href="{{asset('del_list_user/'.$user->id)}}" style='color: red;'><i class='fa fa-fw fa-trash'></i> Xóa</a></td>
                                <td><a href="{{asset('edit_user/'.$user->id)}}" style='color: red;'><i class='fa fa-fw fa-edit'></i> Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection