@extends('utama')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('cash') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Pembelian dengan cash</strong>
	</div>
	<table class="table">
		
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>{{ $cash->tanggal_cash }}</td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $cash->pembeli->nama }}</td>
		</tr>

		<tr>
			<td>No.Telpon</td>
			<td>:</td>
			<td>{{ $cash->pembeli->no_telp }}</td>
		</tr>

		<tr>
			<td>Unit Yang Dibeli</td>
			<td>:</td>
			<td>{{ $cash->rumah->title }}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>{{ $cash->rumah->harga }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$cash->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$cash->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 