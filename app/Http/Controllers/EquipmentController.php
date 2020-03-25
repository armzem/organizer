<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;
use App\Category;

class EquipmentController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('equipment_table', array( 'equipment' => Equipment::all(), 'categories' => Category::all()));
    }

    /**
	 * Display the specified product.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function showProduct($id)
	{
		 return view('product', array( 'product' => Equipment::findOrFail($id)));
	}
    
    /**
	 * Display the specified category.
	 *
	 * @param  int  $category
	 * @return \Illuminate\Http\Response
	 */
	public function showCategory($category_url)
	{
		return view('equipment_table', array( 'equipment' => Equipment::where('category_url', '=', $category_url)->get(), 'categories' => Category::all()));
	}
}
