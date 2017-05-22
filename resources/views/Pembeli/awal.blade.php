@extends('utama')
@section('container')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">
			Data Pembeli
			<a href="{{url('pembeli/tambah') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>
		<ol class="breadcrumb">
	<div class="panel-heading">
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>No.Telpon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaPembeli as $pembeli)
		<td>{{ $x++ }}</td>
		<td>{{ $pembeli->nama or 'nama Kosong' }}</td>
		<td>{{ $pembeli->no_telp or 'no_telp Kosong' }}	</td>
	
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('pembeli/edit/'.$pembeli->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('pembeli/lihat/'.$pembeli->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('pembeli/hapus/'.$pembeli->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	

