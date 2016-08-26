@extends('index')


@section('container')
	<div class="container zerogrid">
	<div class="wrap-col">
        <div class="post">
            <div class="post-margin">
		
			<h1> LOG IN </h1>
			{{ Form::open() }}	

				<!-- Username form -->
				<p>
				{{ Form:: label('Username')}}
				</p>
				<p>
				{{ Form:: text('username', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}
				</p>

				<!-- Password form -->
				<p>
				{{ Form:: label('Password')}}
				</p>
				<p>
				{{ Form:: password('password', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}
				</p>

				<!-- Email form -->
				<!--
				<p>
				{{ Form:: label('Email')}}
				{{ Form:: text('email', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}
				</p>
				-->
				<!-- Submit -->
				{{ Form:: submit('submit', ['class'=> 'form-control'])}}

			{{ Form::close() }}	

			@if($errors->any())
				@foreach($errors->all() as $error)
					<li>
					{{ $error }}
					</li>
				@endforeach
			@endif
			</div>
		</div>
	</div>
	</div>	
	


@stop