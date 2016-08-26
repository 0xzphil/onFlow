@extends('index')


@section('container')
<div class="container zerogrid">
<div class="wrap-col">
        <div class="post">
            <div class="post-margin">
<p><h1>
	Update {{ $post-> title}}
</h1></p>
{{ Form:: model($post, ['method'=> 'PATCH' ,'action'=> ['PostController@update', $post-> post_id]])}}
	<p>
	{{Form::label('Title')}}
	</p>
	<p>
	{{Form::text('title', null, ['class'=> 'class-control'])}}
	</p>
	<p>
	{{Form::select('category_id', $listCategory->toArray())}}
	</p>
	<p>

	{{Form::label('Content')}}
	</p>
	<p>
	{{Form::textarea('content', null, ['class'=> 'class-control'])}}
	</p>
	<p>
	{{Form::submit('submit', null	, ['class'=> 'class-control'])}}
	</p>
{{ Form::close()}}


<!-- get bugs -->
@if($errors->any())
	<div class="post">
	@foreach($errors->all() as $error)
		<li>
		{{ $error }}
		</li>
	@endforeach
	</div>
@endif
</div>
</div>
</div>
</div>

@stop