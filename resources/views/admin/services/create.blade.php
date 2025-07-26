@extends('admin.layout')

@section('title', 'إضافة خدمة')

@section('content')
<div class="container">
    <h1>إضافة خدمة جديدة</h1>
    <form action="{{ route('admin.services.store') }}" method="POST">
        @csrf
        <!-- حقول الخدمة -->
        <button class="btn btn-success">حفظ</button>
    </form>
</div>
@endsection
