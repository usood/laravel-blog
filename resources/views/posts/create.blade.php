@extends ('layouts.master')

@section ('content')

<div class="col-md-8 blog-main">

    <h1>Create the post</h1>

    <hr />

    <form method="post" action="/posts">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" >
      </div>
      <div class="form-group">
        <label for="body">Body:</label>
        <textarea id="body" class="form-control" name="body" rows="8" cols="80"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Publish</button>
      @include('layouts.errors')
    </form>

</div>

@endsection
