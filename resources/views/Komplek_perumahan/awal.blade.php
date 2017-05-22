@extends('utama')
@section('container')


<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">
			Komplek Perumahan
			<a href="{{url('komplek_perumahan/tambah') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>
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
		@foreach($data as $komplek_perumahan)
		<td>{{ $x++ }}</td>
		<td>{{ $komplek_perumahan->title or 'Title Kosong' }}</td>
		<td>{{ $komplek_perumahan->keterangan or 'Keterangan Kosong' }}	</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('komplek_perumahan/edit/'.$komplek_perumahan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('komplek_perumahan/lihat/'.$komplek_perumahan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('komplek_perumahan/hapus/'.$komplek_perumahan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	