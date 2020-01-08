@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
        <h2 style="text-align: center;">EDIT</h2>
        
    </div>
</div>
<div class="container">
	<div>
		<form action="{{ route('update-data', $blog->id) }}" method="post">
      		@csrf
			<p>Title</p>
			<input type="text" name="title" value="{{ $blog->title }}"><br><br>
			<p>Post</p>
			<textarea name="description"> {{ $blog->description }} </textarea><br><br>
			<input type="radio" name="typeofnews" value="Trending">Trending<br>
		 	<input type="radio" name="typeofnews" value="Sports">Sports<br>
		    <input type="radio" name="typeofnews" value="News">News<br>
			<br>
      <button type="submit" class="btn btn-primary">Update</button>

		</form>
	</div>
</div>



@endsection

