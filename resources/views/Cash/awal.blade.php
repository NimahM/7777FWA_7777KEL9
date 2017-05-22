@extends('utama')
@section('container')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">
			Seluruh Data Pembeli daengan pembayaran Cash
			<a href="{{url('cash/tambah') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>
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
				@foreach ($semuaCash as $cash)
				<tr>
				<td>{{ $x++ }}</td>
		
				<td>{{ $cash->tanggal_cash or 'Tanggal_cash kosong'}}</td>
				<td>{{ $cash->pembeli->nama or 'Nama kosong'}}</td>
				<td>{{ $cash->rumah->title or 'Unit kosong'}}</td>
				
				
			<td>
					<div class="btn-group" role="group">
						<a href="{{url('cash/edit/'.$cash->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

						<a href="{{url('cash/lihat/'.$cash->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('cash/hapus/'.$cash->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>	
				</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</div>
@stop		