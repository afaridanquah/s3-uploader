<?php

namespace Nextek\Uploader;

use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;

class Uploader
{
	public function store ($file, $dir = null)
	{
	    $filename = preg_replace('/[^A-Za-z0-9_.-]/', '', str_replace(' ', '-', $file->getClientOriginalName()));
	    Storage::put($dir.$filename, file_get_contents($file));

	    return $filename;
	}
}