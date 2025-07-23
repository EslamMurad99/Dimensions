@extends('admin.layout')

@section('content')
<div class="container">
    <h2 class="mb-4">الإعدادات العامة</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="site_name">اسم الموقع</label>
            <input type="text" name="site_name" id="site_name" class="form-control" value="{{ old('site_name', $settings['site_name'] ?? '') }}">
        </div>

        <div class="form-group mb-3">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $settings['email'] ?? '') }}">
        </div>

        <div class="form-group mb-3">
            <label for="phone">رقم الهاتف</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $settings['phone'] ?? '') }}">
        </div>

        <div class="form-group mb-3">
            <label for="facebook">رابط فيسبوك</label>
            <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $settings['facebook'] ?? '') }}">
        </div>

        <div class="form-group mb-3">
            <label for="twitter">رابط تويتر</label>
            <input type="text" name="twitter" id="twitter" class="form-control" value="{{ old('twitter', $settings['twitter'] ?? '') }}">
        </div>

        <button type="submit" class="btn btn-primary">حفظ الإعدادات</button>
    </form>
</div>
@endsection
