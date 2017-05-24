@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data penerbit</strong>
			<a href="{{ url('penerbit/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> penerbit</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($data as $penerbit)
									<tr>
									<td>{{ $x++ }} </td>
									<td>{{ $penerbit->nama_penerbit }}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('penerbit/edit/'.$penerbit->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('penerbit/'.$penerbit->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('penerbit/hapus/'.$penerbit->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop