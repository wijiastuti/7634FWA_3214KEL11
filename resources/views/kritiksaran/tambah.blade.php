@extends('master')
@section('container')
		<div class="panel panel-primary">
			<div class="panel-heading">
				<strong><a href="{{ url('kritiksaran') }}"><i style="color::white;" class="fa text-default fa-chevron-left"></i></a> Tambah Data kritiksaran</strong>
					</div>
					{!! Form::open(['url'=>'kritiksaran/simpan','class'=>'form-horizontal']) !!}
					@include('kritiksaran.form')
					<div style="width 100%;text-align: right;">
						<button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
						<button class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
					</div>
					{!! Form::close() !!}
				</div>
			@stop 