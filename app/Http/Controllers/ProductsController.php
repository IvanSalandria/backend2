<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Rules\Language;
use App\Rules\LanguageFormatRule;
class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['showAllProducts', 'showOneProduct']]);
    }
    public function showAllProducts()
    {
        return response()->json(Product::all());
    }

    public function showOneProduct($id)
    {
        return response()->json(Product::find($id));
    }

    public function create(Request $request)
    {
        
        $this->validate($request, [
            'name' => ['required', 'array', new LanguageFormatRule()],
            'description' => ['required', 'array', new LanguageFormatRule() ]
        ]);

        $name = json_encode($request->get("name"));
        $description = json_encode($request->get("description"));

        $product = Product::create([
            "name" => $name,
            "description" => $description
        ]);

        return response()->json($product, 201);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'array', new LanguageFormatRule()],
            'description' => ['required', 'array',new LanguageFormatRule() ]
        ]);

        $name = json_encode($request->get("name"));
        $description = json_encode($request->get("description"));

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
