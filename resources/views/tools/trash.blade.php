@extends('layouts.global')

@section('title') Trashed Tools @endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="row">
				<div class="col-md-6">
					<ul class="nav nav-pills card-header-pills">
						<li class="nav-item">
							<a class="nav-link {{Request::get('status') == NULL && Request::path() == 'tools' ? 'active' : ''}}" href="{{route('tools.index')}}">All</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{Request::get('status') == 'publish' ? 'active' : '' }}" href="{{route('tools.index', ['status' =>'publish'])}}">Publish</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{Request::path() == 'books/trash' ? 'active' : ''}}" href="{{route('tools.trash')}}">Trash</a>
						</li>
					</ul>
				</div>
			</div>
		@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
		@endif	
		<table class="table table-bordered table-stripped">
			<thead>
				<tr>
					<th><b>Nama Perangkat</b></th>
					<th><b>Type Perangkat</b></th>
					<th><b>Stock</b></th>
					<th><b>Price</b></th>
					<th><b>Action</b></th>
				</tr>
			</thead>
			<tbody>
			@foreach($tools as $tool)
			<tr>
				<td>{{$tool->title}}</td>
				<td>{{$tool->author}}</td>
				<td>{{$tool->stock}}</td>
				<td>{{$tool->price}}</td>
				<td>
					<form method="POST" action="{{route('tools.restore', [$tool->id])}}" class="d-inline">
						@csrf
						<input type="submit" value="Restore" class="btn btn-success"/>
					</form>
				</td>
			</tr>
			@endforeach
			</tbody>
			<tfoot>
			<tr>
				<td colspan="10">
				{{$tools->appends(Request::all())->links()}}
				</td>
			</tr>
			</tfoot>
		</table>
	</div>
</div>
@endsection