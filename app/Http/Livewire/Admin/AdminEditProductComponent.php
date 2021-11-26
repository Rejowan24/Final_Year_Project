<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{


    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $image;
    public $category_id;
    public $newimage;
    public $product_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->newimage = $product->newimage;
        $this->product_id = $product->product_id;
    }
    
    public function generateslug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updateproduct()
    {
        $product = Product::find($this->product_id);
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        if($this->newimage)
        {
            $image = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('products',$image);
            $product->image =$image;
        }
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Books has been updated successful');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.admin_index');
    }
}
