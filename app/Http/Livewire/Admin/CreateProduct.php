<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ProductAttribute;

use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\Product;

use Livewire\WithFileUploads;


class CreateProduct extends Component
{
    use WithFileUploads;
    public $name, $price, $product_category_id, $description, $product_image = [];

    public $product_id, $color, $size, $image, $quantity;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function mount()
    {
        $this->categories = ProductCategory::all();
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }


    private function resetInputFields(){
        $this->image = '';
        $this->color = '';
        $this->size = '';
        $this->quantity = '';

    }

    public function store()
    {
        $validatedDate = $this->validate([
                'image.0' => 'required',
                'size.0' => 'required',
                'image.*' => 'required',
                'size.*' => 'required',
                'color.0' => 'required',
                'quantity.0' => 'required',
                'color.*' => 'required',
                'quantity.*' => 'required',
                'name'=>'string|unique:products,name|min:3|max:220',
                'price'=>'required|integer|min:500|max:500000',
                'product_category_id'=>'required|integer',
                'description'=>'string|required|min:10|max:5000',
                'product_image.*'=>'image|mimes:png,jpg,webp|required',
            ],
            [
                'image.0.required' => 'required',
                'size.0.required' => 'required',
                'image.*.required' => 'required',
                'size.*.required' => 'required',
                'color.0.required' => 'required',
                'quantity.0.required' => 'required',
                'color.*.required' => 'required',
                'quantity.*.required' => 'required',
                'name'=>'string|unique:products,name|min:3|max:220',
                'price'=>'required|integer|min:500|max:500000',
                'product_category_id'=>'required|integer',
                'description'=>'string|required|min:10|max:5000',
                'product_image.*'=>'image|mimes:png,jpg,webp|required',
            ]
        );

        $product = Product::create([
            'name'=>$this->name,
            'slug'=>str()->slug($this->name),
            'price'=>$this->price,
            'description'=>$this->description,
            'product_image'=>'null',
            'product_category_id'=>$this->product_category_id
        ]);
        if ($this->product_image) {
            foreach ($this->product_image as $key => $image) {
                $photo = $image->store('public/products/gallery');
                ProductImage::create([
                    'image' => $photo,
                    'product_id'=>$product->id
                ]);
            }
        }
        foreach ($this->color as $key => $value) {
            $color_image = $this->image[$key]->store('public/products/gallery/color');
            ProductAttribute::create([
                'color' => $this->color[$key],
                'size' => $this->size[$key],
                'quantity' => $this->quantity[$key],
                'image' => $color_image,
                'product_id' => $product->id

            ]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Product has been Created Successfully.');
    }
    public function render()
    {
        return view('livewire.admin.create-product');
    }
}
