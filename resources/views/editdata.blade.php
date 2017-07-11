@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('updatedata', $viewedit->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nama_lengkap" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama_lengkap" type="text" class="form-control" value="{{$viewedit->nama_lengkap}}" name="nama_lengkap" required autofocus>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" value="{{$viewedit->alamat}}" name="alamat" required autofocus>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="tgl_lahir" class="col-md-4 control-label">Tgl Lahir</label>

                            <div class="col-md-6">
                                <input id="tgl_lahir" type="text" class="form-control" value="{{$viewedit->tgl_lahir}}" name="tgl_lahir" required autofocus>
                            </div>
                        </div>
						
						<div class="form group">
							<label for="jobs_id" class="col-md-4 control-label">Pekerjaan</label>
							<div class="col-md-6">
								<select name="jobs_id" class="form-control">
								@foreach ($jobOpt as $jobOpts)
									<option value="{{$jobOpts->id}}">{{$jobOpts->nama}}</option>
								@endforeach
								</select>
							</div>
						</div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
