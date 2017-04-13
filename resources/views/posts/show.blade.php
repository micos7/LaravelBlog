@extends('main')

@section('title','| View post')

@section('content')
<div class="row">
  <div class="col-md-8">

    <h1>{{ $post->title }}</h1>

    <p class="lead">{{ $post->body}}</p>
    </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created at:</dt>
          <dd>{{date('M j, Y H:i',strtotime($post->created_at))}}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Last updated:</dt>
          <dd>{{date('M j, Y H:i',strtotime($post->updated_at))}}</dd>
        </dl>
        <hr>

        <div class="row">
          <div class="col-sm-6">

             <a href="{{  route('posts.edit', $post->id, 'Edit')  }}" class="btn btn-primary btn-block">Edit</a>
          </div>
          <div class="col-sm-6">
             <a href="{{  route('posts.destroy', $post->id, 'Delete')  }}" class="btn btn-danger btn-block">Delete</a>
          </div>
        </div>
      </div>

    </div>

</div>


@endsection
