<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $pacth = 'asset/images';
    protected $fileble = ['images'];
	
	public function getFileAttribute($avatar){
		return $this->pacth.$avatar;
	}
	
}
