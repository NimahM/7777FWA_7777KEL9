@extends('utama')
@section('container')

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">
		<ol class="breadcrumb">
				<li>
					<i class="fa text-default fa-chevron-left"><a href="{{ url('kredit') }}">Kembali</a></i> 
			</li>
		</ol>
			Seluruh Data Pembeli dengan kredit angsuran
			
		
	<div class="panel-heading">
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Pembeli</th>
						<th>Lama Angsuran </th>
						<th>Angsuran Per Bulan </th>
						<th>Tanggal Awal Pembelian</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<tbody>
				<?php $x=1;?>
				@foreach ($semuaAngsuran as $angsuran)
				<tr>
				<td>{{ $x++ }}</td>
			    <td>{{ $angsuran->kredit->pembeli->nama or 'title kosong'}}</td>
				<td>{{ $angsuran->lama_angsuran or 'Lama Angsuran kosong'}}</td>
				<td>{{ $angsuran->angsuranper_bulan or 'Angsuran per Bulan kosong'}}</td>
				<td>{{ $angsuran->kredit->tanggal_kredit or 'Title kosong'}}</td>
				
				
			<td>
					<div class="btn-group" role="group">
						<a href="{{url('angsuran/edit/'.$angsuran->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>

						<a href="{{url('angsuran/lihat/'.$angsuran->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('angsuran/hapus/'.$angsuran->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>	
				</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</div>
@stop		