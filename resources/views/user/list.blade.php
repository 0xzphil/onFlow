@extends('index')


@section('container')

@foreach ($users as $user)
	<div class="container zerogrid">
    	<div class="post">
    		<div class="post-margin">
        <!-- Start Posts Container -->
	<p>
	{{ $user-> username }}
	</p>
	</div></div></div>
	
@endforeach



@stop