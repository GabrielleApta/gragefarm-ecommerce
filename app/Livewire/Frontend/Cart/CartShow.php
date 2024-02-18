<?php

namespace App\Livewire\Frontend\Cart;

use App\Models\Cart;
use Livewire\Component;

class CartShow extends Component
{
    public $cart, $totalPrice = 0;
    public $cartMessage = '';

    public function decrementQuantity(int $cartId)
    {
        $cartData = Cart::where('id', $cartId)->where('user_id', auth()->user()->id)->first();

        if ($cartData) {
            $cartData->decrement('quantity');
            $this->dispatch('message', [
                'text' => 'Kuantitas Berhasil di Ubah',
                'type' => "success",
                'status' => 200
            ]);
        } else {
            $this->dispatch('message', [
                'text' => 'Kuantitas Gagal di Ubah',
                'type' => "error",
                'status' => 404
            ]);
        }
    }

    public function incrementQuantity(int $cartId)
    {
        $cartData = Cart::where('id', $cartId)->where('user_id', auth()->user()->id)->first();

        if ($cartData->product->quantity > $cartData->quantity) {
            $cartData->increment('quantity');
            $this->dispatch('message', [
                'text' => 'Kuantitas Berhasil di Ubah',
                'type' => "success",
                'status' => 200
            ]);
        } else {
            $this->dispatch('message', [
                'text' => 'Kuantitas Gagal di Ubah',
                'type' => "error",
                'status' => 404
            ]);
        }
    }

    public function removeCartItem(int $cartId)
    {
        $cartRemoveData = Cart::where('user_id', auth()->user()->id)->where('id', $cartId)->first();
        if ($cartRemoveData) {
            $cartRemoveData->delete();

            $this->dispatch('CartAddedUpdated');
            $this->cartMessage = "Produk berhasil dihapus dari keranjang";

            $this->dispatch('message', [
                'text' => $this->cartMessage,
                'type' => "success",
                'status' => 200
            ]);
        } else {
            $this->cartMessage = "Produk gagal dihapus dari keranjang";

            $this->dispatch('message', [
                'text' => $this->cartMessage,
                'type' => "error",
                'status' => 500
            ]);
        }
    }

    public function render()
    {
        $this->cart = Cart::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.cart.cart-show', [
            'cart' => $this->cart
        ]);
    }
}
