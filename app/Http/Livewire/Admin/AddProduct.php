<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithFileUploads;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;
class AddProduct extends Component
{
    use WithFileUploads;
    public $colorsLoop, $sizesLoop, $colors, $sizes, $categories;
    public $name, $price, $product_category_id, $description, $product_image = []; 

    public function mount()
    {
        $this->colorsLoop = [[]];
        $this->sizesLoop = [[]];
        $this->colors = Color::select('color_name','id')->get();
        $this->sizes = ProductSize::orderBy('size')->get();
        $this->categories = ProductCategory::all();
    }

    public function addNewRow()
    {
        $this->colorsLoop[] = [];
    }

    public function addNewSizeRow()
    {
        $this->sizesLoop[] = [];
    }

    public function removeRow($index)
    {
        unset($this->colorsLoop[$index]);
        $this->colorsLoop = array_values($this->colorsLoop);
    }

    public function removeSizeRow($index)
    {
        unset($this->sizesLoop[$index]);
        $this->sizesLoop = array_values($this->sizesLoop);
    }

    public function FunctionName($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'string|unique:products,name|min:3|max:220',
            'price'=>'required|integer|min:500|max:500000',
            'product_category_id'=>'required|integer',
            'description'=>'string|required|min:10|max:5000',
            'product_image.*'=>'image|mimes:png,jpg,webp|required',
            'colorsLoop.*.color'=>'required|integer',
            'colorsLoop.*.quantity'=>'required|integer',
            'colorsLoop.*.image'=>'sometimes|image|mimes:png,jpg,webp,jfif|max:800',
            'sizesLoop.*.size'=>'required|integer',
            'sizesLoop.*.quantity'=>'required|integer|min:5',
        ]);
    }

    public function store()
    {
        $this->validate([
            'name'=>'string|unique:products,name|min:3|max:220',
            'price'=>'required|integer|min:500|max:500000',
            'product_category_id'=>'required|integer',
            'description'=>'string|required|min:10|max:5000',
            'product_image.*'=>'image|mimes:png,jpg,webp|required',
            'colorsLoop.*.color'=>'required|integer',
            'colorsLoop.*.quantity'=>'required|integer',
            'colorsLoop.*.image'=>'sometimes|image|mimes:png,jpg,webp,jfif|max:800',
            'sizesLoop.*.size'=>'required|integer',
            'sizesLoop.*.quantity'=>'required|integer|min:5',
        ]);

        $product = Product::create([
            'name'=>$this->name, 
            'slug'=>str()->slug($this->name), 
            'price'=>$this->price, 
            'description'=>$this->description,
            'product_image'=>'test.png', 
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
            $product->colors()->attach($item['color'],[
                'quantity'=>$item['quantity'],
                'image'=>$color_image,
            ]);
        }

        foreach($this->sizesLoop as $key=>$item){
            $product->sizes()->attach($item['size'],[
                'quantity'=>$item['quantity'],
            ]);
        }

        $this->reset();
        session()->flash('message', 'Data Created Successfully.');
        session()->flash('message', 'Records Has Been Inserted Successfully.');
        return to_route('admin.dashboard');
    }


    public function render()
    {
        return view('livewire.admin.add-product');
    }
}
