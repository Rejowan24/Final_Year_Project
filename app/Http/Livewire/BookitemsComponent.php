<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class BookitemsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(8);

        $categories = Category::all();
        return view('livewire.bookitems-component', ['products'=> $products , 'categories'=>$categories])->layout('layouts.master');
    }
}
