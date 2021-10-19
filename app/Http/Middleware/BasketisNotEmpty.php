<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Order;

class BasketisNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $orderId = session('orderId');

        if (!is_null($orderId) && Order::getFullSum() > 0) {
                return $next($request);
            }

        session()->flash('warning', 'Ваша корзина пуста!');
        return redirect()->route('index');
    }
}
