<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_detail extends Model
{
  use HasFactory;
  protected $table = 'food_detail';
  public $timestamps = false;
  //create方法,必须定义
  protected $fillable = ['food_id', 'name', 'img', 'detail'];

  public function SelectAll()
  {
    return $this->get(['food_detail_id', 'food_id', 'name', 'img', 'detail']);
  }
  public function Select($food_detail_id)
  {
    return $this->where('food_detail_id', $food_detail_id)->get(['food_detail_id', 'food_id', 'name', 'img', 'detail']);
  }
}
