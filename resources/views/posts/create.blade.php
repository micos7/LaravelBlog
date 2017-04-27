@extends('main')

@section('title', '| Create new post')

@section('stylesheets')
{!!  Html::style('css/parsley.css')!!}
{!!  Html::style('css/select2.min.css')!!}
@endsection
@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Create New Post</h1>
    <hr>
    <form data-parsley-validate='' method="POST" action="{{ route('posts.store') }}">
      <div class="form-group">
        <label name="title">Title:</label>
        <input id="title" name="title" class="form-control"  required='' maxlength="255">
      </div>
      <div class="form-group">
        <label name="slug">Slug:</label>
        <input id="slug" name="slug" class="form-control"  required='' minlength="5" maxlength="255">
      </div>
      <div class="form-group">
      <label for="category_id">Category</label>
      <select class="form-control" id="category_id" name="category_id">
        @foreach($categories as $category)
          <option value={{ $category->id }}>
            {{ $category->name }}
          </option>
        @endforeach
      </select>
    </div>

      <div class="form-group">
      <label for="tags">Tags</label>
      <select class="form-control select2-multi" id="tags" name="tags[]" multiple="multiple">
        @foreach($tags as $tag)
          <option value={{ $tag->id }}>
            {{ $tag->name }}
          </option>
        @endforeach
      </select>
    </div>

      <div class="form-group">
        <label name="body">Post Body:</label>
        <textarea id="body" name="body" rows="10" class="form-control"  required=''></textarea>
      </div>
      <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
      {{ csrf_field() }}
    </form>
  </div>
</div>

@endsection

@section('scripts')
{!!  Html::script('js/parsley.min.js')!!}
{!!  Html::script('js/select2.min.js')!!}
<script>
  $('.select2-multi').select2();
</script>
@endsection
