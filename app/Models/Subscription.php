<?php

namespace App\Models;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendSubscriptionMessage;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['email', 'product_id'];

    public function scopeActiveByProductId($query, $productId)
    {
        return $query->where('status', 0)->where('product_id', $productId);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function sendEmailsBySubscription(Product $product)
    {
        $subscriptions = self::ActiveByProductId($product->id)->get();

        foreach($subscriptions as $subscription) {
            Mail::to($subscription->email)->send(new SendSubscriptionMessage($product));
            $subscription->status = 1;
            $subscription->save();
        }
    }
}
