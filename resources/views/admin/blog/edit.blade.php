@extends('admin.layout')
 
@section('heading', 'Edit Blog Post')
 
@section('content')
 
<form method="POST" action="{{ route('admin.blog.update', $post) }}" enctype="multipart/form-data" class="bg-white rounded-xl border border-gray-100 p-6">
    @csrf
    @method('PUT')
    @include('admin.blog._form')
</form>
 
@endsection