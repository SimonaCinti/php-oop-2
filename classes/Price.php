<?php

include_once __DIR__ . '/Item.php';

/**
 * PRICE CLASS
 * 
 * classe estesa di Item
 */

 class Price extends Item{
    public $discount;

    function __construct($name, $type, $price, $num_items, $discount = 0){

        // Parent propriety
        parent::__construct($name, $type, $price, $num_items,);

        // New propriety
        $this->discount = $discount;

    }

    public function calcDiscount(){
        $total = $this->price / 100 * $this->discount;
        return number_format($total, 2);
    }
 }

