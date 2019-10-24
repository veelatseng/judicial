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
        <!-- h2節點 -->
        <div class="topTitle segment">
          <h2>當事人</h2>
        </div>
        <div class="content_block">
          <!-- breadcrumb路徑 -->
          <?php require_once('include/breadcrumb.html'); ?>
          <!-- PARTY Start -->
          <section class="party">
            <div class="process">
              <ul>
                <li>
                  <div class="step_title">
                    <span>Step 1</span>
                    起訴起訴起訴起訴
                  </div>
                  <ul>
                    <li>法學資料檢索檢索檢索</li>
                    <li>裁判書查詢</li>
                    <li>量刑資訊系統</li>
                    <li>庭期表查詢庭期表查詢</li>
                    <li>訴訟須知</li>
                    <li>書狀範例</li>
                    <li>訴訟須知</li>
                    <li>書狀範例</li>
                  </ul>
                </li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </section>
          <!-- PARTY End -->
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