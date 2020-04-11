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
                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 300px;">Tên bài viết</th>
                            <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable"
                            style="width: 400px;">Mô tả</th>
                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Sửa bài viết</th>
                            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                style="width: 150px;">Xoá bài viết</th>
                        </tr>

                        <!-- <tr class="jsgrid-filter-row" style="display: none;">
                            <td class="jsgrid-cell" style="width: 150px;">
                                <input type="text"></td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">
                                <input type="number"></td>
                            <td class="jsgrid-cell" style="width: 200px;">
                                <input type="text"></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">
                                <select>
                                    <option value="0"></option>
                                    <option value="1">United States</option>
                                    <option value="2">Canada</option>
                                    <option value="3">United Kingdom</option>
                                    <option value="4">France</option>
                                    <option value="5">Brazil</option>
                                    <option value="6">China</option>
                                    <option value="7">Russia</option>
                                </select>
                            </td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">
                                <input type="checkbox" readonly=""></td>
                        </tr>

                        <tr class="jsgrid-insert-row" style="display: none;">
                            <td class="jsgrid-cell" style="width: 150px;"><input type="text"></td>
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number"></td>
                            <td class="jsgrid-cell" style="width: 200px;"><input type="text"></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select>
                                    <option value="0"></option>
                                    <option value="1">United States</option>
                                    <option value="2">Canada</option>
                                    <option value="3">United Kingdom</option>
                                    <option value="4">France</option>
                                    <option value="5">Brazil</option>
                                    <option value="6">China</option>
                                    <option value="7">Russia</option>
                                </select></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox">
                            </td>
                        </tr> -->

                    </table>
                </div>

                <div class="jsgrid-grid-body" style="height: 821px;">
                    <table class="jsgrid-table">
                        <tbody>
                            <!-- data -->
                            <tr class="jsgrid-row">
                                <td class="jsgrid-cell" style="width: 300px;">Cách đặt phòng</td>
                                <td class="jsgrid-cell jsgrid-align-right" style="width: 400px;">Mô tả về cách đặt phòng</td>
                                <td class="jsgrid-cell" style="width: 150px;">
                                    <a href="">Sửa</a>
                                </td>
                                <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">
                                    <input type="checkbox" name="delete">
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>

                <div class="jsgrid-pager-container">
                    <div class="jsgrid-pager">Pages: 
                            <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                                <a href="javascript:void(0);">Prev </a>
                            </span> 
                    
                            <span class="jsgrid-pager-nav-button">
                                <a href="javascript:void(0);"> Next</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>

<script>
    $(function () {
        $("#jsGrid1").jsGrid({
            height: "100%",
            width: "100%",

            sorting: true,
            paging: true,

            data: db.clients,

            fields: [
                { name: "Tên bài viết", type: "text", width: 150 },
                { name: "Mô tả", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 },
                { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                { name: "Married", type: "checkbox", title: "Is Married" }
            ]
        });
    });
</script>

<!-- <?php
    
    foreach($posts as $value){
        
        echo "
        <div style='margin-bottom: 20px;'>
            <p>Tên bài viết: $value->tieu_de</p>
            <p>Mô tả: $value->mo_ta</p>
            <button style='padding: 4px;'>Xoá</button>
        </div>
            ";
    }
?> -->

@stop