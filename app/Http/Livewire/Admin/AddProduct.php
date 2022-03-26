<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithFileUploads;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\ProductAttribute;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;
class AddProduct extends Component
{
    use WithFileUploads;

    public $colorsLoop, $sizesLoop, $colors, $sizes, $categories;
    public $name, $price, $product_category_id,$factory_price, $description, $product_image = [];


    public function mount()
    {
        $this->colorsLoop = [[]];
        $this->colors = Color::select('color_name','id')->get();
        $this->sizes = ProductSize::orderBy('size')->get();
        $this->categories = ProductCategory::all();
    }

    public function addNewRow()
    {
        $this->colorsLoop[] = [];
    }

    public function removeRow($index)
    {
        unset($this->colorsLoop[$index]);
        $this->colorsLoop = array_values($this->colorsLoop);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'string|unique:products,name|min:3|max:220',
            'price'=>'required|integer|min:500|max:500000',
            'factory_price'=>'required|integer|min:500|max:500000',
            'product_category_id'=>'required|integer',
            'description'=>'string|required|min:10|max:5000',
            'product_image.*'=>'image|mimes:png,jpg,webp|required',
            'colorsLoop.*.color'=>'required|string',
            'colorsLoop.*.quantity'=>'required|string',
            'colorsLoop.*.image'=>'sometimes|image|mimes:png,jpg,webp,jfif|max:800',
            'colorsLoop.*.size'=>'required|string',
        ]);
    }

    public function store()
    {
        $this->validate([
            'name'=>'string|unique:products,name|min:3|max:220',
            'price'=>'required|integer|min:500|max:500000',
            'factory_price'=>'required|integer|min:500|max:500000',
            'product_category_id'=>'required|integer',
            'description'=>'string|required|min:10|max:5000',
            'product_image.*'=>'image|mimes:png,jpg,webp|required',
            'colorsLoop.*.color'=>'required|string',
            'colorsLoop.*.quantity'=>'required|string',
            'colorsLoop.*.image'=>'sometimes|image|mimes:png,jpg,webp,jfif|max:800',
            'colorsLoop.*.size'=>'required|string',
        ]);

        $product = Product::create([
            'name'=>$this->name,
            'slug'=>str()->slug($this->name),
            'price'=>$this->price,
            'factory_price'=>$this->factory_price,
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

        foreach($this->colorsLoop as $key=>$item){
            $color_image = $item['image']->store('public/products/gallery/color');
            $product->attributes()->create([
                'color'=>$item['color'],
                'size'=>$item['size'],
                'quantity'=>$item['quantity'],
                'image'=> $color_image,
                'product_id'=>$product->id
            ]);
        }

        $this->reset();
        session()->flash('message', 'Data Created Successfully.');
        session()->flash('message', 'Records Has Been Inserted Successfully.');
        return to_route('admin.add-product');
    }


    public function render()
    {
        return view('livewire.admin.add-product');
    }
}
