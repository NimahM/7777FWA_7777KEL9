@extends('utama')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('kredit') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Pembelian dengan Kredit</strong>
	</div>
	<table class="table">
		
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>{{ $kredit->tanggal_kredit }}</td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $kredit->pembeli->nama }}</td>
		</tr>

		<tr>
			<td>No.Telpon</td>
			<td>:</td>
			<td>{{ $kredit->pembeli->no_telp }}</td>
		</tr>

		<tr>
			<td>Unit Yang Dibeli</td>
			<td>:</td>
			<td>{{ $kredit->rumah->title }}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>{{ $kredit->rumah->harga }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kredit->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kredit->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 