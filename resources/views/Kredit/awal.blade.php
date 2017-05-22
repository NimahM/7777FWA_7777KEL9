@extends('utama')
@section('container')

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">
		<ol class="breadcrumb">
				<li>
				<h3><i class="fa fa-dashboard"><a href="{{ url('angsuran') }}">Data Angsuran</a></i> </h3>
			</li>
		</ol>
			Seluruh Data Pembeli dengan pembayaran Kredit
			<a href="{{url('kredit/tambah') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>
		<ol class="breadcrumb">
	<div class="panel-heading">
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Tanggal </th>
						<th>Nama Pembeli </th>
						<th>Pembelian Unit</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<tbody>
				<?php $x=1;?>
				@foreach ($semuaKredit as $kredit)
				<tr>
				<td>{{ $x++ }}</td>
		
				<td>{{ $kredit->tanggal_kredit or 'Tanggal_kredit kosong'}}</td>
				<td>{{ $kredit->pembeli->nama or 'Nama kosong'}}</td>
				<td>{{ $kredit->rumah->title or 'Unit kosong'}}</td>
				
				
			<td>
					<div class="btn-group" role="group">
						<a href="{{url('kredit/edit/'.$kredit->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

						<a href="{{url('angsuran/tambah/'.$kredit->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Angsuran"><i class="fa fa-plus"></i></a>

						<a href="{{url('kredit/lihat/'.$kredit->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('kredit/hapus/'.$kredit->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>


					</div>	
				</td>
				</tr>
				@endforeach
				
			</tbody>
	</table>
</div>
@stop		