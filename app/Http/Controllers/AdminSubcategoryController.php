<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sub_category;
use App\Category;
use Response;

class AdminSubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function subcategoryAdminIndex() 
 	{
 		$categories = Category::all(['category_id','name']);
 		$subcategories = DB::table('categories')
        ->select('categories.name', 'sub_categories.subcategory_id', 'sub_categories.name AS subname', 'sub_categories.description', 
        	'sub_categories.status', 'sub_categories.updated_at')
        ->join('sub_categories', 'categories.category_id', '=', 'sub_categories.category_id')
        ->paginate(8);
    	return view('admin.subcategory', compact('categories','subcategories'));
    }

    public function deleteSubCategories(Request $request) {
    	Sub_category::destroy($request->subcategories);
        return redirect()->route('admin.subcategory');
    }

    public function SubcategoryDetails($subcategory_id) {
        $subcategory = DB::table('sub_categories')
        ->select('categories.name', 'sub_categories.subcategory_id', 'sub_categories.category_id', 'sub_categories.name AS subname',
        'sub_categories.description', 'sub_categories.status', 'sub_categories.updated_at')
        ->join('categories', 'categories.category_id', '=', 'sub_categories.category_id')
        ->where(['sub_categories.subcategory_id' => $subcategory_id])
        ->get();

        return Response::json(array(
            'subcategory' => $subcategory,
        ));
    }

    public function editSubCategoryDetails(Request $request) {
        DB::table('sub_categories')
        ->where('subcategory_id', $request->esubcat_id)
        ->update(array(
        'category_id' => $request->eprodcat,
        'name' => $request->esubcatname,
        'status' => $request->editpub,
        'description' => $request->esubcatdesc,
        'updated_at' => \Carbon\Carbon::now()  # \Datetime()
        ));

        return redirect()->route('admin.subcategory');    
    }
}
