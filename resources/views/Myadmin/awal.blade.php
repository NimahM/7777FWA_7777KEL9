@extends('utama')
@section('container')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">
			Data Admin
			<a href="{{url('myadmin/tambah') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>
		<ol class="breadcrumb">
	<div class="panel-heading">
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Umur</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaMyadmin as $myadmin)
		<td>{{ $x++ }}</td>
		<td>{{ $myadmin->nama or 'nama Kosong' }}</td>
		<td>{{ $myadmin->umur or 'umur Kosong' }}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('myadmin/edit/'.$myadmin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('myadmin/lihat/'.$myadmin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('myadmin/hapus/'.$myadmin->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	

