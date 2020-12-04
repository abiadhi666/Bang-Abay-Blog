@extends('admin.layouts.main')
@section('sub-title', 'Add Tag')
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

    <form action=" {{route('tag.store')}} " method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
        <label>Tag</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Save Tag</button>
    </div>
    </form>


@endsection