@extends('main')

@section('title', '| Create new post')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Create New Post</h1>
    <hr>
    <form method="POST" action="{{ route('posts.store') }}">
      <div class="form-group">
        <label name="title">Title:</label>
        <input id="title" name="title" class="form-control">
      </div>
      <div class="form-group">
        <label name="body">Post Body:</label>
        <textarea id="body" name="body" rows="10" class="form-control"></textarea>
      </div>
      <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
      {{ csrf_field() }}
    </form>
  </div>
</div>﻿

@endsection
