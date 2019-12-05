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
          <!-- Notary Start -->
          <section class="notary">
            <h2 class="notaryTitle">民間公證人名冊</h2>
            <div class="notary_search_block">
              <form action="" class="form_inline">
                <div class="form_grp">
                  <label for="">地區</label>  
                  <select name="" id="">
                    <option value="">台北</option>
                    <option value="">士林</option>
                  </select>
                </div>
                <div class="form_grp">
                  <label for="">職務範圍</label>  
                  <select name="" id="">
                    <option value="">全職</option>
                    <option value="">兼職</option>
                  </select>
                </div>
                <div class="form_grp">
                  <label for="">全文檢索</label>
                  <input name="" id="" type="text" placeholder="請輸入關鍵字">
                </div>
                <div class="btn_grp">
                  <input name="" type="submit" title="查詢" value="查詢" />
                </div>
                <a href="" class="code">功能說明</a>
              </form>  
            </div>
            <!-- 表 -->
            <div class="notarytable">
              <!-- 表上 -->
              <table>
                <tr>
                  <th colspan="5">地區  民間公證人  姓名</th>
                </tr>
                <tr>
                  <th width="10%">姓名</th>
                  <td width="40%">陳永星</td>
                  <th width="10%">證書字號</th>
                  <td width="28%">91年度民公證字第0054號</td>
                  <td width="12%" rowspan="4" class="notarypic"><img src="images/supervisor.jpg" alt=""></td>
                </tr>
                <tr>
                  <th scope="row">核定外文</th>
                  <td>英文第二級</td>
                  <th scope="row">證書日期</th>
                  <td>91.02.18</td>
                </tr>
                <tr>
                  <th scope="row">職務範圍</th>
                  <td>全職（公證及認證）</td>
                  <th scope="row">登錄完畢</th>
                  <td>91.08.08</td>
                </tr>
                <tr>
                  <th scope="row">備註</th>
                  <td colspan="4">自108年9月25日起，迄109年9月24日止，因停職不能執行職務期間，臺灣臺北地方法院指定由 喬書漢公證人兼任業務。</td>
                </tr>
                <tr>
                  <th scope="row">地區</th>
                  <td>轄區</td>
                  <th scope="row">電話</th>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <th scope="row">事務所名稱</th>
                  <td></td>
                  <th scope="row">傳真</th>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <th scope="row">負責公證人</th>
                  <td></td>
                  <th scope="row">手機</th>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <th scope="row">事務所地址</th>
                  <td ><a href=""></a></td>
                  <th scope="row">信箱</th>
                  <td colspan="2"><a href=""></a></td>
                </tr>
                <tr>
                  <th scope="row">事務所網址</th>
                  <td ><a href=""></a></td>
                  <th scope="row">其他</th>
                  <td colspan="2"></td>
                </tr>
              </table>
            </div>
          </section>
          <!-- Notary End -->
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