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
    <div id="center" class="main innerpage weekly">
      <!-- 內頁新增一個classname-->
      <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
      <div class="container">
        <!-- 左欄可自行刪除 -->
        <?php require_once('include/left_block.html'); ?>
        <div class="content_block">
          <!-- breadcrumb路徑 -->
          <?php require_once('include/breadcrumb.html'); ?>
          <!-- h2節點 -->
          <h2 class="pageTitle">最新周刊</h2>
          <div class="weekly_number">
            <span class="no">第<em>1967</em>期</span>
            <span class="date">出刊日期：<em>2019/8/30</em></span>
          </div>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?>
          <div class="weekly_info">
            <ul>
              <li><span class="date">2019/01/27</span>2019/2/2-2019/2/10適逢春節，本刊2019/2/8停刊一次。</li>
              <li><span class="date">2019/03/03</span>系統將於2019/03/03進行歲休，造成不便請見諒。</li>
            </ul>
          </div>
          <div class="weekly_paper">
            <div class="centrespread">
              <div class="fullpage">
                <a href="images/weekly_left.jpg" data-caption="第4版"><img src="images/weekly_left.jpg" alt="第4版"></a>
                <span>第4版</span>
              </div>
              <div class="fullpage">
                <a href="images/weekly_right.jpg" data-caption="第1版"><img src="images/weekly_right.jpg" alt="第1版"></a>
                <span>第1版</span>
              </div>
            </div>
            <div class="centrespread">
              <div class="fullpage">
                <a href="images/weekly_left.jpg" data-caption="第2版"><img src="images/weekly_left.jpg" alt="第2版"></a>
                <span>第2版</span>
              </div>
              <div class="fullpage">
                <a href="images/weekly_right.jpg" data-caption="第1版"><img src="images/weekly_right.jpg" alt="第1版"></a>
                <span>第1版</span>
              </div>
            </div>
          </div>
          <div class="weekly_iss_list">
            <h3 class="block_title">本期要目</h3>
            <ul>
              <li><a href="">司改第4次半年進度報告：法官法、刑訴等法案已完成修正</a></li>
              <li><a href="">都強制執行線上聲請系統8.30全面啟用</a></li>
              <li><a href="">司改第4次半年進度報告：法官法、刑訴等法案已完成修正</a></li>
              <li><a href="">都強制執行線上聲請系統8.30全面啟用</a></li>
              <li><a href="">司改第4次半年進度報告：法官法、刑訴等法案已完成修正</a></li>
              <li><a href="">都強制執行線上聲請系統8.30全面啟用</a></li>
              <li><a href="">司改第4次半年進度報告：法官法、刑訴等法案已完成修正</a></li>
              <li><a href="">都強制執行線上聲請系統8.30全面啟用</a></li>
              <li><a href="">司改第4次半年進度報告：法官法、刑訴等法案已完成修正</a></li>
              <li><a href="">都強制執行線上聲請系統8.30全面啟用</a></li>
            </ul>
          </div>
          
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