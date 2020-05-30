@extends('layouts.global')

@section('title') Detail Category @endsection

@section('content')

<div class="col-md-8">
	<div class="card">
		<div class="card-body">
			<label><b>Nama Perangkat</b></label><br>
			{{$category->name}}
			<br><br>

			<label><b>Type Perangkat</b></label><br>
			{{$category->type}}
			<br><br>

			<label><b>Category image</b></label><br>
			@if($category->image)
			<img src="{{asset('storage/' . $category->image)}}" width="120px">
			@endif
		</div>
	</div>
</div>

@endsection