<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Illuminate\Support\Facades\Validator;
use Response;

class AdminCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function categoryAdminIndex() 
    {
        $categories = Category::paginate(8);
        return view('admin.category', ['categories' => $categories]);
    }
    public function deleteCategories(Request $request){
        Category::destroy($request->categories);
        return redirect()->route('admin.category');
    }
    public function addCategory(Request $request) 
    {
        $validator = Validator::make($request->all(), [
        'catname' => 'required|unique:categories,name',
        'catdesc' => 'required',
        ], [
            'catname.unique' => 'Category already exist.',
            'catname.required' => 'Category is required.',
            'catdesc.required' => 'Description is required.'
        ]);

        if ($validator->fails()) {    
            return response()->json(['error'=>$validator->errors()->all()]);
        } else {
            $stat = "published";

            DB::table('categories')->insert([
            'name'=>$request->catname, 
            'description'=>$request->catdesc, 
            'status'=>$stat,
            'created_at' =>  \Carbon\Carbon::now(), # \Datetime()
            'updated_at' => \Carbon\Carbon::now()  # \Datetime()
            ]);
            return response()->json(['success'=>'Added new category.']);  
        }       
    }

    public function CategoryDetails($category_id) {
        $category = DB::table('categories')
        ->select('categories.category_id','categories.name','categories.description','categories.status')
        ->where(['categories.category_id' => $category_id])
        ->get();

         return Response::json(array(
            'category' => $category,
        )); 
    }

    public function editCategoryDetails(Request $request) {
        DB::table('categories')
        ->where('category_id', $request->ecatid)
        ->update(array(
        'name' => $request->ecatname,
        'status' => $request->editpub,
        'description' => $request->ecatdesc,
        'updated_at' => \Carbon\Carbon::now()  # \Datetime()
        ));

        return redirect()->route('admin.category');
    }
}
