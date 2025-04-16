<h1>Đây là trang thêm mới sản phẩm hihiis</h1>
<form action="{{ route('product.store') }}" method="post">
    @csrf
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" required>
    <label for="price">Giá sản phẩm:</label>
    <input type="number" id="price" name="price" required>
    <label for="description">Mô tả sản phẩm:</label>
    <textarea id="description" name="description" required></textarea>

    <button type="submit"class="btn-danger">Thêm sản phẩm</button>
</form>


<a href="{{ route('product.index') }}">Danh sách sản phẩm</a>
