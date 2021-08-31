<link rel="stylesheet" href="/css/detail.css" />
@extends('admin.public')

@section('content')
<!-- 内容 -->
<div class="content">
  @if($drink_detail)
  <div class="
                media
                position-relative
                m-4
                row
                <?php
                echo
                $drink_detail_isShow ?>
              ">
    <!--缩略图 设置宽度为 10rem,与右侧的文字留够间隔-->
    <img src="<?php echo $drink_detail[0]['img']; ?>" style="width: 10rem" class="img-thumbnail mr-5 col-12 col-sm-5" alt="..." />
    <div class="media-body col-sm-7 py-3 py-md-5">
      <!--标题中价格文字采用 warning 色并加粗-->
      <p class="mt-0 mb-1 media-title"><?php echo $drink_name; ?></p>
      <h5 class="mt-0 mb-1"><?php echo $drink_detail_name; ?></h5>
      <p class="text-muted">
        <?php echo $drink_detail_detail; ?>
      </p>
      <a class="stretched-link" href="">查看详情</a>
    </div>
  </div>
  @else
  <div class="
                media
                position-relative
                m-4
                row
                <?php
                echo
                $food_detail_isShow ?>
              ">
    <!--缩略图 设置宽度为 10rem,与右侧的文字留够间隔-->
    <img src="<?php echo $food_detail[0]['img']; ?>" style="width: 10rem" class="img-thumbnail mr-5 col-12 col-sm-5" alt="..." />
    <div class="media-body col-sm-7 py-3 py-md-5">
      <!--标题中价格文字采用 warning 色并加粗-->
      <p class="mt-0 media-title"><?php echo $food_name; ?></p>
      <h5 class="mt-0 mb-2"><?php echo $food_detail_name; ?></h5>
      <p class="text-muted">
        <?php echo $food_detail[0]['detail']; ?>
      </p>
      <!-- <a class="stretched-link" href="">查看详情</a> -->
    </div>
  </div>
  @endif
</div>
@endsection