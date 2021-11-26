<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;

class AdminBooksItemsComponent extends Component
{

    use WithPagination;


    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been deleted successful');
    }


    public function deleteproduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','Books has been deleted successful');
    }

    public function render()
    {

        $categories = Category::all();
        $products = Product::all();
        return view('livewire.admin.pages.admin-books-items-component',['categories'=>$categories,'products'=>$products])->layout('layouts.admin_index');
    }
}
