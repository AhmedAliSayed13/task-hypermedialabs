<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
class UserController extends Controller
{
private $path='user.';
    /**
     * show dashboard for User.
     *
     * @return void
     */
    public function dashboard(){
        return view($this->path.'dashboard');
    }
    /**
     * show search for User.
     *
     * @return void
     */
    public function searchProducts(Request $request){
        $categories=Category::all();
        $name=$request->name;
        $optionCategories=$request->categories;
        $products=Product::where('category_id','!=',NULL);
        if(!empty($name)){
            $products=$products->where('name','like','%'.$name.'%');
        }
    
         if(!empty($optionCategories)){
            $products=$products->whereIn('category_id',$optionCategories);
        }
        
        

        // $products = DB::table('products')
        //     ->where($whereClause);
        //     // ->whereIn('category_id',explode(',',$optionCategories));
        $products=$products->paginate(10);
        return view($this->path.'search',compact('categories','products','name','optionCategories'));
    }


}
