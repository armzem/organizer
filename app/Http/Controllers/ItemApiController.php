<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;
use App\Http\Resources\Item;

class ItemApiController extends Controller
{
    /**
	 * Get a single item.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$item = Equipment::findOrFail($id);
		
        return new Item($item);
	}
}
