<div class="form-group">
	<label class="col-sm-2 control-label">Title</label>
	<div class="col-sm-10">
		{!! Form::text('title',null,['class'=>'form-control','placeholder'=>"Title"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Keterangan</label>
	<div class="col-sm-10">
		{!! Form::text('keterangan',null,['class'=>'form-control','placeholder'=>"Keterangan"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="komplek_perumahan_id">Komplek Perumahan</label>
	<div class="col-sm-10">
		{!! Form::select('komplek_perumahan_id',$komplek_perumahan->listKomplekTitle(),null,['class'=>'form-control','id'=>'komplek_perumahan_id','placeholder'=>"komplek_perumahan"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="kategori_id">Tipe Rumah</label>
	<div class="col-sm-10">
		{!! Form::select('kategori_id',$kategori->listKategoriTitle(),null,['class'=>'form-control','id'=>'kategori_id','placeholder'=>"kategori"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Harga</label>
	<div class="col-sm-10">
		{!! Form::text('harga',null,['class'=>'form-control','placeholder'=>"Harga"]) !!}
		</div>
</div>


