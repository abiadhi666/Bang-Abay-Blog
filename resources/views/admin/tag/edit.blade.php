@extends('admin.layouts.main')
@section('sub-title', 'Edit Tag')
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

    <form action=" {{route('tag.update', $tag->id)}} " method="POST">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <div class="form-group">
        <label>Tag</label>
        <input type="text" class="form-control" name="name" value=" {{ $tag->name }} ">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Update Tag</button>
    </div>
    </form>


@endsection