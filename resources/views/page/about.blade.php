@extends('app')

@section('content')
	@if ($name =='Fizz')
		<h1> Hi {!!  $name !!} </h1>
		<p>
		Laravel is the first framework that I can apply all my skill to create a website
		Many bugs can be detected, so I hope everyone can except this. Thanks
		</p>

		<h3> Clones of Fizz</h3>
		@foreach ($members as $member)
			<li>{{ $member }}</li>
		@endforeach

	@else
		Good bye	
	@endif
	
@stop

