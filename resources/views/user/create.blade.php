@extends('index')





@section('container')

	<div class="container zerogrid">



	<div class="post">

		<h1> Create user</h1>

		{{ Form::open(['url'=> 'users/create']) }}	



			<!-- Username form -->

			<p>
			{{ Form:: label('Username')}}

			{{ Form:: text('username', isset($user) ? $user->username : null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}

			</p>



			<!-- Password form -->

			<p>

			{{ Form:: label('Password')}}

			{{ Form:: text('password', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}

			</p>



			<!-- Repeat password form -->

			<p>

			{{ Form:: label('Repeat password')}}

			{{ Form:: text('rpassword', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}

			</p>



			<!-- Email form -->

			<p>

			{{ Form:: label('Email')}}

			{{ Form:: text('email', isset($user) ? $user->email : '',  ['class'=> 'form-control', 'foo'=> 'bar'])}}

			</p>


			{{ Form:: hidden('facebookId', isset($user) ? $user->facebookId : '')}}

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

	





@stop