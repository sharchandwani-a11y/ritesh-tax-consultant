@extends('admin.layout')
 
@section('heading', 'New Blog Post')
 
@section('content')
 
<form method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data" class="bg-white rounded-xl border border-gray-100 p-6">
    @csrf
    @include('admin.blog._form')
</form>
 
@endsection
 