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
          <h2 class="pageTitle">轉寄友人</h2>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?>
          <!-- FP Start -->
          <section class="fp">
            <p>註:<abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>為必填(選)欄位, 不能為空白。</p>
            <form action="" class="form_grid">
              <div class="form_grp">
                <label for="" class="form_title"><abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>您的電子信箱：</label>
                <div class="form_content">
                  <input type="text" id="" value="">
                  <div class="notice_warning">這似乎不是一個正常的格式 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="form_grp">
                <label for="" class="form_title"><abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>收件者電子信箱：</label>
                <div class="form_content">
                  <input name="" id="" type="text">
                  <div class="notice_info">請輸入Email，多個帳號請用 ; 隔開。 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="form_grp">
                <label for="" class="form_title"><abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>內容：</label>
                <div class="form_content">
                  <textarea name="" id="" cols="30" rows="70"></textarea>
                </div>
              </div>
              <div class="form_grp">
                <label class="form_title"><abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>驗證碼：</label>
                <div class="form_content">
                  <img src="images/basic/captcha.gif" alt="" class="captcha">
                  <input type="text" id="" value="">
                  <div class="notice_error">您輸入的驗證碼錯誤 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="btn_grp">
                <input name="" type="reset" value="清除">
                <input name="" type="submit" value="送出">
              </div>
            </form>
          </section>
          <!-- FP End -->
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