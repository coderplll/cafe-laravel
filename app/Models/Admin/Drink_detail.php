<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink_detail extends Model
{
  use HasFactory;
  protected $table = 'drink_detail';
  public $timestamps = false;
  //create方法,必须定义
  protected $fillable = ['drink_id', 'name', 'img', 'detail'];

  public function SelectAll()
  {
    return $this->get(['drink_detail_id', 'drink_id', 'name', 'img', 'detail']);
  }

  public function Select($drink_detail_id)
  {
    return $this->where('drink_detail_id', $drink_detail_id)->get(['drink_detail_id', 'drink_id', 'name', 'img', 'detail']);
  }
}
