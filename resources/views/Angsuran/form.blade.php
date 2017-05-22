<div class="form-group">
	<label class="col-sm-2 control-label">Lama Angsuran</label>
	<div class="col-sm-10">
		{!! Form::text('lama_angsuran',null,['class'=>'form-control','placeholder'=>"Lama Angsuran"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Angsuran per Bulan</label>
	<div class="col-sm-10">
		{!! Form::text('angsuranper_bulan',null,['class'=>'form-control','placeholder'=>"Angsuran per Bulan"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="kredit_id">Tanggal Pembeli</label>
	<div class="col-sm-10">
		{!! Form::select('kredit_id',$kredit->listKreditTitle(),null,['class'=>'form-control','id'=>'kredit_id','placeholder'=>"Tanggal"]) !!}
		</div>
</div>


