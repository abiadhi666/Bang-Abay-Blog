@extends('admin.layouts.main')
@section('sub-title', 'Add Post')
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

    <form action=" {{route('post.store')}} " method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category_id">
            <option value="" holder>Select Category</option>
            @foreach ($category as $result)
            <option value=" {{$result->id}} "> {{$result->name}} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" name="content" id="content"></textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail</label>
        <input class="form-control" type="file" name="image">
    </div>
    <div class="form-group">
        <label>Tag</label>
        <select class="form-control select2" multiple="" name="tags[]">
          @foreach ($tags as $tag)
            <option value=" {{$tag->id}} "> {{$tag->name}} </option>
          @endforeach
        </select>
      </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Save Post</button>
    </div>
    </form>
    {{-- CKeditor --}}
	<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>


@endsection