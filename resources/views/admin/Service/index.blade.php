@extends('admin.layout')

@section('title', 'كل الخدمات')

@section('content')
<div class="container">
    <h1>قائمة الخدمات</h1>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">إضافة خدمة جديدة</a>
    <!-- جدول الخدمات -->
</div>
@endsection
