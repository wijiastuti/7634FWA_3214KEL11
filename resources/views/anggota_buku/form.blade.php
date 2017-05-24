<div class="form-group">
	<label class="col-sm-2 control-label">anggota</label>
	<div class="col-sm-10">
		{!! Form::select('anggota_id',$anggota->lists('nama','id'),null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
	</div>
</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> buku</label>
		<div class="col-sm-10">
			{!! Form::select('buku_id',$buku->lists('nama_buku','id'),null,['class'=>'form-control','placeholder'=>"buku"]) !!}
		</div>
	</div>
<div class="form-group">
		<label class="col-sm-2 control-label"> tanggal_pinjam</label>
		<div class="col-sm-10">
			{!! Form::date('tgl_pinjam',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> tanggal_kembali</label>
		<div class="col-sm-10">
			{!! Form::date('tgl_kembali',null,['class'=>'form-control']) !!}
		</div>
	</div>
