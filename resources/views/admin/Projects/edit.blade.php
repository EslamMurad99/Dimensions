@extends('admin.layout')

@section('title', 'تعديل مشروع')

@section('content')
<div class="container">
    <h1>تعديل المشروع</h1>
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- حقول المشروع -->
        <button class="btn btn-primary">تحديث</button>
    </form>
</div>
@endsection