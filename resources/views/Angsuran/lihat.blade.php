@extends('utama')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('angsuran') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Pembelian dengan angsuran</strong>
	</div>
	<table class="table">
		
		<tr>
			<td>Lama Angsuran</td>
			<td>:</td>
			<td>{{ $angsuran->lama_angsuran }}</td>
		</tr>

		<tr>
			<td>Angsuran Per Bulan</td>
			<td>:</td>
			<td>{{ $angsuran->angsuranper_bulan }}</td>
		</tr>

		<tr>
			<td>Tanggal Awal Pembelian</td>
			<td>:</td>
			<td>{{ $angsuran->kredit->tanggal_kredit }}</td>
		</tr>

	
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$angsuran->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$angsuran->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 