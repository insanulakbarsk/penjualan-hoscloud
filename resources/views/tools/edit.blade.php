@extends('layouts.global')

@section('title') Edit toolss @endsection

@section('content')

<div class="row">
	<div class="col-md-8">

		@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}}
			</div>
		@endif

		<form enctype="multipart/form-data" method="POST" action="{{route('tools.update', [$tools->id])}}" class="p-3 shadow-sm bg-white">
		@csrf
			<input type="hidden" name="_method" value="PUT">
			<label for="title">Nama Perangkat</label><br>
			<input type="text" class="form-control" value="{{$tools->title}}" name="title" placeholder="Book title"/>
			<br>

			<label for="slug">Type Perangkat</label><br>
			<input type="text" class="form-control" value="{{$tools->type}}" name="type" placeholder="Tipe perangkat"/>
			<br>

			<label for="description">Description</label> <br>
			<textarea name="description" id="description" class="form-control">{{$tools->description}}</textarea>
			<br>

			<label for="stock">Stock</label><br>
			<input type="text" class="form-control" placeholder="Stock" id="stock" name="stock" value="{{$tools->stock}}">
			<br>

			<label for="sales">Sales</label>
			<input placeholder="Nama Sales" value="{{$tools->sales}}" type="text" id="sales" name="sales" class="form-control">
			<br>

			<label for="price">Price</label><br>
			<input type="text" class="form-control" name="price" placeholder="Price" id="price" value="{{$tools->price}}">
			<br>

			<label for="">Status</label>
			<select name="status" id="status" class="form-control">
			<option {{$tools->status == 'PUBLISH' ? 'selected' : ''}} value="PUBLISH">PUBLISH</option>
			<option {{$tools->status == 'DRAFT' ? 'selected' : ''}} value="DRAFT">DRAFT</option>
			</select>
			<br>

			<button class="btn btn-primary" value="PUBLISH">Update</button>
		</form>
	</div>
</div>

@endsection