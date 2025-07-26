@extends('admin.layout')

@section('title', 'إضافة جهة اتصال')

@section('content')
<div class="container">
    <h1>إضافة جهة اتصال</h1>
    <form action="{{ route('admin.contacts.store') }}" method="POST">
        @csrf
        <!-- حقول -->
        <button class="btn btn-success">حفظ</button>
    </form>
</div>
@endsection
