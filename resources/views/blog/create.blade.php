@extends('index')


@section('container')
<div class="container zerogrid">
<div class="post">
<p>
	Create new post
</p>

{{ Form:: open(['url'=> 'posts/create'])}}
	<!-- Temporary -->
	{{ Form::hidden('user_id', 1) }}
	<p>
	{{Form::label('Title')}}
	{{Form::text('title', null, ['class'=> 'class-control'])}}
	</p>
	<p>
	{{Form::label('Content')}}
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


@stop