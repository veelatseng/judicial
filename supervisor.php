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
          <h2 class="pageTitle">組織與職掌</h2>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?>
          <!-- CP Start -->
          <section class="cp supervisor">
            <div class="category col4">
              <ul>
                <li><a href="#">標籤1</a></li>
                <li><a href="#">標籤2</a></li>
                <li><a href="#">標籤3</a></li>
                <li><a href="#">標籤4</a></li>
                <li><a href="#">標籤5</a></li>
                <li><a href="#">標籤6</a></li>
                <li><a href="#">標籤7</a></li>
                <li><a href="#">標籤8</a></li>
                <li><a href="#">標籤9</a></li>
                <li><a href="#">標籤10</a></li>
              </ul>
            </div>
            <!-- pic -->
            <div class="pic">
              <picture>
                <source media="(min-width: 1200px)" srcset="images/supervisor.jpg">
                  <source media="(min-width: 992px)" srcset="images/supervisor.jpg">
                    <source media="(min-width: 576px)" srcset="images/supervisor.jpg">
                      <source media="(max-width: 575px)" srcset="images/supervisor.jpg">
                        <img data-original="images/supervisor.jpg" class="lazy" src="images/supervisor.jpg" style="display: block;">
                        <noscript><img src="images/supervisor.jpg"></noscript>
                      </picture>
                    </div>
                    <div class="left_col">
                      <p>
                        李國增 廳長<br>
                        現職：民事廳廳長
                      </p>
                      <p>
                        學歷：<br>
                        一、私立東海大學法律系畢業<br>
                        二、私立東海大學法律研究所碩士
                      </p>
                      <p>
                        經歷：<br>
                        臺灣嘉義地方法院、臺灣臺中地方法院法官、福建金門地方法院法官、臺灣臺<br>
                        北地方法院法官兼庭長。<br>
                        臺灣高等法院法官、兼任書記官長、法官兼庭長。<br>
                        中華民國法官協會理事、監事。社團法人中華民國公證學會常務監事。<br>
                        法官學院、司法官學院、文官學院講座。
                      </p>
                    </div>
                    <ul class="info">
                      <li>發布日期:2018-03-20</li>
                      <li>更新日期:2018-03-20</li>
                      <li>發布單位:移民輔導科</li>
                      <li>點閱次數:123456</li>
                    </ul>
                  </section>
                  <!-- CP End -->
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