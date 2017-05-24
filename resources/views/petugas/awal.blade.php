@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data petugas</strong>
			<a href="{{ url('petugas/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> petugas</a>
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
								@foreach ($semuaPetugas as $petugas)
									<tr>
									<td>{{ $x++ }} </td>
									<td>{{ $petugas->nama }}</td>
									<td>
										<div class="btn-group" role-"group">
											<a href="{{url('petugas/edit/'.$petugas->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('petugas/'.$petugas->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('petugas/hapus/'.$petugas->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop