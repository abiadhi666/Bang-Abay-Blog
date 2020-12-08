@extends('admin.layouts.main')
@section('sub-title', 'Edit Post')
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

    <form action=" {{route('post.update', $post->id)}} " method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    {{method_field('PATCH')}}
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category_id">
            <option value="" holder>Select Category</option>
            @foreach ($category as $result)
            <option value=" {{$result->id}} "
                @if ($post->category_id == $result->id)
                    selected
                @endif
            > {{$result->name}} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" name="content" id="content">{{$post->content}}</textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail</label>
        <input class="form-control" type="file" name="image">
    </div>
    <div class="form-group">
        <label>Tag</label>
        <select class="form-control select2" multiple="" name="tags[]">
          @foreach ($tags as $tag)
            <option value="{{$tag->id}}"
                @foreach ($post->tags as $value)
                    @if ($tag->id == $value->id)
                        selected
                    @endif
                @endforeach
            > {{$tag->name}} </option>
          @endforeach
        </select>
      </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Update Post</button>
    </div>
    </form>
    {{-- CKeditor --}}
	<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>


@endsection