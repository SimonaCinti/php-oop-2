<?php 
include_once __DIR__ .'/Item.php';

/**
 * Member Price
 * 
 * classe estesa di Item
 */

 class Member_price extends Item{
     public $tier_membership;

     public function setTier($tier_membership){
         $this->tier_membership = $tier_membership;
     }

    protected function getTier(){
         return $this->tier_membership;
    }

    public function printItem(){
        $name_type = parent::printItem();
        $tier = $this->tier_membership;
        return "$name_type ( $tier Tier)";
    }
    // Scontistica
    public function discountMember(){
        if ($this->tier_membership === "Gold"){
            $discount = $this->price - ($this->price / 100 * 70);
            return number_format($discount, 2) . ' euro - Prezzo con Sconto Gold';
        }
        elseif ($this->tier_membership === "Silver") {
            $discount = $this->price - ($this->price / 100 * 50);
            return number_format($discount, 2) . ' euro - Prezzo con sconto Silver';
        }
        else {
            $discount = $this->price - ($this->price / 100 * 25);
            return number_format($discount, 2) . ' euro - Prezzo con sconto Membership';
        }
    }
}