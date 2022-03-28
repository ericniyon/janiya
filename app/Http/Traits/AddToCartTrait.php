<?php
namespace App\Http\Traits;

use App\Models\Color;
use App\Models\ProductSize;
use Darryldecode\Cart\Cart;
trait AddToCartTrait
{
    public function addToCartTrait($productModel, $color,$size,$quantity,$vendor)
    {
        // $colr = Color::findOrFail($color);
        // $sze = ProductSize::findOrFail($size);
        \Cart::add(array(
            'id'=>$productModel->id,
            'name'=>$productModel->name,
            'price'=>$productModel->price,
            'quantity' => $quantity,
            'attributes'=>array(
                'color'=>$color,
                'size'=>$size,
                'shop'=>$vendor,
            ),
            'associatedModel' => $productModel,
        ));
    }

    public function removeFromCart($item)
    {
        \Cart::remove($item);
    }

    public function increaseQuantity($id)
    {
        \Cart::update($id,[
            'quantity' => 1,
        ]);
    }

    public function decreaseQuantity($id)
    {
        \Cart::update($id,[
            'quantity' => -1,
        ]);
    }
}
