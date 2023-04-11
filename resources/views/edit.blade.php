@extends('main')

@section('content')

<div class="card">
	<div class="card-header">Edit Produk</div>
	<div class="card-body">
		<form method="post" action="{{ route('produk.update', $produk->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nama Produk</label>
				<div class="col-sm-10">
					<input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Keterangan</label>
				<div class="col-sm-10">
					<input type="text" name="keterangan" class="form-control" value="{{ $produk->keterangan }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Harga</label>
				<div class="col-sm-10">
					<input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Jumlah</label>
				<div class="col-sm-10">
					<input type="number" name="jumlah" class="form-control" value="{{ $produk->jumlah }}" /> 
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $produk->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')