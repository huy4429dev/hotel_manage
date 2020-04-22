{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Cập nhật bài viết')

@section('content_header')
<h4>Thêm bài viết</h4>
@stop

@section('content')
<form action="#" method="POST" onsubmit="return check()">
    @csrf
    
    Tiêu đề:<br> 
    <input style="width: 600px;" id="tieu_de" name="tieu_de" value="{{$post->tieu_de}}"><br>
    Hình ảnh:<br>
    <input style="width: 600px;" id="hinh_anh" name="hinh_anh" value="{{$post->hinh_anh}}"><br>
    Mô tả:<br>
    <input style="width: 600px;" id="mo_ta" name="mo_ta" value="{{$post->mo_ta}}"><br><br>

    <textarea name=text id="text" cols="30" rows="10">{{$post->noi_dung}}</textarea>
    <br>
    <button type="submit">Lưu bài viết</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>
    CKEDITOR.replace('text', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

    });

    function check(){
        var tieu_de = document.getElementById('tieu_de').value;
        var mo_ta   = document.getElementById('mo_ta').value;
        var hinh_anh= document.getElementById('hinh_anh');
        
        if(tieu_de == "" || mo_ta == "" || hinh_anh == ""){
            alert('Không được để trống các trường tiêu đề, mô tả, hình ảnh!');
            return false;
        }

        return true;
    }

</script>
@include('ckfinder::setup')

@stop