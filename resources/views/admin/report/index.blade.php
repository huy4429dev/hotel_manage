{{-- resources/views/admin/index.blade.php --}}

@extends('adminlte::page')

@section('title', 'Quản lý phản hồi')

@section('content_header')

<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Quản lý phản hồi</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">

                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tr class="jsgrid-header-row">
                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 300px;">Họ tên</th>
                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                                style="width: 400px;">Chủ đề</th>
                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Xem chi tiết
                            </th>
                            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                style="width: 150px;">Xoá phản hồi</th>
                        </tr>
                    </table>
                </div>

                <div class="jsgrid-grid-body" style="height: 821px;">
                    <table class="jsgrid-table">
                        <tbody>
                            <!-- data -->
                            @foreach ($reports as $report)
                            <tr class="jsgrid-row">
                                <td class="jsgrid-cell" style="width: 300px;">{{$report->ho_ten}}</td>
                                <td class="jsgrid-cell jsgrid-align-right" style="width: 400px;">{{$report->chu_de}}
                                </td>
                                <td class="jsgrid-cell" style="width: 150px;">
                                    <a href="/admin/reports/{{$report->id}}">Chi tiết</a>
                                </td>
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">
                                    <input type="checkbox" name="delete_report" value={{$report->id}}>
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

</section>

<script>
    function deleteAll() {

        var array = document.getElementsByName("delete_report");
        for (let i = 0; i < array.length; i++) {

            if (array[i].checked == true) {
                let id = array[i].value;
                let URL = "/admin/reports/" + id;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: URL,
                    type: 'DELETE',
                    success: function (result) {
                        //alert(result);
                    },
                    error: function (request, msg, error) {
                        alert("Không thể xoá!");
                    }
                });
            }
        }

        location.reload(true);
    }
</script>

@stop