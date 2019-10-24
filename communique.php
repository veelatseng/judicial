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
          <!-- LP Start -->
          <section class="lp">
            <!-- category -->
            <?php require_once('include/category.html'); ?>
            <!-- 文字列表 -->
            <div class="list">
              <ul>
                <li>
                  <a href="#">
                    <span class="num">1</span> 颱風逼近軍民齊心加強防颱戒備 <span class="dept">(服務照顧處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="num">2</span> 東坑微電網示範將到期縣府盼由台電承接 <span class="dept"> (就養養護處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="num">3</span> 公務員高普考10日登場縣府謹慎試務 <span class="dept"> (就學就業處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="num">4</span> 縣長﹕導引正向能量提升教育競爭力 <span class="dept">(就學就業處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="num">5</span> 颱風逼近軍民齊心加強防颱戒備 <span class="dept">(就學就業處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="num">6</span>立法院三讀通過「國軍退除役官兵輔導條例」第3條之1、第33條、第34條修正案 <span class="dept">(就學就業處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="num">7</span> 國軍退除役官兵年終慰問金發放說明 <span class="dept">(就學就業處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="num">8</span> 因應募兵制推動輔導會就業處積極為榮民（眷）與退役官士兵就學、職訓、就業輔導服務升級 <span class="dept">(就學就業處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="num">9</span> 輔導會各榮院全力投入「二O六大地震」救災 <span class="dept">(就學就業處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="num">10</span> 退除役官兵申請就學獎助學金自二月一日起開始受理 <span class="dept">(就學就業處)</span>
                    <time>2018-03-09</time>
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <!-- LP End -->
          <!-- Pagination -->
          <?php require_once('include/pagination.html'); ?>
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