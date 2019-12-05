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
          <h2 class="pageTitle">特約通譯</h2>
          <!-- Interpreter Start -->
          <section class="interpreter">
            <div class="interpreter_search_block">
              <form method="post" id="QueryForm" class="form_inline">
                <div class="form_grp">
                  <label for="" class="form_title">建置法院</label>
                  <select id="">
                    <option value="請選擇">請選擇</option>
                    <option value="臺灣高等法院">臺灣高等法院</option>
                  </select>
                </div>
                <div class="form_grp">
                  <label for="" class="form_title">語言</label>
                  <select id="">
                    <option value="請選擇">請選擇</option>
                    <option value="手語">手語</option>
                  </select>
                </div>
                <div class="form_grp">
                  <label for="" class="form_title">全文檢索</label>
                  <input type="text" id="" value="" placeholder="請輸入關鍵字">
                </div>
                <div class="btn_grp">
                  <input name="" type="submit" value="查詢">
                  <input name="" type="reset" value="清除">
                </div>
                <a href="" class="code">通譯法規資訊</a>
              </form>
            </div>
            <div class="category col4">
              <ul>
                <li><a href="#">刑事</a></li>
                <li><a href="#">民事</a></li>
                <li><a href="#">家事</a></li>
                <li><a href="#">智財</a></li>
              </ul>
            </div>
            <div class="interpretertable">
              <table>
                <caption>臺灣高等法院 轄區特約通譯備選人名冊</caption>
                <thead>
                  <tr>
                    <th>阮幼菲</th>
                    <th>越南語</th>
                    <th style="width:40%">備註</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>編號</td>
                    <td>108A0077</td>
                    <td rowspan="3">已取得本國身分證</td>
                  </tr>
                  <tr>
                    <td>法院轄區</td>
                    <td>臺灣高等法院</td>
                  </tr>
                  <tr>
                    <td>聘任期間</td>
                    <td>2019-10-01 - 2021-09-30</td>
                  </tr>
                </tbody>
              </table>
              <div class="right">承辦人：陳金卿　聯絡電話：07-5523621 分機 513</div>
              <table>
                <caption>臺灣高等法院 轄區特約通譯備選人名冊</caption>
                <thead>
                  <tr>
                    <th>阮幼菲</th>
                    <th>越南語</th>
                    <th style="width:40%">備註</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>編號</td>
                    <td>108A0077</td>
                    <td rowspan="3">已取得本國身分證</td>
                  </tr>
                  <tr>
                    <td>法院轄區</td>
                    <td>臺灣高等法院</td>
                  </tr>
                  <tr>
                    <td>聘任期間</td>
                    <td>2019-10-01 - 2021-09-30</td>
                  </tr>
                </tbody>
              </table>
              <div class="right">承辦人：陳金卿　聯絡電話：07-5523621 分機 513</div>
            </div>
          </section>
          <!-- Interpreter End -->
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