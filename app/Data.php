<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';
	protected $fillable = ['nama','alamat','tgl_lahir','jobs_id'];
	
	public function jobs (){
		return $this->belongsTo(Job::class);
	}
}
