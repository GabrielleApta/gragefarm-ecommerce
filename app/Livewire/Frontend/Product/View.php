<?php

namespace App\Livewire\Frontend\Product;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class View extends Component
{

    public $category, $product, $quantityCount = 1;
    public $cartMessage = '';

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product
        ]);
    }

    public function decrementQuantity()
    {
        if ($this->quantityCount > 1) {
            $this->quantityCount--;
        }
    }

    public function incrementQuantity()
    {
        if ($this->quantityCount < 50) {
            $this->quantityCount++;
        }
    }

    public function addToCart(int $productId)
    {
        if (Auth::check()) {
            // dd($productId);
            if ($this->product->where('id', $productId)->where('status', 0)->exists())
            {
                if ($this->product->quantity > 0)
                {

                    if ($this->product->quantity > $this->quantityCount)
                    {
                        // Tambah Produk Ke Keranjang
                        Cart::create([
                            'user_id' => auth()->user()->id,
                            'product_id' => $productId,
                            'quantity' => $this->quantityCount
                        ]);

                        $this->dispatch('CartAddedUpdated');
                        $this->cartMessage = "Produk berhasil ditambahkan ke keranjang";

                        $this->dispatch('message', [
                            'text' => $this->cartMessage,
                            'type' => "success",
                            'status' => 200
                        ]);
                    }

                    else {
                        $this->dispatch('message', [
                            'text' => 'Only'.$this->product->quantity.'Quantity Available',
                            'type' => "warning",
                            'status' => 404
                        ]);
                    }

                }

                else {
                    $this->dispatch('message', [
                        'text' => "Stok Produk tidak tersedia",
                        'type' => "warning",
                        'status' => 404
                    ]);
                }
            }

            else {
                $this->dispatch('message', [
                    'text' => "Produk tidak tersedia",
                    'type' => "warning",
                    'status' => 404
                ]);
            }
        }

        else {
            $this->dispatch('message', [
                'text' => "Silahkan Login untuk melanjutkan",
                'type' => "info",
                'status' => 401
            ]);
        }
    }
}
