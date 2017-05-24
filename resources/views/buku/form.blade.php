<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('nama_buku',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Alamat</label>
		<div class="col-sm-10">
			{!! Form::select('penulis_id',$penulis->lists('nama_penulis','id'),null,['class'=>'form-control','placeholder'=>"Penulis"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Alamat</label>
		<div class="col-sm-10">
			{!! Form::select('penerbit_id',$penerbit->lists('nama_penerbit','id'),null,['class'=>'form-control','placeholder'=>"Penerbit"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Alamat</label>
		<div class="col-sm-10">
			{!! Form::text('thn_terbit',null,['class'=>'form-control','placeholder'=>"Tahun Terbit"]) !!}
		</div>
	</div>
