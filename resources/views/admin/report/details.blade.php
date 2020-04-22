{{-- resources/views/admin/index.blade.php --}}

@extends('adminlte::page')

@section('title', 'Chi tiết phản hồi')

@section('content_header')

<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Chi tiết phản hồi</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body" style="position: relative; height: 600px; width: 100%;">
            Họ tên: {{$report->ho_ten}}<br>
            Email: {{$report->email}}<br>
            Số điện thoại: {{$report->so_dien_thoai}}<br>
            Chủ đề: {{$report->chu_de}}<br>
            Nội dung: {{$report->noi_dung}}<br>
        </div>
        <!-- /.card-body -->

    </div>

</section>

<script>
    
</script>

@stop