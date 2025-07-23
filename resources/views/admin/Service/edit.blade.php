@extends('admin.layout')

@section('title', 'تعديل خدمة')

@section('content')
<div class="container">
    <h1>تعديل خدمة</h1>
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- حقول الخدمة -->
        <button class="btn btn-primary">تحديث</button>
    </form>
</div>
@endsection
