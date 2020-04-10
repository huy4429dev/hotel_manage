{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Cấu hình phòng')

@section('content_header')
<h4>Cấu hình phòng</h4>
@stop

@section('content')
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Cập nhật thông số</h3>
    </div>
    <div class="card-body">
        <!-- Color Picker -->
        <div class="form-group">
            <label>Số tầng:</label>
            <input type="text" class="form-control my-colorpicker1">
        </div>

        <div class="form-group">
            <label>Số phòng:</label>
            <input type="text" class="form-control my-colorpicker1">
        </div>

        <div class="form-group">
            <label>Mã phòng:</label>
            <input type="text" class="form-control my-colorpicker1">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Thiết lập</button>
        </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop