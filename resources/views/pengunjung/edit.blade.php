@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('pengunjung') }}">
<i class="fa text-default fa-chevron-left"></i>
</a> Perbarui Data pengunjung</strong>
	</div>
	{!! Form::model($pengunjung,['url'=>'pengunjung/edit/'.$pengunjung->id,'class'=>'form-horizontal']) !!}
	
		@include('pengunjung.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
			<button type="reset" class="btn btn danger"><i class="fa fa-undo"></i> Ulangi</button>
			</div>
			{!! Form::close() !!}
			</div>
			@stop