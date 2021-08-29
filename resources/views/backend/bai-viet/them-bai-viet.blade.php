@extends('backend.layout-admin')
@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-12 alert alert-success d-flex justify-content-center" role="alert">
            <h1>Thêm bài viết</h1>
        </div>
    </div>
    <div class="row them-bai-viet">
        <div class="col-md">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control" placeholder="" name="tieuDe" required>
                </div>
                <div class="form-group">
                    <label>Lĩnh vực</label>
                    <input type="text" class="form-control" placeholder="" name="linhVuc" required>
                </div>
                <div class="form-group">
                    <label>Người đăng</label>
                    <input type="text" class="form-control" placeholder="" name="nguoiDang" required>
                </div>
                <div class="form-group">
                    <label>Ảnh tiêu đề</label>
                    <input type="text" class="form-control" placeholder="" name="anhTieuDe" required>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea  id="noidung" name="noiDung" required></textarea>
                </div>
                <div class="form-group">
                    <button class="btn-them-bai-viet">Thêm bài viêt</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('noidung');
</script>
@endsection