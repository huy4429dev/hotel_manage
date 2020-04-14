{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h4>Quản lý nhân viên</h4>
@stop

@section('content')
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Thêm nhân viên</h3>
    </div>
    <div class="card-body">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors -> all() as $err)
            {{$err}} <br>
            @endforeach
        </div>
        @endif
        @if(session('mess'))
        <div class="alert alert-success">
            {{session('mess')}}
        </div>
        @endif
        <form  method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- Color Picker -->
            <div class="form-group">
                <label>Tên:</label>
                <input type="text" name="name" class="form-control my-colorpicker1">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" class="form-control my-colorpicker1">
            </div>

            <div class="form-group">
                <label>Avatar:</label>
                <input type="file" class="my-colorpicker1" name="avatar">
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input type="text" name="phone" class="form-control my-colorpicker1">
            </div>

            <div class="form-group">
                <label>Ngày sinh:</label>
                <input type="text" name="birthday" class="form-control my-colorpicker1">
            </div>
            <div class="form-group">
                <label>Châm ngôn:</label>
                <input type="text" name="chamngon" class="form-control my-colorpicker1">
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control my-colorpicker1">
            </div>
            <div class="form-group">
                <label>Địa chỉ:</label>
                <input type="text" name="address" class="form-control my-colorpicker1">
            </div>
            <div class="form-group">
                <label>Kĩ năng:</label>
                <input type="text" name="skill" class="form-control my-colorpicker1">
            </div>
            <div class="form-group">
                <label>Ghi chú:</label>
                <input type="text" name="note" class="form-control my-colorpicker1">
            </div>
            <div class="form-group">
                <label>Vị trí/chức danh:</label>
                <select name="position" class="form-control my-colorpicker1">
                    <option value="2">Giám đốc</option>
                    <option value="3">Quản lý</option>
                    <option value="4">Nhân viên</option>
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Thiết lập</button>
            </div>
        </form>
    </div>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
@stop
@section('js')
<script>
    console.log('Hi!');
</script>
@stop