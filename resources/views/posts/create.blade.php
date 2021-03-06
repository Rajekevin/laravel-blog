@extends('main')


@section('title','| Create new Post')


@section('stylesheet')
{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')



	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<hr>

			{!! Form::open(['route' => 'posts.store']) !!}
    			{{ Form::label('name', 'Title:') }}
    			{{ Form::text('name', null, array('class '=>'form-control')) }}

    			{{ Form::label('content', "Post body:") }}

    			{{ Form::textarea('content', null, array('class '=>'form-control')) }}

    			{{ Form::submit('Create Post' , array('class '=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;')) }}


			{!! Form::close() !!}




		</div>


	</div>

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection