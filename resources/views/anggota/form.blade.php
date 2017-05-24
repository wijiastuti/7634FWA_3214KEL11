<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label"> Jenis Kelamin</label>
		<div class="col-sm-10">
			{!! Form::select('jenis_kelamin',array('Laki-laki'=>'Laki-laki','Perempuan'=>'Perempuan'),null,['class'=>'form-control','placeholder'=>"jenis kelamin"]) !!}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Alamat</label>
		<div class="col-sm-10">
			{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Tanggal lahir</label>
		<div class="col-sm-10">
			{!! Form::date('ttl',null,['class'=>'form-control','placeholder'=>"ttl"]) !!}
	</div>
	</div>
	