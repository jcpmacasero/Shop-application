<?php

namespace App;

class Cart 
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        } 
    }

    public function add($item, $product_id, $quantity, $maxqty) {
        $storedItem = ['qty' => 0, 'maxqty' => 0, 'price' => $item->price, 'item' => $item, 'totalItemPrice' => 0];
        if($this->items) {
            if(array_key_exists($product_id, $this->items)) {
                $storedItem = $this->items[$product_id];                
                $this->totalQty--;
                $this->totalPrice -= $storedItem['totalItemPrice'];
            }
        }
        
        $storedItem['qty'] += $quantity;        
        $storedItem['price'] = $item->price;
        $storedItem['maxqty'] = $maxqty;
        $storedItem['totalItemPrice'] = $storedItem['qty'] * $storedItem['price'];
        $this->items[$product_id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $storedItem['totalItemPrice'];
    }

    public function removeItem($id) {
        $this->totalQty --;
        $priceDeduction = $this->items[$id]['price'] * $this->items[$id]['qty'];
        $this->totalPrice = $this->totalPrice - $priceDeduction;
        unset($this->items[$id]);
    }

    public function getmaxQty($id) {        
        $sessionQty = 0;
        if($this->items) {
            if(array_key_exists($id, $this->items))
            $sessionQty = $this->items[$id]['qty'];
        }
        return $sessionQty;
    }

    public function updateqty($id, $newqty) {
        if($this->items[$id]['qty'] > $newqty) {
            $this->items[$id]['qty'] = $newqty;            
            $this->totalPrice -= $this->items[$id]['price'];    
        }
        else if($this->items[$id]['qty'] < $newqty) {
            $this->items[$id]['qty'] = $newqty;
            $this->totalPrice += $this->items[$id]['price'];    
        }
        
    }
}
