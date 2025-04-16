@extends('client')

@section('title', 'Danh mục sản phẩm')

@section('content')

<h1>Đây là danh sách danh mục</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<button>
    <a href="{{ route('category.add') }}">Thêm mới ở đây</a>
</button>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên loại</th>
            <th>Mô tả</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('product.edit', $category->id) }}">Sửa</a> |
                    <form action="{{ route('product.delete', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('product.index') }}">Danh sách sản phẩm</a>


@endsection