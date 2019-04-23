<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    //
    public function show(Category $category,Request $request)
    {
        $query =Topic::with('user', 'category')->where('category_id',$category->id);
        if($request->order) {
            if($request->order=='default'){
                $query->orderBy('updated_at','DESC');
            }  else {
                $query->orderBy('created_at','DESC');
            }

        }
            $topics = $query->paginate(20);

        return view('topics.index',compact('topics','category'));
    }
}
