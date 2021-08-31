<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  use HasFactory;
  protected $table = 'food';
  public $timestamps = false;
  //create方法,必须定义
  protected $fillable = ['name'];

  public function SelectAll()
  {
    return $this->get(['food_id', 'name']);
  }
  public function SelectName($food_id)
  {
    return $this->where('food_id', $food_id)->get(['name']);
  }
}
