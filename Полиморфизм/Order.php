<?php

class Order {
    protected $items;
    protected $taxRate; 
    protected $discount; 
    public function __construct($items, $taxRate = 0.1, $discount = 0) {
        $this->items = $items; 
        $this->taxRate = $taxRate; 
        $this->discount = $discount; 
    }

    public function calculateTotal() {
        $subtotal = array_sum($this->items); 
        $discountAmount = $subtotal * $this->discount; 
        $taxAmount = ($subtotal - $discountAmount) * $this->taxRate; 
        return $subtotal - $discountAmount + $taxAmount; 
    }
}

class OnlineOrder extends Order {
    protected $shippingFee; 

    public function __construct($items, $taxRate = 0.1, $discount = 0, $shippingFee = 5) {
        parent::__construct($items, $taxRate, $discount);
        $this->shippingFee = $shippingFee; 
    }

    public function calculateTotal() {
        $baseTotal = parent::calculateTotal(); 
        return $baseTotal + $this->shippingFee; 
    }
}
class StoreOrder extends Order {
    public function calculateTotal() {
        $this->discount += 0.05; 
        return parent::calculateTotal(); 
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal() {
        $this->discount += 0.10;
        return parent::calculateTotal();
    }
}