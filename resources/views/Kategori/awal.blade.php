@extends('utama')
@section('container')

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">
			Seluruh Data dari Tipe Rumah yang tersedia
			<a href="{{url('kategori/tambah') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>
		<ol class="breadcrumb">
	<div class="panel-heading">
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $kategori)
		<td>{{ $x++ }}</td>
		<td>{{ $kategori->title or 'Title Kosong' }}</td>
		<td>{{ $kategori->keterangan or 'Keterangan Kosong' }}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('kategori/edit/'.$kategori->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('kategori/lihat/'.$kategori->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('kategori/hapus/'.$kategori->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	