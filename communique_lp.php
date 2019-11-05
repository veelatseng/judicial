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
    <div id="center" class="main innerpage communique">
      <div class="container">
        <!-- 內頁新增一個classname-->
        <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
        <!-- 左欄可自行刪除 -->
        <?php require_once('include/left_block.html'); ?>
        <div class="content_block">
          <!-- breadcrumb路徑 -->
          <?php require_once('include/breadcrumb.html'); ?>
          <!-- h2節點 -->
          <h2 class="pageTitle">司法院公報</h2>
          <div class="communique_info">
            108年9月份最新公報上線，歡迎多加利用。
          </div>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?>
          <!-- LP Start -->
          <section class="lp">   
            <div class="communique_search_block">
              <form action="" class="form_inline">
                <div class="form_grp">
                  <select name="" id="">
                    <option value="">108年</option>
                  </select>
                  <select name="" id="">
                    <option value="">108年</option>
                  </select>
                  <label for="">~</label>
                </div>
                <div class="form_grp">
                  <select name="" id="">
                    <option value="">108年</option>
                  </select>
                  <select name="" id="">
                    <option value="">108年</option>
                  </select>
                </div>
                <div class="form_grp">
                  <select name="" id="">
                    <option value="">請選擇類別</option>
                  </select>
                </div>
                <div class="form_grp">
                  <input name="" id="" type="text" placeholder="請輸入標題關鍵字">
                </div>
                <div class="btn_grp">
                  <input name="" type="submit" title="查詢" value="查詢" />
                </div>
              </form>  
            </div>
            <!-- 表格列表 -->
            <div class="table_list">
              <table summary="" class="table_sprite table_hover">
                <thead>
                  <tr>
                    <th>出刊年月</th>
                    <th>卷數</th>
                    <th>期數</th>
                    <th>類別</th>
                    <th>標題</th>
                    <th>檔案下載</th>
                    <th>頁次</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-title="出刊年月">108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="jpg">jpg</a><a href="#" class="sevenz">7z</a></td>
                    <td data-title="頁次">1-3</td>
                  </tr>
                  <tr>
                    <td data-title="出刊年月">108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="pdf">pdf</a></td>
                    <td data-title="頁次">1-3</td>
                  </tr>
                  <tr>
                    <td data-title="出刊年月" class="nowrap">108年1月108年1月108年1月108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="pdf">pdf</a></td>
                    <td data-title="頁次">1-3</td>
                  </tr>
                  <tr>
                    <td data-title="出刊年月">108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="pdf">pdf</a></td>
                    <td data-title="頁次">1-3</td>
                  </tr>
                  <tr>
                    <td data-title="出刊年月">108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="pdf">pdf</a></td>
                    <td data-title="頁次">1-3</td>
                  </tr>
                  <tr>
                    <td data-title="出刊年月">108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="pdf">pdf</a></td>
                    <td data-title="頁次">1-3</td>
                  </tr>
                  <tr>
                    <td data-title="出刊年月">108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="pdf">pdf</a></td>
                    <td data-title="頁次">1-3</td>
                  </tr>
                  <tr>
                    <td data-title="出刊年月">108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="pdf">pdf</a></td>
                    <td data-title="頁次">1-3</td>
                  </tr>
                  <tr>
                    <td data-title="出刊年月">108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="pdf">pdf</a></td>
                    <td data-title="頁次">1-3</td>
                  </tr>
                  <tr>
                    <td data-title="出刊年月">108年1月</td>
                    <td data-title="卷數" class="num">61</td>
                    <td data-title="期數" class="num">01</td>
                    <td data-title="類別" class="num">解釋</td>
                    <td data-title="期數">司法院釋字第771號解釋</td>
                    <td data-title="檔案下載"><a href="#" class="pdf">pdf</a></td>
                    <td data-title="頁次">1-3</td>
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