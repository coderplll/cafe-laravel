<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin\Drink;
use App\Models\Admin\Food;

Route::prefix('json')->group(function () {
  Route::get('drinks', function () {
    $model = new Drink();
    $res = $model->selectAll();
    $drinks = array();
    foreach ($res as $val) {
      array_push($drinks, [
        "drink_id" => $val->drink_id,
        "name" =>  $val->name
      ]);
    }
    return json_encode(array("code" => 0, "data" => $drinks), JSON_UNESCAPED_UNICODE);
  });

  Route::get('foods', function () {
    $model = new Food();
    $res = $model->selectAll();
    $foods = array();

    foreach ($res as $val) {
      array_push($foods, [
        "food_id" => $val->food_id,
        "name" =>  $val->name
      ]);
    }

    return json_encode(array("code" => 0, "data" => $foods), JSON_UNESCAPED_UNICODE);
  });
});
