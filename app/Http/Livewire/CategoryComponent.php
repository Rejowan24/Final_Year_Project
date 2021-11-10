<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class CategoryComponent extends Component
{

    public $category_slug;
    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }



    use WithPagination;
    public function render()
    {
        $category = Category::where('slug',$this->category_slug)->first();
        $products = Product::where('category_id',$category->id)->paginate(2);
        $categories = Category::all();

        return view('livewire.Category-component', ['products'=> $products , 'categories'=>$categories])->layout('layouts.master');
    }
}
