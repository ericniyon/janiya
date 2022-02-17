<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithFileUploads;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSize;
use App\Models\ProductValiations;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Livewire\Component;

class AddProduct extends Component
{
    use WithFileUploads;
    protected $listeners = ['AddProduct' => '$refresh'];

    public $valuations, $name, $description,$product_image, $product_category_id, $quantity, $price,$product_color, $product_size, $product_name;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;


    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
        // $this->valuations[] = [];

    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }




    private function resetInputFields(){
        $this->name = '';
        $this->description = '';
        $this->product_category_id = '';
        $this->quantity = '';
        $this->price = '';
        $this->product_color = '';
        $this->product_name = '';
        $this->product_size = '';
        $this->product_image = '';
    }


    public function store()
    {
        $images = new Product();
        $validation = $this->validate([
    		'description'		    =>	'required',
    		'name'			        =>	'required',
    		'product_category_id'	=>	'required',
    		'product_image'	=>	'image|max:1024',

    	]);

        $filename = "";
        if ($this->product_image) {
            $filename = $this->product_image->store('products', 'public');
        } else {
            $filename = Null;
        }

        $images->name = $this->name;
        $images->description = $this->description;
        $images->product_image = $filename;
        $images->product_category_id = $this->product_category_id;

        $result = $images->save();
        dd($result);

        // $name = md5($this->product_image . microtime()).'.'.$this->product_image->extension();

        // $this->product_image->storeAs('photos', $name);

        // $product = Product::create($validation);

        foreach ($this->quantity as $key => $value) {


            ProductValiations::create([
                'quantity' => $this->quantity[$key],
                'price' => $this->price[$key],
                'product_size' => $this->product_size[$key],
                'product_color' => $this->product_color[$key],

                'product_name' => $result['id'],

            ]);
        }
        $this->inputs = [];
        // dd($this->product_category_id);


    	$this->resetInputFields();
        session()->flash('message', 'Data Created Successfully.');



        session()->flash('message', 'Records Has Been Inserted Successfully.');
    }


    public function render()
    {
        $colors = Color::all();
        $sizes = ProductSize::all();
        $this->categories = ProductCategory::all();

        return view('livewire.admin.add-product', compact('colors', 'sizes'));
    }
}
