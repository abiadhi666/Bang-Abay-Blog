@extends('admin.layouts.main')
@section('sub-title', 'Add User')
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

    <form action=" {{route('user.store')}} " method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label>User Type</label>
        <select type="email" class="form-control" name="type">
            <option value="">Select user type</option>
            <option value="1">Administrator</option>
            <option value="0">Author</option>
        </select>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Save User</button>
    </div>
    </form>


@endsection