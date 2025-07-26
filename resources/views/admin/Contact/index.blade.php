@extends('admin.layout')

@section('title', 'رسائل التواصل')

@section('content')
<div class="container">
    <h1>رسائل التواصل</h1>
    <h1>صفحة جهات الاتصال</h1>
    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">اضافة جهة اتصال جديد</a>
    <!-- جدول الرسائل -->
</div>
@endsection
