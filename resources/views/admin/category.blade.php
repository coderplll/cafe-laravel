<link rel="stylesheet" href="/css/category.css" />
@extends('admin.public')

@section('content')
<!-- 内容 -->
<div class="content">
  <?php foreach ($drinks as $k => $drink) :
    $drink_isShow = (isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 0 && $drink['drink_id'] == $_GET['id'])
      ||
      (isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 0 && $_GET['id'] == 0) ? "" : "d-none"; ?>
    <ul class="row position-relative pt-5 pb-4 <?php echo $drink_isShow ?>">
      <h5 class="position-absolute name">
        <?php echo $drink['name'] ?>
      </h5>

      <?php foreach ($drink_details as $k => $drink_detail) {
        if (isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 0 && $drink_detail['drink_id'] == $drink['drink_id']) {
      ?>
          <div class="text-center col-6 col-md-4 col-lg-3 my-2 preview">
            <a href="/admin/detail?drink_detail_id=<?php echo $drink_detail['drink_detail_id']; ?>" class="">
              <img src="<?php echo $drink_detail['img']; ?>" alt="" />
              <h5 class="text-center mt-2">
                <?php echo $drink_detail['name']; ?>
              </h5>
            </a>
          </div>
      <?php }
      } ?>
    </ul>
  <?php endforeach; ?>

  <?php foreach ($foods as $k => $food) :
    $food_isShow = (isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 1 && $food['food_id'] == $_GET['id'])
      ||
      (isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 1 && $_GET['id'] == 0) ? "" : "d-none"; ?>
    <ul class="row position-relative pt-5 pb-4 <?php echo $food_isShow ?>">
      <h5 class="position-absolute name">
        <?php echo $food['name'] ?>
      </h5>

      <?php foreach ($food_details as $k => $food_detail) {
        if (isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 1 && $food_detail['food_id'] == $food['food_id']) {
      ?>
          <div class="text-center col-6 col-md-4 col-lg-3 my-2 preview">
            <a href="/admin/detail?food_detail_id=<?php echo $food_detail['food_detail_id']; ?>">
              <img src="<?php echo $food_detail['img']; ?>" />
              <h5 class="text-center mt-2">
                <?php echo $food_detail['name']; ?>
              </h5>
            </a>
          </div>
      <?php }
      } ?>
    </ul>
  <?php endforeach; ?>
</div>
@endsection