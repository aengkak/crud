<?php

namespace App\Http\Controllers;
use App\Data;
use App\Job;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Job::join ('data', 'jobs.id', '=', 'data.jobs_id')->paginate(5);
		return view ('data')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {	
		$add = Job::all();
        return view ('adddata')->with('add', $add);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama_lengkap' => 'required', 
									'alamat' => 'required',
									'tgl_lahir' => 'required',
									'jobs_id' => 'required']);
		$tambah = new Data();
		$tambah->nama_lengkap = $request['nama_lengkap'];
		$tambah->alamat = $request['alamat'];
		$tambah->tgl_lahir = $request['tgl_lahir'];
		$tambah->jobs_id = $request['jobs_id'];
		$tambah->save ();
		
		return redirect()->to('/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $viewedit = Data::where ('id', $id)->first();
		$jobOpt = Job::all();
		return view ('editdata', compact ('viewedit', 'jobOpt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Data::where ('id', $id)->first();
		$update->nama_lengkap = $request['nama_lengkap'];
		$update->alamat = $request['alamat'];
		$update->tgl_lahir = $request['tgl_lahir'];
		$update->jobs_id = $request['jobs_id'];
		$update->update();
		
		return redirect()->to('/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Data::find($id);
		$destroy->delete();
		
		return redirect()->to('/data');
    }
}
