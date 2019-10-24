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
            <!-- 表格列表 -->
            <div class="table_notitle">
              <table summary="" class="table_sprite table_hover">
                <tbody>
                  <tr>
                    <td data-title="序號" class="num">01</td>
                    <td data-title="標題"><a href="#">通勤搭車看預報 環保集點10倍送</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                  <tr>
                    <td data-title="序號" class="num">02</td>
                    <td data-title="標題"><a href="#">春節不無聊上網學習環境教育</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                  <tr>
                    <td data-title="序號" class="num">03</td>
                    <td data-title="標題"><a href="#">洗錢防制，國家向前</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                  <tr>
                    <td data-title="序號" class="num">04</td>
                    <td data-title="標題"><a href="#">春節送禮認標章 環保減碳又健康</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                  <tr>
                    <td data-title="序號" class="num">05</td>
                    <td data-title="標題"><a href="#">環保替代役歲末新春送溫暖</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                  <tr>
                    <td data-title="序號" class="num">06</td>
                    <td data-title="標題"><a href="#">向非法化學物質說不 安全蛋品 吃得健康</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                  <tr>
                    <td data-title="序號" class="num">07</td>
                    <td data-title="標題"><a href="#">春節期間廚餘回收真惜福 狗年來富又來福</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                  <tr>
                    <td data-title="序號" class="num">08</td>
                    <td data-title="標題"><a href="#">春節長假看Chem Life，增長知識又可抽獎</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                  <tr>
                    <td data-title="序號" class="num">09</td>
                    <td data-title="標題"><a href="#">金狗年春節旅遊好去處，環保署報你知</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                  <tr>
                    <td data-title="序號" class="num">10</td>
                    <td data-title="標題"><a href="#">清新空氣保健康 神明歡喜過好年</a></td>
                    <td data-title="日期" class="date">2018/01/01</td>
                  </tr>
                </tbody>
              </table>
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