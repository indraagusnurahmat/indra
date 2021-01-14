<?php

namespace App\Imports;

use App\item;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class FileImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $key=>$data){
        	if ($key > 0) {
        	$items = new item();
        	$items->buyer = $data[0];
        	$items->item  = $data[1];
        	$items->price = $data[2];
        	$items->save();
        	}
        }
    }
}
