<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
  use HasFactory;
  protected $table = 'tree';
  public $timestamps = false;
  //create方法,必须定义
  // protected $fillable = ['name'];

  public function SelectAll()
  {
    return $this->get();
  }
}
