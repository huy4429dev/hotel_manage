{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Tạo bài viết')

@section('content_header')
<h4>Thêm bài viết</h4>
@stop

@section('content')
 <textarea name=text id="text" cols="30" rows="10"></textarea>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
    CKEDITOR.replace( 'text', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

    } );
    </script>
    @include('ckfinder::setup')
<script>
    console.log('Hi!');
</script>
@stop
