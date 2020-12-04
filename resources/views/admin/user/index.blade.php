@extends('admin.layouts.main')
@section('sub-title', 'User')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session('success') }}
        </div>
    @endif

    <a href=" {{route('user.create')}} " class="btn btn-info btn-sm">Add User</a>
    <br><br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Email</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $result => $hasil)
            <tr>
                <td>{{$result + $user->firstitem()}}</td>
                <td>{{$hasil->name}}</td>
                <td>{{$hasil->email}}</td>
                <td>
                    @if ($hasil->type)
                        <span class="badge badge-info">Administrator</span>
                        @else
                        <span class="badge badge-warning">Author</span>
                    @endif
                </td>
                <td>
                    <form action=" {{route('user.destroy', $hasil->id)}} " method="POST">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                        <a href=" {{route('user.edit', $hasil->id) }} " class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    {{ $user->links() }}

@endsection