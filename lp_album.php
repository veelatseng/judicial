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
            <!-- 進階搜尋 -->
            <div class="advanced_search" style="">
              <form action="" class="form_inline">
                <div class="form_grp">
                  <label for="" class="form_title">搜尋</label>
                  <input name="" id="" type="text" placeholder="請輸入標題關鍵字">
                </div>
                <div class="btn_grp">
                  <input name="" type="submit" title="查詢" value="查詢" />
                </div>
              </form>  
            </div>
            <!-- category -->
            <?php require_once('include/category.html'); ?>
            <!-- 文字列表 -->
            <div class="album">
              <ul>
                <li>
                  <a href="#">
                    <div class="imgOuter">
                      <img src="https://assets.imgix.net/examples/kingfisher.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                    </div>
                    <div class="caption">
                      <time>2018-01-01</time>
                      <div class="album_title">相簿標題</div>
                      <p>文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="imgOuter">
                      <img src="https://assets.imgix.net/examples/lorie.png?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                    </div>
                    <div class="caption">
                      <time>2018-01-01</time>
                      <div class="album_title">相簿標題</div>
                      <p>文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="imgOuter">
                      <img src="https://assets.imgix.net/unsplash/transport.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                    </div>
                    <div class="caption">
                      <time>2018-01-01</time>
                      <div class="album_title">相簿標題</div>
                      <p>文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="imgOuter">
                      <img src="https://assets.imgix.net/unsplash/motorbike.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                    </div>
                    <div class="caption">
                      <time>2018-01-01</time>
                      <div class="album_title">相簿標題</div>
                      <p>文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="imgOuter">
                      <img src="https://assets.imgix.net/unsplash/coyote.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                    </div>
                    <div class="caption">
                      <time>2018-01-01</time>
                      <div class="album_title">相簿標題</div>
                      <p>文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="imgOuter">
                      <img src="https://assets.imgix.net/examples/blueberries.jpg?w=800&amp;h=480&amp;fit=crop&amp;auto=format%2Cenhance&amp;usm=20" alt="">
                    </div>
                    <div class="caption">
                      <time>2018-01-01</time>
                      <div class="album_title">相簿標題</div>
                      <p>文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊文字說明區塊</p>
                    </div>
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