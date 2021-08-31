<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Drink;
use App\Models\Admin\Food;
use App\Models\Admin\Ad;
use App\Models\Admin\Tree;
use App\Models\Admin\Jumbotron;
use App\Models\Admin\Hot_drinks;
use App\Models\Admin\Drink_detail;
use App\Models\Admin\Food_detail;


use Session;

class AdminController extends Controller
{
  public function public()
  {
    $model = new Drink();
    $drinks = $model->selectAll();
    $model = new Food();
    $foods = $model->selectAll();

    if (session()->has('name')) {
      $username_isShow = "";
      $login_isShow = "d-none";
      $username = $_SESSION['name'];
    } else {
      $username_isShow = "d-none";
      $login_isShow = "";
      $username = '登录';
    }

    if (isset($_GET['category']) && $_GET['category'] == 0) {
      $cup_name = 'cup-fill';
      $cup_color = 'text-danger';
      $cup_isShow = 'show';
      $cup_isRotate = 'rotate(90deg)';
      $cup_border = '3px solid #f13757';
      $title = "饮品";
    } else {
      $cup_name = 'cup';
      $cup_color = '';
      $cup_isShow = '';
      $cup_isRotate = '';
      $cup_border = '0px';
      $title = "";
    }



    if (isset($_GET['category']) && $_GET['category'] == 1) {
      $cake_name = 'cake-fill';
      $food_color = 'text-danger';
      $cake_isShow = 'show';
      $food_isRotate = 'rotate(90deg)';
      $food_border = '3px solid #f13757';
      $title = "美食";
    } else {
      $cake_name = 'cake';
      $food_color = '';
      $cake_isShow = '';
      $food_isRotate = '';
      $food_border = '0px';
      $title = "";
    }

    // dd($food_isShow);

    return [$drinks, $foods, $username_isShow, $login_isShow, $username, $cup_name, $cup_color, $cup_isShow, $cup_isRotate, $cup_border, $cake_name, $food_color, $cake_isShow, $food_isRotate, $food_border, $title];
  }


  public function index()
  {
    $arr = $this->public();
    [$drinks, $foods, $username_isShow, $login_isShow, $username] = $arr;

    $model = new Ad();
    $ads = $model->selectAll();
    $model = new Tree();
    $trees = $model->selectAll();
    $model = new Jumbotron();
    $jumbotrons = $model->selectAll();
    $model = new Hot_drinks();
    $hot_drinks = $model->selectAll();


    return view('admin.index', compact('drinks', 'foods', 'username_isShow', 'login_isShow', 'username',  'ads', 'trees', 'jumbotrons', 'hot_drinks'));
  }

  public function category()
  {
    $arr = $this->public();
    [$drinks, $foods, $username_isShow, $login_isShow, $username, $cup_name, $cup_color, $cup_isShow, $cup_isRotate, $cup_border, $cake_name, $food_color, $cake_isShow, $food_isRotate, $food_border, $title] = $arr;


    $model = new Drink_detail();
    $drink_details = $model->selectAll();
    $model = new Food_detail();
    $food_details = $model->selectAll();


    return view('admin.category', compact('drinks', 'foods', 'username_isShow', 'login_isShow', 'username', 'cup_name', 'cup_color', 'cup_isShow', 'cup_isRotate', 'cup_border', 'title', 'cake_name', 'food_color', 'cake_isShow', 'food_isRotate', 'food_border', 'drink_details', 'food_details'));
  }
  public function detail()
  {
    $arr = $this->public();
    [$drinks, $foods, $username_isShow, $login_isShow, $username] = $arr;

    if (isset($_GET['drink_detail_id'])) {
      $model = new Drink_detail();
      $drink_detail_id = $_GET['drink_detail_id'];
      $drink_detail = $model->Select($drink_detail_id);

      $drink_detail_name = $drink_detail[0]['name'];
      $drink_detail_detail = $drink_detail[0]['detail'];
      $drink_detail_drink_id = $drink_detail[0]['drink_id'];

      $model = new Drink;
      $drink_names = $model->SelectName($drink_detail_drink_id);
      $drink_name = $drink_names[0]["name"];
      $drink_detail_isShow = '';

      $title = $drink_detail_name;
    } else {
      $drink_detail = '';
      $drink_detail_id = '';
      $drink_detail_name = '';
      $drink_detail_detail = '';

      $drink_name = '';
      $drink_detail_isShow = 'd-none';
    }


    if (isset($_GET['food_detail_id'])) {
      $model = new Food_detail();
      $food_detail_id = $_GET['food_detail_id'];
      $food_detail = $model->Select($food_detail_id);
      $food_detail_name = $food_detail[0]['name'];
      $food_detail_detail = $food_detail[0]['detail'];
      $food_detail_food_id = $food_detail[0]['food_id'];

      $model = new Food;
      $food_names = $model->SelectName($food_detail_food_id);
      $food_name =  $food_names[0]["name"];
      $food_detail_isShow = '';

      $title = $food_detail_name;
    } else {
      $food_detail = '';
      $food_detail_id = '';
      $food_detail_name = '';
      $food_detail_detail = '';

      $food_name = '';
      $food_detail_isShow = 'd-none';
    }

    return view('admin.detail', compact('drinks', 'foods', 'username_isShow', 'login_isShow', 'username', 'drink_detail', 'drink_detail_name', 'drink_detail_detail', 'drink_detail_isShow', 'drink_name', 'food_detail', 'food_detail_name', 'food_detail_detail', 'food_detail_isShow', 'food_name'));
  }
}
