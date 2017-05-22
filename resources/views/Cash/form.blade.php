<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal</label>
	<div class="col-sm-10">
		{!! Form::text('tanggal_cash',null,['class'=>'form-control','placeholder'=>"Tanggal"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="pembeli_id">Nama</label>
	<div class="col-sm-10">
		{!! Form::select('pembeli_id',$pembeli->listPembeliTitle(),null,['class'=>'form-control','id'=>'pembeli_id','placeholder'=>"Nama"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="rumah_id">Unit yang Dibeli</label>
	<div class="col-sm-10">
		{!! Form::select('rumah_id',$rumah->listRumahTitle(),null,['class'=>'form-control','id'=>'rumah_id','placeholder'=>"Unit yang Dibeli"]) !!}
		</div>
</div>


