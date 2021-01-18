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

     public function getTier(){
         return $this->tier_membership;
     }

     public function printItem(){
        $name_type = parent::printItem();
        $tier = $this->tier_membership;
        return "$name_type ( $tier Tier)";
     }
}