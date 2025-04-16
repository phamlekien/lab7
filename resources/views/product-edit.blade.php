<h1>Đây là trang Sửa sản phẩm sp</h1>

<form action="{{ route('product.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" required value="{{ $product->name }}">
    <label for="price">Giá sản phẩm:</label>
    <input type="number" id="price" name="price" required value="{{ $product->price }}">
    <label for="description">Mô tả sản phẩm:</label>
    <textarea id="description" name="description" required>
        {{ $product->description }}
    </textarea>

    <button class="btn-danger">Sửa sản phẩm</button>
</form>

<a href="{{ route('product.index') }}">Danh sách sản phẩm</a>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

