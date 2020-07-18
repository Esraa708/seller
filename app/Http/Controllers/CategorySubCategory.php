<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategorySubCategoryRequest;
use App\SubCategory;
use Facade\FlareClient\Http\Response;
use App\Colors;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CategorySubCategory extends Controller
{
  // return add product form based on category and subcategory selected
  public function create(CategorySubCategoryRequest $request)
  {
    $categoryExist = Category::where('id', '=', $request->category_id)->exists();
    //check if category exists
    if ($categoryExist == true) {
      //check if subcategory exists with this category
      $subCategories = Category::find($request->category_id)->subCategories;
      if ($subCategories->contains($request->subcategory_id)) {
        $colors=Colors::all();
        $subCategoryAttributes = SubCategory::find($request->subcategory_id)->attributes()->get();
        return view('addProduct', [
          'attributes' => $subCategoryAttributes,
          'category_id' => $request->category_id,
          'subcategory_id' => $request->subcategory_id,
          'colors' => $colors
        ]);
      } else {
        return response('please select a valid sub-category', 404);
      };
    } else {
      return response('please select a valid category', 404);
    }
  }

  public function createCategories()
  {
    $categories=Category::all();
    return view('categorySubCategory', ['categories' => $categories]);
  }
  public function bringSubCategories(Request $request,$id)
  {
    $subCategories = Category::find($id)->subCategories;
    return response()->json(['subCategories' => $subCategories]);
  }


}
