<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //количесвто товаров
    public function products(){
        return $this -> belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }
    //полная стоимость заказа
    public function getFullPrice(){
        $sum = 0;
        foreach($this ->products as $product){
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    
    // сохранение заказа в базе
    public function saveOrder($name, $phone){
        if($this->status == 0){
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            
        }else{
            return false;
        }

    }
}
