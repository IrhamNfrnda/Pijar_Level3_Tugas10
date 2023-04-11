@extends('main')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Tambah Produk</div>
	<div class="card-body">
		<form method="post" action="{{ route('produk.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nama Produk</label>
				<div class="col-sm-10">
					<input type="text" name="nama_produk" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Keterangan</label>
				<div class="col-sm-10">
					<input type="text" name="keterangan" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Harga</label>
				<div class="col-sm-10">
					<input type="number" name="harga" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Jumlah</label>
				<div class="col-sm-10">
					<input type="number" name="jumlah" class="form-control" />
				</div>
			</div>
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Tambah" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')