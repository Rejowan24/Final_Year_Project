<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class BookitemsComponent extends Component
{
  

    public $ctg;
    public $searchTerm;
   
    public function allCtg()
    {
        dd('all  the  products are here...');
    }
    public function updatedCategory($ctg)
    {
        $this->ctg = $ctg;
    }

    use WithPagination;
    public function render()
    {

        if (!is_null($this->ctg)) {
            $products = Product::where('category_id',$this->ctg)->when($this->searchTerm, function($query, $searchTerm){
                return $query->where('name','LIKE',"%$searchTerm%");
            })->paginate(8);

        }else{
            $products = Product::when($this->searchTerm, function($query, $searchTerm){
                return $query->where('name','LIKE',"%$searchTerm%");
            })->paginate(8);
        }
      
        $categories = Category::all();
        return view('livewire.bookitems-component', ['products'=> $products, 'categories'=>$categories])->layout('layouts.master');
    }
}
