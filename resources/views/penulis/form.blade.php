<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('nama_penulis',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Lahir</label>
	<div class="col-sm-10">
		{!! Form::date('ttl',null,['class'=>'form-control','placeholder'=>"Tanggal lahir"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Alamat</label>
		<div class="col-sm-10">
			{!! Form::textarea('Alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
		</div>
	</div>
