@extends('layouts.admin')
@section('content')
    <div class="py-3">
        <h2>إضافة منتج جديد</h2>
        <form action="{{ url('products/store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="quantityFormControlInput" class="form-label">الكمية</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
            </div>
            <div class="mb-3">
                <label for="priceFormControlInput" class="form-label">السعر</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="descriptionFormControlTextarea" class="form-label">وصف المنتج</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb3">
                <label for="selectProductFormControlTextarea" class="form-label">اختر الصنف</label>
                <select class="form-control mb-3" name="category" id="category">
                    <option value="#"></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">إضافة المنتج</button>
        </form>
    </div>
@endsection
