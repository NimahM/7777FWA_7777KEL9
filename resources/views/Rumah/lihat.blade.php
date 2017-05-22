@extends('utama')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('rumah') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Unit Perumahan</strong>
	</div>
	<table class="table">
		
		<tr>
			<td>Title</td>
			<td>:</td>
			<td>{{ $rumah->title }}</td>
		</tr>

		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td>{{ $rumah->keterangan }}</td>
		</tr>

		<tr>
			<td>Komplek Perumahan</td>
			<td>:</td>
			<td>{{ $rumah->komplek_perumahan->title }}</td>
		</tr>

		<tr>
			<td>Tipe Rumah</td>
			<td>:</td>
			<td>{{ $rumah->kategori->title }}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>{{ $rumah->harga }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$rumah->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$rumah->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 