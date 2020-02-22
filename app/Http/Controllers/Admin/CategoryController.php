<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function index()
    {
      $categories = Category::where('parent_id', null)->with('child.child')->get();
      return view('admin.categories.index', ['categories' => $categories]);
    }

  public function create()
    {
        $categories = Category::where('parent_id', null)->with('child')->get();
        return view('admin.categories.create', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        if ($request->parent_id == 0) {
            $data = [
                'name' => $request->name,
            ];
        } else {
            $data = [
                'name'      => $request->name,
                'parent_id' => $request->parent_id,
            ];
        }
        Category::create($data);

        return redirect()->back()->with('success','Create category successfly!');

    }

    public function destroy(Category $category)
    {
        $category->child()->get()->each->delete();
        $category->delete();
        return redirect()->back()->with('success','Delete successfly!');
    }
}
