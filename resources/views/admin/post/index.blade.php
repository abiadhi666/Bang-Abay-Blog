@extends('admin.layouts.main')
@section('sub-title', 'Post')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session('success') }}
        </div>
    @endif

    <a href=" {{route('post.create')}} " class="btn btn-info btn-sm">Add Post</a>
    <br><br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Post</th>
                <th>Category</th>
                <th>Tag</th>
                <th>User</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $result => $hasil)
            <tr>
                <td>{{$result + $post->firstitem()}}</td>
                <td>{{$hasil->title}}</td>
                <td>{{$hasil->category->name}}</td>
                <td>@foreach ($hasil->tags as $tag)
                        <ul>
                            <span class="badge badge-primary">{{$tag->name}}</span>
                        </ul>
                    @endforeach
                </td>
                <td>{{$hasil->users->name}}</td>
                <td><img src="{{asset($hasil->image)}}" alt="Empty Image" class="img-fluid" style="width: 100px"></td>
                <td>
                    <form action=" {{route('post.destroy', $hasil->id)}} " method="POST">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                        <a href=" {{route('post.edit', $hasil->id) }} " class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    {{ $post->links() }}

@endsection