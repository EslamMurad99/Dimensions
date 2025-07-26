@extends('admin.layout')

@section('title', 'تعديل جهة اتصال')

@section('content')
<div class="container">
    <h1>تعديل جهة اتصال</h1>
    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- حقول -->
        <button class="btn btn-primary">تحديث</button>
    </form>
</div>
@endsection
