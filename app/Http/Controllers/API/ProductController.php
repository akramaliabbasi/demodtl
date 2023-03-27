<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewProductNotification;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Resources\Product as ProductResource;
use App\Http\Middleware\RandomUserMiddleware;

class ProductController extends BaseController
{


	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
	  $this->middleware(RandomUserMiddleware::class);
    }



    public function index(Request $request)
    {
       
		// Search product by name and Product by user
		$search = $request->input('search');

        if ($search) {
            $products = Product::search($search)->get();
        } else {
             $products = Product::all();
        }

		
        return $this->sendResponse(ProductResource::collection($products), 'Products fetched.');
    }

 
    public function show($id)
    {
        $product = Product::find($id);
        return $this->sendResponse(new ProductResource($product), 'Product specifi details');
    }


    public function store(Request $request)
    {
		
		// Validate the request data
		$validatedData = $request->validate([
			'name' => 'required|max:255',
			'price' => 'required|numeric',
			'user_id' => 'required|exists:users,id',
			'type' => 'required',
		]);
	
		$product = Product::create($validatedData);
	
		// Get the user who added the product
		$user = User::find($validatedData['user_id']);

		// Send a notification email to the user
		Mail::to($user->email)->send(new NewProductNotification($product));

		return $this->sendResponse(new ProductResource($product), 'Product added successfully.');
		
    }



    public function update(Request $request, $id)
    {
	
		$input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'price' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
		
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->status = $request->input('status');
        $product->user_id = $request->input('user_id');
		$product->type = $request->input('type');
        $product->save();
        return $this->sendResponse(new ProductResource($product), 'Product updated successfully.');
    }



    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
     	return $this->sendResponse(new ProductResource($product), 'Product deleted.');
    }
	
	
	
	public function history(Request $request, $id)
	{
		dd($request);
		$product = Product::findOrFail($id);

		$audits = $product->audits;

		return $this->sendResponse(new ProductResource($audits), 'Product log');
	}
}
