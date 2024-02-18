<?php

namespace App\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;
use Illuminate\Support\Str;

class CheckoutShow extends Component
{
    public function render()
    {
        return view('livewire.frontend.checkout.checkout-show');
    }
}
