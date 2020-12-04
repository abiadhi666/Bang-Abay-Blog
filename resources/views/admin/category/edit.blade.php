@extends('admin.layouts.main')
@section('sub-title', 'Edit Category')
@section('content')

    @if(count($errors)>0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session('success') }}
        </div>
    @endif

    <form action=" {{route('category.update', $category->id)}} " method="POST">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <div class="form-group">
        <label>Category</label>
        <input type="text" class="form-control" name="name" value=" {{ $category->name }} ">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Update Category</button>
    </div>
    </form>


@endsection