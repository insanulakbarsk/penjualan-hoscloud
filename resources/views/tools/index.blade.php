@extends('layouts.global')

@section('title') Tools list @endsection

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
		<div class="row mb-3">
			<div class="col-md-12 text-right">
				<a href="{{route('tools.create')}}" class="btn btn-primary">Create Perangkat</a>
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
					<th><b>Sales</b></th>
					<th><b>Status</b></th>
					<th><b>Stock</b></th>
					<th><b>Price</b></th>
					<th><b>Action</b></th>
				</tr>
			</thead>
			<tbody>
			@foreach($tools as $tool)
				<tr>
					<td>{{$tool->title}}</td>
					<td>{{$tool->type}}</td>
					<td>{{$tool->sales}}</td>
					<td>
						@if($tool->status == "DRAFT")
							<span class="badge bg-dark text-white">{{$tool->status}}</span>
						@else
							<span class="badge badge-success">{{$tool->status}}</span>
						@endif
					</td>
					<td>{{$tool->stock}}</td>
					<td>{{$tool->price}}</td>
					<td>
						<a href="{{route('tools.edit', [$tool->id])}}" class="btn btn-info btn-sm"> Edit </a>
						<form method="POST" class="d-inline" onsubmit="return confirm('Move book to trash?')" action="{{route('tools.destroy', [$tool->id])}}">
							@csrf
							<input type="hidden" value="DELETE" name="_method">
							<input type="submit" value="Trash" class="btn btn-danger btn-sm">
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