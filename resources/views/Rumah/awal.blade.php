@extends('utama')
@section('container')

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">
			Unit Perumahan yang Tersedia
			<a href="{{url('rumah/tambah') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>
		<ol class="breadcrumb">
	<div class="panel-heading">
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Title</th>
						<th>Komplek</th>
						<th>Tipe Rumah</th>
						<th>Harga</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<tbody>
				<?php $x=1;?>
				@foreach ($semuaRumah as $rumah)
				<tr>
				<td>{{ $x++ }}</td>
		
				<td>{{ $rumah->title or 'Title kosong'}}</td>
				<td>{{ $rumah->komplek_perumahan->title or 'Komplek kosong'}}</td>
				<td>{{ $rumah->kategori->title or 'Kategori kosong'}}</td>
				<td>{{ $rumah->harga or 'Harga kosong'}}</td>
				
			<td>
					<div class="btn-group" role="group">
						<a href="{{url('rumah/edit/'.$rumah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

						<a href="{{url('rumah/lihat/'.$rumah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('rumah/hapus/'.$rumah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>	
				</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</div>
@stop		