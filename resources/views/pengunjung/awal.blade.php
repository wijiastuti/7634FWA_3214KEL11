@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data pengunjung</strong>
			<a href="{{ url('pengunjung/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> pengunjung</a>
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
								@foreach ($data as $pengunjung)
									<tr>
									<td>{{ $x++ }} </td>
									<td>{{ $pengunjung->nama_pengunjung }}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('pengunjung/edit/'.$pengunjung->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('pengunjung/'.$pengunjung->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('pengunjung/hapus/'.$pengunjung->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop