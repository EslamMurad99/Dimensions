@extends('admin.layout')

@section('title', 'كل المشاريع')

@section('content')
<div class="container">
    <h1>قائمة المشاريع</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">إضافة مشروع جديد</a>
    <!-- جدول المشاريع -->
</div>
@endsection