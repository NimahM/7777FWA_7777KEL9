@extends('utama')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('myadmin') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data myadmin</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $myadmin->nama }}</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $myadmin->alamat }}</td>
		</tr>

		<tr>
			<td>No Telpon</td>
			<td>:</td>
			<td>{{ $myadmin->no_telpon }}</td>
		</tr>

		<tr>
			<td>Umur</td>
			<td>:</td>
			<td>{{ $myadmin->umur }}</td>
		</tr>

		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $myadmin->pengguna->username }}</td>
		</tr>
		

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$myadmin->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$myadmin->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 