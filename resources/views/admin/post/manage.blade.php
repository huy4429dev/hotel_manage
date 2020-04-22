{{-- resources/views/admin/manage.blade.php --}}

@extends('adminlte::page')

@section('title', 'Quản lý bài viết')

@section('content_header')

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Quản lý bài viết</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">

                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tr class="jsgrid-header-row">
                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 300px;">Tên bài viết
                            </th>
                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                style="width: 400px;">Mô tả</th>
                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Sửa bài viết
                            </th>
                            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                style="width: 150px;">Xoá bài viết</th>
                        </tr>
                    </table>
                </div>

                <div class="jsgrid-grid-body" style="height: 821px;">
                    <table class="jsgrid-table">
                        <tbody>
                            <!-- data -->
                            @foreach ($posts as $post)
                            <tr class="jsgrid-row">
                                <td class="jsgrid-cell" style="width: 300px;">{{$post->tieu_de}}</td>
                                <td class="jsgrid-cell jsgrid-align-right" style="width: 400px;">{{$post->mo_ta}}</td>
                                <td class="jsgrid-cell" style="width: 150px;">
                                    <a href="/admin/post/update/{{$post->id}}">Sửa</a>
                                </td>
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">
                                    <input type="checkbox" name="delete_post" value={{$post->id}}>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="jsgrid-pager-container">
                    <button onclick="deleteAll()">Xoá tất cả bài viết đã chọn</button>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>

<script>

    function deleteAll() {

        var array = document.getElementsByName("delete_post");
        for (let i = 0; i < array.length; i++) {

            if (array[i].checked == true) {
                let id = array[i].value;

                try {
                    let request = $.get('/admin/post/delete/' + id);
                    request.done(function(response) {
                        //alert(response);
                    });
                } catch (error) {
                    alert('Không thể xoá !');
                }
            }
        }

        location.reload(true);
    }
</script>

@stop