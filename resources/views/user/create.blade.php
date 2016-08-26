@extends('index')





@section('container')

	<div class="container zerogrid">


	<div class="col-full" id="post-container">
	<div class="wrap-col">
        <div class="post">
            <div class="post-margin">

		<h1> Create user</h1>

		{{ Form::open(['url'=> 'users/create']) }}	



			<!-- Username form -->

			<p>
			{{ Form:: label('Username')}}
			</p>
			<p>
			{{ Form:: text('username', isset($user) ? $user->username : null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}

			</p>



			<!-- Password form -->

			<p>

			{{ Form:: label('Password')}}
			</p>
			<p>
			{{ Form:: password('password', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}

			</p>



			<!-- Repeat password form -->

			<p>

			{{ Form:: label('Repeat password')}}
			</p>
			<p>
			{{ Form:: password('rpassword', null,  ['class'=> 'form-control', 'foo'=> 'bar'])}}

			</p>



			<!-- Email form -->

			<p>

			{{ Form:: label('Email')}}
			</p>
			<p>
			{{ Form:: email('email', isset($user) ? $user->email : '',  ['class'=> 'form-control', 'foo'=> 'bar'])}}

			</p>


			{{ Form:: hidden('facebookId', isset($user) ? $user->facebookId : '')}}

			<!-- Submit -->
			<p>
			{{ Form:: submit('submit', ['class'=> 'form-control'])}}
			</p>


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