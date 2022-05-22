<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use App\Models\Category;
use App\Models\Product;

use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiUserController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware('ApiCheckUser');
    }


    /**
     * show search product endpoint.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchPage(Request $request)
    {
        $categories = Category::all();
        $products = Product::where('category_id', '!=', null)->paginate(30);
        return response()->json(compact('categories', 'products'),200);
       
    }
    /**
     * search for product.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->name;
        $optionCategories = $request->categories;
        $products = Product::where('category_id', '!=', null);
        if (!empty($name)) {
            $products = $products->where('name', 'like', '%' . $name . '%');
        }
        if (!empty($optionCategories)) {
            $products = $products->whereIn('category_id', $optionCategories);
        }
        $products = $products->paginate(30);
        return response()->json(compact( 'products'),200);
    }

}
