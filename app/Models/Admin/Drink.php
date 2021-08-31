<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
  use HasFactory;
  protected $table = 'drink';
  public $timestamps = false;
  //create方法,必须定义
  protected $fillable = ['name'];

  public function SelectAll()
  {
    return $this->get(['drink_id', 'name']);
  }
  public function SelectName($drink_id)
  {
    return $this->where('drink_id', $drink_id)->get(['name']);
  }
  public function drink_detail()
  {
    return $this->hasMany(['App\Models\Admin\Drink_detal', 'drink_id', 'drink_id']);
  }
}
