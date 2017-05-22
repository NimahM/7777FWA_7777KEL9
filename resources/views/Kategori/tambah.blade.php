@extends('utama')
@section('container')
<div class="panel-heading">
	<strong><a href="{{ url('kategori') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i></a>
	Tambah Data kategori</strong>
	</div>
		{!! Form::open(['url'=>'kategori/simpan','class'=>'form-horizontal']) !!}
		@include('kategori.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
				<button class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop

