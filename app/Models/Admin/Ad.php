<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
  use HasFactory;
  protected $table = 'ad';
  public $timestamps = false;
  //create方法,必须定义
  protected $fillable = ['url'];

  public function SelectAll()
  {
    return $this->get();
  }
}
