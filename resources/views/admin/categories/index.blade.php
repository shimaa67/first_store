@extends('layouts.admin')
@section('content')
    <div class="py-4">
        <a href="{{ url('categories/create') }}" class="btn btn-primary mb-3">أضف صنف جديد</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الصنف</th>
                    <th scope="col">الأحداث</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>

                            <form action="{{ url('categories/delete/'.$category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >حذف</button>
                            </form>

                            <a href="{{ url('categories/edit/'.$category->id) }}" class="btn btn-info">تعديل</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

