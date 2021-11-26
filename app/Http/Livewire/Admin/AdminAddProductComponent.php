<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $image;
    public $category_id;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function addProduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $image = $this->image->getClientOriginalName();
        $this->image->storeAs('products',$image);
        $product->image =$image;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Books has been added successful');
    }

    public function render()
    {

        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.admin_index');
    }
}
