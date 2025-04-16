<h1>Đây là trang thêm mới danh mục</h1>
<form action="{{ route('category.store') }}" method="post">
    @csrf
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
    @error('name')
        {{ $message }}
    @enderror
    <br>
    <label for="description">Mô tả sản phẩm:</label>
    <textarea id="description" name="description">
        {{ old('description') }}
    </textarea>
    @error('description')
        {{ $message }}
    @enderror
    <br>

    <button class="btn-danger">Thêm danh mục</button>
</form>


<a href="{{ route('category.index') }}">Danh sách sản phẩm</a>
