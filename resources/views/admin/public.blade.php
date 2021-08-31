<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>旧8克</title>
  <link rel="icon" href="/imgs/favicon.png" mce_href="/imgs/favicon.png" type="image/x-icon" />
  <link rel="shortcut icon" href="/imgs/favicon.png" mce_href="/imgs/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="/css/bootstrap.min.css" />

</head>

<body>
  <div class="container-fluid">
    <div class="row pll">
      <!-- 左侧导航 -->
      <div class="col-lg-2 d-lg-flex flex-lg-column left-nav d-none d-lg-block">
        <div class="position-fixed">

          <a class="navbar-brand logo m-lg-4 r_home" href="/admin/index"><img src="/imgs/svg/logo.svg" alt="" />
            旧8克</a>

          <div class="@if(isset($_GET['drink_detail_id'])||isset($_GET['food_detail_id'])) d-none @endif">
            <a href="/admin/index" class="nav-link house r_home"><img class="pb-lg-2" @if(isset($_GET['category'])) src="http://localhost/cafe/imgs/svg/house.svg" @else src="http://localhost/cafe/imgs/svg/house-fill.svg" @endif />
              <span class="nav-text">首页</span></a>

            <a href="#drinkCollapse" data-toggle="collapse" class="nav-link drink" aria-expanded="false" @if(isset($cup_border)) style="border-left: {{$cup_border}}" @endif>
              <img class="pb-lg-2" @if(isset($cup_name)) src="http://localhost/cafe/imgs/svg/{{$cup_name}}.svg" @else src="http://localhost/cafe/imgs/svg/cup.svg" @endif />
              <span class="nav-text @if(isset($cup_color)) {{$cup_color}} @endif">饮品</span>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#drinkCollapse" aria-controls="navbarSupportedContent" aria-expanded="false">
                <img src="http://localhost/cafe/imgs/svg/chevron-right.svg" @if(isset($cup_isRotate)) style="transform: {{$cup_isRotate}}" @endif /></button></a>

            <div class="collapse navbar-collapse @if(isset($cup_isShow)) {{$cup_isShow}} @endif" id="drinkCollapse">
              <ul class="navbar-nav ml-lg-4">
                <li class="nav-item">
                  <a class="nav-link @if(isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 0 && $_GET['id'] == 0) text-danger @endif" href="/admin/category?category=0&id=0">全部</a>
                </li>
                <?php foreach ($drinks as $k => $drink) : ?>
                  <li class="nav-item">
                    <a class="nav-link @if( isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 0 && $_GET['id'] == $drink['drink_id']) text-danger @endif" href="/admin/category?category=0&id=<?php echo $drink['drink_id']; ?>"><?php echo $drink['name']; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <a href="#foodCollapse" data-toggle="collapse" class="nav-link food" @if(isset($food_border)) style="border-left: {{$food_border}}" @endif>
              <img class="pb-lg-2" @if(isset($cake_name)) src="http://localhost/cafe/imgs/svg/{{$cake_name}}.svg" @else src="http://localhost/cafe/imgs/svg/cake.svg" @endif />
              <span class="nav-text @if(isset($food_color)) {{$food_color}} @endif">美食</span>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#foodCollapse" aria-controls="navbarSupportedContent" aria-expanded="false">
                <img src="http://localhost/cafe/imgs/svg/chevron-right.svg" @if(isset($food_isRotate)) style="transform: {{$food_isRotate}}" @endif" /></button></a>

            <div class="collapse navbar-collapse @if(isset($cake_isShow)){{$cake_isShow}}@endif" id="foodCollapse">
              <ul class="navbar-nav ml-lg-4">
                <li class="nav-item">
                  <a class="nav-link @if(isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 1 && $_GET['id'] == 0)text-danger @endif " href="/admin/category?category=1&id=0">全部</a>
                </li>
                <?php foreach ($foods as $k => $food) : ?>
                  <li class="nav-item">
                    <a class="
                      nav-link @if( isset($_GET['category']) && isset($_GET['id']) && $_GET['category'] == 1 && $_GET['id'] == $food['food_id']) text-danger @endif" href="/admin/category?category=1&id=<?php echo $food['food_id']; ?>"><?php echo $food['name']; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          @if(isset($_GET['drink_detail_id']))
          <a href="/admin/category?category=0&id={{$drink_detail[0]['drink_id']}}" class="nav-link drink mt-5 @if(isset($drink_detail_isShow))  {{$drink_detail_isShow}} @endif">
            <!-- <button class="navbar-toggler" type="button"> -->
            <img src="http://localhost/cafe/imgs/svg/chevron-right.svg" style="transform: rotate(180deg)" />
            <!-- </button> -->
            <span class="nav-text">@if(isset($drink_name)) {{$drink_name}} @endif</span>
          </a>
          @elseif(isset($_GET['food_detail_id']))
          <a href="/admin/category?category=1&id={{$food_detail[0]['food_id']}}" class="nav-link drink mt-5 @if(isset($food_detail_isShow))  {{$food_detail_isShow}}@endif ">
            <!-- <button class="navbar-toggler" type="button"> -->
            <img src="http://localhost/cafe/imgs/svg/chevron-right.svg" style="transform: rotate(180deg)" />
            <!-- </button> -->
            <span class="nav-text"><?php echo $food_name ?></span>
          </a>
          @endif




          <div class="left-nav-title position-fixed" style="left: 30px; bottom: 50px">
            <h5 class="mt-lg-5 pt-lg-4">心情惬意,</h5>
            <h5>来杯咖啡吧 ☕</h5>
          </div>
        </div>
      </div>

      <!-- 右侧 -->
      <div class="col-lg-10 right">
        <!-- 导航 -->
        <div class="topNav">
          <!-- 导航左,fixed -->
          <nav class="navbar position-fixed navbar-expand-md navbar-light">
            <a class="navbar-brand logo d-lg-none" href="index.php"><img src="http://localhost/cafe/imgs/svg/logo.svg" alt="" />
              旧8克</a>
            <button class="navbar-toggler position-absolute" type="button" data-toggle="collapse" data-target="#navbar-collapse" style="left: 150px">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-white" id="navbar-collapse">
              <ul class="navbar-nav px-2">
                <li class="nav-item active">
                  <a href="http://localhost/cafe/origin.php" class="nav-link">咖啡起源</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                    关于我们
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="about_index.php">星巴克在中国</a>
                    <a class="dropdown-item" href="about_duty.php">社会责任</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" id="contact">联系我们 </a>
                </li>
              </ul>
            </div>
          </nav>

          <!-- 导航右 -->
          <div class="navbar-right position-fixed">
            <div class="dropdown">
              <a href="#" class="nav-link dropdown-toggle <?php echo $username_isShow ?>" role="button" data-toggle="dropdown"><img class="" src="http://localhost/cafe/imgs/svg/people.svg" alt="" />
                <span class="nav-text"><?php echo $username ?></span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="login.php">切换账号</a>
                <a class="dropdown-item" href="exit.php">退出登录</a>
              </div>
            </div>

            <a href="http://localhost/cafe/login.php" class="nav-link text-body <?php echo $login_isShow ?>" style="display: inline-block"><img class="" src="http://localhost/cafe/imgs/svg/user.svg" alt="" />
              <span class="nav-text"><?php echo $username ?></span></a>
            <a href="http://localhost/cafe/register.php" class="register text-body <?php echo $login_isShow ?>" style="display: inline-block">注册</a>
          </div>

          <!-- 背景 -->
          <div class="navbar-bg position-fixed"></div>
        </div>

        <!-- 内容 -->
        @yield('content')

      </div>
    </div>
  </div>

  <script src="/js/jquery-3.0.0.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="/js/jquery.qrcode.min.js"></script>
  <script src="/js/index.js"></script>
  <script src="/js/detail.js"></script>
</body>

</html>