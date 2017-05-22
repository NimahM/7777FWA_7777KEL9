@extends('utama')
@section('container')

<div class="panel-heading">
	<strong><a href="{{ url('komplek_perumahan') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i></a>
	Tambah Data komplek_perumahan</strong>
	</div>
		{!! Form::open(['url'=>'komplek_perumahan/simpan','class'=>'form-horizontal']) !!}
		@include('komplek_perumahan.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
				<button class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop

