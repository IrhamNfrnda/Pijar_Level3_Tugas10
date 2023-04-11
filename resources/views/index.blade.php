@extends('main')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Data Produk</b></div>
			<div class="col col-md-6">
				<a href="{{ route('produk.create') }}" class="btn btn-success btn-sm float-end">Tambah</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Nama Produk</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->nama_produk }}</td>
						<td>{{ $row->keterangan }}</td>
						<td>{{ $row->harga }}</td>
                        <td>{{ $row->jumlah }}</td>
						<td>
							<form method="post" action="{{ route('produk.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('produk.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Hapus" />
							</form>
							
						</td>
					</tr>
				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">Data Masih Kosong!</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection
