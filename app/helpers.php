<?php
if (!function_exists('calculateOrderTotalBasedOnItems')) {
    function calculateOrderTotalBasedOnItems($cart)
    {
        $total = 0;
        foreach ($cart as $product) {
            // Assuming each product has a 'price' attribute
            $total += $product->price * $product->quantity;
        }
        return $total;
    }
}
