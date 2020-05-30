@extends('layouts.global')

@section('footer-scripts')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- <script>
$('#categories').select2({
	ajax: {
		url: 'http://penjualan-hoscloud/ajax/categories/search',
		processResults: function(data)
		{
			return {
				results: data.map(function(item){return {id: item.id, text:item.name} })
			}
		}
	}
});
</script>	 -->
@endsection

@section('title') Create tools @endsection

@section('content')

<div class="row">
	<div class="col-md-8">
		@if(session('status'))
		<div class="alert alert-success">
		{{session('status')}}
		</div>
		@endif
		<form action="{{route('tools.store')}}" method="POST" enctype="multipart/form-data" class="shadow-sm p-3 bg-white">
			@csrf

			<label for="title">Nama Perangkat</label> <br>
			<input type="text" class="form-control" name="title" placeholder="Tools title">
			<br>

			<label for="cover">Type Perangkat</label>
			<input type="text" class="form-control" name="type">
			<br>

			<label for="description">Description</label><br>
			<textarea name="description" id="description" class="formcontrol" placeholder="Give a description about this tools"></textarea>
	      	<br>

	      	<!-- <label for="categories">Categories</label><br>
			<select name="categories[]" multiple id="categories" class="form-control"></select><br><br/> -->

			<label for="stock">Stock</label><br>
			<input type="number" class="form-control" id="stock" name="stock" min=0 value=0>
			<br>

			<label for="sales">Sales</label><br>
			<input type="text" class="form-control" name="sales" id="sales" placeholder="Nama sales">
			<br>

			<label for="Price">Price</label> <br>
			<input type="number" class="form-control" name="price" id="price" placeholder="Tools price">
			<br>

			<button class="btn btn-primary" name="save_action" value="PUBLISH">Publish</button>
		</form>
	</div>
</div>

@endsection
