<!doctype html>
<html lang="zh-Hant" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>司法院全球資訊網</title>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <!-- slick css-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css" />
  <!-- hyUI css -->
  <link rel="stylesheet" href="css/judicial.css">
</head>

<body>
  <!-- 直接跳主內容區 -->
  <a class="goCenter" href="#center" tabindex="1">按Enter到主內容區</a>
  <!-- wrapper Start -->
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/header.html'); ?>
    <!-- header End -->
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <div class="container">
        <!-- 內頁新增一個classname-->
        <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
        <!-- 左欄可自行刪除 -->
        <?php require_once('include/left_block.html'); ?>
        <div class="content_block">
          <!-- breadcrumb路徑 -->
          <?php require_once('include/breadcrumb.html'); ?>
          <!-- h2節點 -->
          <h2 class="pageTitle">節點標題</h2>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?>
          <!-- NP Start -->
          <section class="np">
            <ul>
              <li><a href="#"><span class="num">1</span>節點1</a></li>
              <li><a href="#"><span class="num">2</span>節點2</a></li>
              <li><a href="#"><span class="num">3</span>節點3</a></li>
              <li><a href="#"><span class="num">4</span>節點4</a></li>
              <li><a href="#"><span class="num">5</span>節點5</a></li>
              <li><a href="#"><span class="num">6</span>節點6</a></li>
              <li><a href="#"><span class="num">7</span>節點7</a></li>
              <li><a href="#"><span class="num">8</span>節點8</a></li>
              <li><a href="#"><span class="num">9</span>節點9</a></li>
              <li><a href="#"><span class="num">10</span>節點10</a></li>
            </ul>
          </section>
          <!-- NP End -->
        </div>
      </div>
      <!-- container -->
    </div>
    <!-- innerpage -->
    <!-- fatfooter Start -->
    <?php require_once('include/fatfooter.html'); ?>
    <!-- fatfooter End -->
    <!-- footer Start-->
    <?php require_once('include/footer.html'); ?>
    <!-- footer End -->
  </div>
  <?php require_once('include/js.html'); ?>
</body>

</html>