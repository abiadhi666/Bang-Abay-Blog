@extends('admin.layouts.main')
@section('sub-title', 'Edit User')
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

    <form action=" {{route('user.update', $user->id)}} " method="POST">
    {!! csrf_field() !!}
    {{method_field('PUT')}}
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly>
    </div>
    <div class="form-group">
        <label>User Type</label>
        <select type="email" class="form-control" name="type">
            <option value="" holder>Select user type</option>
            <option value="1" holder
                @if ($user->type == 1)
                    selected
                @endif
            >Administrator</option>
            <option value="0" holder
                @if ($user->type == 0)
                    selected
                @endif
            >Author</option>
        </select>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Update User</button>
    </div>
    </form>


@endsection