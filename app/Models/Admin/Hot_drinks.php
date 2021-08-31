<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hot_drinks extends Model
{
  use HasFactory;
  protected $table = 'hot_drinks';
  public $timestamps = false;
  //create方法,必须定义
  // protected $fillable = ['name'];

  public function SelectAll()
  {
    return $this->get();
  }
}
