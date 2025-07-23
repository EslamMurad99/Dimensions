@extends('admin.layout')

@section('title', 'إضافة مشروع')

@section('content')
<div class="container">
    <h1>إضافة مشروع جديد</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <!-- حقول المشروع -->
        <button class="btn btn-success">حفظ</button>
    </form>
</div>
@endsection