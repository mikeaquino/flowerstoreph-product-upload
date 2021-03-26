<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class ProductController extends Controller
{
	public function add()
	{
		return view('product.add-product');
	}

	public function store()
	{
		request()->validate([
			'product_name' => 'required',
			'description' => 'required',
			'quantity' => 'required',
			'price' => 'required',
			'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
		]);

		$photo = url('') . '/images/' . time() . '-' . request()->photo->getClientOriginalName();
		$product = Product::create([
			'product_name' => request()->product_name,
			'description' => request()->description,
			'quantity' => request()->quantity,
			'price' => request()->price,
			'uploaded_by' => Auth::user()->name,
			'photo' => $photo
		]);

		if ($product) {
			request()->photo->move('images', $photo);
			return redirect('/home');
		} else {
			return 'Error in performing insert query..';
		}
	}
}
