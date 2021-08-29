@extends('backend.layout-admin')
@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12 alert alert-success d-flex justify-content-center" role="alert">
            <h1>Sửa bài viết</h1>
        </div>
    </div>
    <div class="row them-bai-viet">
        <div class="col-md">
            @foreach($baiViet as $key => $bv)
            <form method="post">
                @csrf
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control" name="tieuDe" placeholder="" value="{{ $bv->title }}" required>
                </div>
                <div class="form-group">
                    <label>Lĩnh vực</label>
                    <input type="text" class="form-control" name="linhVuc" placeholder="" value="{{ $bv->field }}" required>
                </div>
                <div class="form-group">
                    <label>Người đăng</label>
                    <input type="text" class="form-control" name="nguoiDang" placeholder="" value="{{ $bv->poster }}" required>
                </div>
                <div class="form-group">
                    <label>Ảnh tiêu đề</label>
                    <input type="text" class="form-control" name="anhTieuDe" placeholder="" value="{{ $bv->image }}" required>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea  id="noidung" name="noiDung">{{ $bv->content }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn-them-bai-viet">Sửa bài viêt</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('noidung');
</script>
@endsection