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
          <h2 class="pageTitle">書狀參考範例</h2>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?>
          <!-- LP Start -->
          <section class="cp document">
            <!-- 表格列表 -->
            <div class="pdf_block">
              <a href="#"><img src="images/pdf.png"></a>
            </div>
            <table summary="" class="table_sprite">
              <tbody>
                <tr>
                  <th>書狀名稱</th>
                  <td>民事聲請法官迴避狀（一）（依法應自行迴避而不自行迴避）</td>
                </tr>
                <tr>
                  <th>相關條文</th>
                  <td>
                    <a href="https://law.moj.gov.tw/LawClass/LawSingle.aspx?pcode=B0010001&amp;flno=33" target="_blank">民事訴訟法第33條第1項第1款</a>
                  </td>
                </tr>
                <tr>
                  <th>使用說明</th>
                  <td>法官有應該主動迴避不能辦理訴訟的情形而沒有迴避，請法院換1位法官審理。</td>
                </tr>
                <tr>
                  <th>檔案下載</th>
                  <td><a href="">民事聲請法官迴避狀（一）.odt</a><br/><a href="">民事聲請法官迴避狀（一）.pdf</a></td>
                </tr>
                <tr>
                  <th>更新日期</th>
                  <td>108-07-28</td>
                </tr>
              </tbody>
            </table>
          </section>
          <!-- LP End -->
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