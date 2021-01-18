<?php
/**
 * ITEM CLASS
 * 
 * Parent class
 */

 class Item {

     // Proprieties
        public $name;
        public $type;
        public $price;
        public $num_items;
     // Construction

     function __construct($name, $type, $price, $num_items)
     {
         $this->name = $name;
         $this->type = $type;
         $this->price = $price;
         $this->num_items = $num_items;
     }

     // Methods
     public function printItem(){
         return  $this->name . ' - ' . $this->type;
     }
 }

