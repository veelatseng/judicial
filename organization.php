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
        <div class="content_block">
          <!-- breadcrumb路徑 -->
          <?php require_once('include/breadcrumb.html'); ?>
          <!-- h2節點 -->
          <h2 class="pageTitle">組織與職掌</h2>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?>
          <!-- CP Start -->
          <section class="cp organization">
            <div class="category col5">
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
                <source media="(min-width: 1200px)" srcset="images/organization.jpg">
                  <source media="(min-width: 992px)" srcset="images/organization.jpg">
                    <source media="(min-width: 576px)" srcset="images/organization.jpg">
                      <source media="(max-width: 575px)" srcset="images/organization.jpg">
                        <img data-original="images/organization.jpg" class="lazy" src="images/organization.jpg" style="display: block;">
                        <noscript><img src="images/organization.jpg"></noscript>
                      </picture>
                    </div>
                    <div class="left_col">
                      <h3>業務職掌</h3>
                      <p>
                        一、司法資訊體系之整體規劃事項。<br>
                        二、司法資訊軟體之研究、開發事項。<br>
                        三、所屬機關資訊系統設置之諮詢、指導事項。<br>
                        四、司法資訊設備相互支援之輔導、協調事項。<br>
                        五、司法資訊業務有關人員之訓練事項。<br>
                        六、司法資訊之蒐集、督導、考核、管理及維護事項。<br>
                        共分三科，各科之業務職掌分述如下：<br>
                        第一科<br>
                        負責統籌規劃民事、刑事、簡易庭及前案系統等審判系統。<br>
                        第二科<br>
                        負責統籌規劃資訊安全政策、法學資料檢索系統、網站服務及網路維運等事項。<br>
                        第三科<br>
                        負責統籌規劃各類行政系統、辦理教育訓練等事項。<br>
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