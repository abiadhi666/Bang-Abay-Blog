@extends('admin.layouts.main')
@section('sub-title', 'Add Category')
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

    <form action=" {{route('category.store')}} " method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
        <label>Category</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Save Category</button>
    </div>
    </form>


@endsection