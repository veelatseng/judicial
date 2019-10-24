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
          <?php require_once('include/function_panel_cp.html'); ?>
          <!-- CP Start -->
          <section class="cp">
            <!-- yncSlider -->
            <div class="Syncing_slider">
              <h3 class="block_title">相片集錦</h3>
              <!--大圖slider-for-->
              <div class="Slider-for">
                <div>
                  <div class="img-container">
                    <img src="https://assets.imgix.net/examples/kingfisher.jpg?w=500&h=480&fit=crop&auto=format%2Cenhance&usm=20">
                  </div>
                  <p>第一張圖說</p>
                </div>
                <div>
                  <div class="img-container">
                    <img src="https://assets.imgix.net/examples/puffins.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20">
                  </div>
                  <p>第二張圖說</p>
                </div>
                <div>
                  <div class="img-container">
                    <img src="https://assets.imgix.net/examples/womanlandscape.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20">
                  </div>
                  <p>第三張圖說</p>
                </div>
                <div>
                  <div class="img-container">
                    <img src="https://assets.imgix.net/unsplash/paperlamp.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20">
                  </div>
                  <p>第四張圖說</p>
                </div>
              </div>
              <!-- slider-for end-->
              <div class="controls"></div>
              <!--小圖slider-nav-->
              <div class="Slider-nav">
                <div>
                  <div class="img-container">
                    <img src="https://assets.imgix.net/examples/kingfisher.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20">
                  </div>
                  <p>第一張圖說</p>
                </div>
                <div>
                  <div class="img-container">
                    <img src="https://assets.imgix.net/examples/puffins.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20">
                  </div>
                  <p>第二張圖說</p>
                </div>
                <div>
                  <div class="img-container">
                    <img src="https://assets.imgix.net/examples/womanlandscape.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20">
                  </div>
                  <p>第三張圖說</p>
                </div>
                <div>
                  <div class="img-container">
                    <img src="https://assets.imgix.net/unsplash/paperlamp.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20">
                  </div>
                  <p>第四張圖說</p>
                </div>
              </div>
              <!-- slider-nav end-->
            </div>
            <!-- cp_slider+slick_lightbox -->
            <div class="lightbox_slider">
              <h3 class="block_title">燈箱照片</h3>
              <div class="cp_slider">
                <div class="img-container">
                  <a href="https://assets.imgix.net/examples/kingfisher.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第一張圖說">
                    <img src="https://assets.imgix.net/examples/kingfisher.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
                    <span class="caption">第1張圖說</span>
                  </a>
                </div>
                <div class="img-container">
                  <a href="https://assets.imgix.net/examples/puffins.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第二張圖說">
                    <img src="https://assets.imgix.net/examples/puffins.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
                    <span class="caption">第2張圖說</span>
                  </a>
                </div>
                <div class="img-container">
                  <a href="https://assets.imgix.net/unsplash/transport.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第三張圖說">
                    <img src="https://assets.imgix.net/unsplash/transport.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
                    <span class="caption">第3張圖說</span>
                  </a>
                </div>
                <div class="img-container">
                  <a href="https://assets.imgix.net/unsplash/bridge.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" data-caption="第四張圖說">
                    <img src="https://assets.imgix.net/unsplash/bridge.jpg?w=800&h=480&fit=crop&auto=format%2Cenhance&usm=20" alt="">
                    <span class="caption">第4張圖說</span>
                  </a>
                </div>
                <div class="img-container">
                  <a href="images/demo/12.jpg" data-caption="第5張圖說">
                    <img src="images/demo/12.jpg" alt="">
                    <span class="caption">第5張圖說</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- weblink 外部連結 -->
            <div class="web_link">
              <h3 class="block_title">外部連結</h3>
              <ol>
                <li><a href="javscript:;">外部連結1</a></li>
                <li><a href="javscript:;">外部連結2</a></li>
                <li><a href="javscript:;">外部連結3</a></li>
                <li><a href="javscript:;">外部連結4</a></li>
                <li><a href="javscript:;">外部連結5</a></li>
              </ol>
            </div>
            <!-- file download 檔案下載 -->
            <div class="file_download">
              <h3 class="block_title">檔案下載</h3>
              <ul>
                <li> <span>惡意主機IP檢測惡意主機IP檢測惡意主機IP檢測惡意主機IP檢測惡意主機IP檢測</span><a href="xxxx.doc" class="doc">doc</a>
                  <a href="xxxx.odf" class="odf">odf</a>
                  <a href="http://www.google.com.tw" class="other">檔案下載(非副檔名做結尾)</a>
                  <span class="update">15kb</span>
                  <span class="file_view">下載次數：255次</span>
                </li>
                <li> <span>臺美「全球入境計畫」的正式啟用，符合資格</span><a href="xxxx.xls" class="xls">xls</a>
                  <span class="update">15kb</span>
                  <span class="file_view">下載次數：255次</span>
                </li>
                <li> <span>臺美「全球入境計畫」的正式啟用，符合資格</span>
                  <a href="xxxx.pptx" class="ppt">ppt</a>
                  <a href="xxxx.jpg" class="jpg">jpg</a>
                  <span class="update">15kb</span>
                  <span class="file_view">下載次數：255次</span>
                </li>
                <li> <span>臺美「全球入境計畫」的正式啟用，符合資格</span><a href="xxxx.pdf" class="pdf">pdf</a>
                  <span class="update">15kb</span>
                  <span class="file_view">下載次數：255次</span>
                </li>
              </ul>
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