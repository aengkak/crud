@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{url('addjob')}}" class="btn btn-primary">Tambah</a></div>

                <div class="panel-body">
                    <table class="table">
					<thead>
						<tr>
						<th>Nama</th>
						<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data as $datas)
						<tr>
						<td>{{$datas->nama}}</td>
						<td><a href="{{url('editjob', $datas->id)}}" class="btn btn-primary">Ubah</a> <a href="{{url('deletejob', $datas->id)}}" onclick="return confirm('Hapus?')" class="btn btn-danger">Hapus</a></td>
						</tr>
						@endforeach
					</tbody>
					</table>
					{!!($data -> render())!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection