<link rel="stylesheet" href="/css/index.css" />
@extends('admin.public')

@section('content')
<!-- 内容 -->
<div class="content">
  <!-- 轮播 -->
  <div id="ad-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
      <?php foreach ($ads as $k => $ad) : ?>
        <li data-target="#ad-carousel" data-slide-to="<?php echo $ad['ad_id']; ?>" class="<?php echo $ad['ad_id'] == 0 ? 'active' : ''; ?>"></li>
      <?php endforeach; ?>
    </ol>

    <div class="carousel-inner">
      <?php foreach ($ads as $k => $ad) : ?>
        <div class="
                    carousel-item
                    <?php
                    echo
                    $ad['ad_id'] == 0 ? 'active' : ''; ?>
                  ">
          <img src="<?php echo $ad['url']; ?>" class="d-block w-100" alt="..." />
        </div>

      <?php endforeach; ?>
    </div>

    <a class="carousel-control-prev" href="#ad-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#ad-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- 咖啡起源 -->
  <div class="container-fluid my-5">
    <!-- 版块标题，显示下边框，设置边框和字体颜色为 success，调整边距-->
    <h5 class="text-success pl-4 border-bottom pb-2 border-success">
      咖啡的起源与培植
    </h5>

    <!--“观鸟召集”版块图文单元，采用媒体对象实现-->
    <div class="row">
      <?php foreach ($trees as $k => $tree) : if (!(($k + 1) % 2 == 0)) { ?>
          <div class="col-lg-6">
            <div class="media position-relative m-3">
              <!--缩略图 设置宽度为 10rem,与右侧的文字留够间隔-->
              <img src="<?php echo $tree['tree_img']; ?>" style="width: 10rem" class="img-thumbnail mr-3" alt="..." />
              <div class="media-body">
                <!--标题中价格文字采用 warning 色并加粗-->
                <h5 class="mt-0 mb-1">
                  <?php echo $tree['tree_title']; ?>
                </h5>
                <p class="text-muted">
                  <?php echo $tree['tree_detail']; ?>
                </p>
                <a class="stretched-link" href="origin.php?id=<?php echo $tree['tree_id']; ?>">查看详情</a>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="col-lg-6">
            <div class="media position-relative m-3">
              <div class="media-body">
                <h5 class="mt-0 mb-1">
                  <?php echo $tree['tree_title']; ?>
                </h5>
                <p class="text-muted">
                  <?php echo $tree['tree_detail']; ?>
                </p>
                <a class="stretched-link" href="detail.html?id=36">查看详情</a>
              </div>
              <!--图片居右,与左侧的文字留够间隔-->
              <img class="img-thumbnail ml-3" style="width: 10rem" src="<?php echo $tree['tree_img']; ?>" />
            </div>
          </div>

      <?php }
      endforeach; ?>
    </div>
  </div>

  <!-- 巨幕 -->
  <?php foreach ($jumbotrons as $k => $jumbotron) : ?>
    <div class="row">
      <div class="jumbotron jumbotron-fluid container-fluid px-5">
        <h2 class="text-info ml-5">
          <?php echo $jumbotron['jumbotron_title']; ?>
        </h2>
        <p class="text-secondary ml-5">
          <?php echo $jumbotron['jumbotron_detail']; ?>
        </p>
        <div class="container text-center">
          <image class="img-fluid" src="<?php echo $jumbotron['jumbotron_img']; ?>" mode="aspectFit|aspectFill|widthFix" lazy-load="false" binderror="" bindload="">
          </image>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <!--“热门饮品”版块-->
  <div class="shadow my-3">
    <h5 class="border-bottom border-danger text-danger py-3 pl-3">
      热门饮品
    </h5>
    <!--“卡片”图文单元-->
    <div class="card-columns mt-3 p-5 hot_drink">
      <?php foreach ($hot_drinks as $k => $hot_drink) : ?>
        <div class="card">
          <img src="<?php echo $hot_drink['hot_drink_img']; ?>" class="img-fluid" alt="..." />
          <!--“卡片”体-->
          <div class="card-body">
            <!--“卡片”标题-->
            <h5 class="card-title text-dark">
              <?php echo $hot_drink['hot_drink_name']; ?>
            </h5>

            <!--“卡片”文字-->
            <p class="card-text text-muted">
              <?php echo $hot_drink['hot_drink_detail']; ?>
            </p>

            <!--延展链接-->
            <a href="http://localhost/cafe/detail.php?drink_detail_id=<?php echo $hot_drink['drink_detail_id']; ?>" class="card-link stretched-link">去看看</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
@endsection