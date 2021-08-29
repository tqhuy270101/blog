@extends('backend.layout-admin')
@section('admin-content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-12 alert alert-success d-flex justify-content-center" role="alert">
                <h1>Danh sách bài viết</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table id="example" class="table table-hover table-responsive-xl" width="100%" data-page-length="10" data-order="[[ 1, &quot;asc&quot; ]]">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>Lĩnh vực</th>
                            <th>Người đăng</th>
                            <th>Ngày đăng</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($baiViet as $key => $bv)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$bv->title}}</td>
                            <td>{{$bv->field}}</td>
                            <td>{{$bv->poster}}</td>
                            <td>{{$bv->created_at}}</td>
                            <td><a href="{{ route('admin.bai-viet.sua-bai-viet',['id' => $bv->id]) }}"><i class="far fa-edit"></i></a></td>
                            <td><a href="{{ route('admin.bai-viet.xoa-bai-viet',['id' => $bv->id]) }}"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{('../backend/datatable/js/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="{{('../backend/datatable/js/script.js')}}"></script>
@endsection