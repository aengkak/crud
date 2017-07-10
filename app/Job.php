<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
	protected $fillable = ['nama'];
	
	public function data (){
		return $this->hasMany(Data::class);
	}
}
