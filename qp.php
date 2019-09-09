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
      <!-- 內頁新增一個classname-->
      <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
      <div class="container">
        <!-- 左欄可自行刪除 -->
        <?php require_once('include/left_block.html'); ?>
        <div class="content_block">
          <!-- breadcrumb路徑 -->
          <?php require_once('include/breadcrumb.html'); ?>
          <!-- h2節點 -->
          <h2 class="pageTitle">意見信箱</h2>
          <!-- QP Start -->
          <section class="qp">
            <p>註:<abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>為必填(選)欄位, 不能為空白。</p>
            <form action="" class="form_grid">
              <div class="form_grp">
                <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>您的真實姓名：</label>
                <div class="form_content">
                  <input type="text" id="" value="">
                </div>
              </div>
              <div class="form_grp">
                <label for="password" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>聯絡電話：</label>
                <div class="form_content">
                  <input name="" id="" type="text">
                </div>
              </div>
              <div class="form_grp">
                <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>您的電子信箱：</label>
                <div class="form_content">
                  <input name="" id="" type="text">
                </div>
              </div>
              <div class="form_grp">
                <fieldset>
                  <legend class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>意見類別：</legend>
                  <div class="form_content">
                    <div class="radio_grp form_inline">
                      <label>
                        <input type="radio" name="sampleRadio5" value="" checked="">類別1</label>
                        <label>
                          <input type="radio" name="sampleRadio5" value="">類別2</label>
                          <label>
                            <input type="radio" name="sampleRadio5" value="">類別3</label>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    <div class="form_grp">
                      <fieldset>
                        <legend class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>意見類別：</legend>
                        <div class="form_content">
                          <div class="check_grp form_inline">
                            <label>
                              <input type="checkbox" name="" value="" checked="">類別1</label>
                              <label>
                                <input type="checkbox" name="" value="">類別2</label>
                                <label>
                                  <input type="checkbox" name="" value="">類別3</label>
                                </div>
                              </div>
                            </fieldset>
                          </div>
                          <div class="form_grp">
                            <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>內容：</label>
                            <div class="form_content">
                              <textarea name="" id="" cols="30" rows="70"></textarea>
                            </div>
                          </div>
                          <div class="form_grp">
                            <label for="selectSample" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>意見類別：</label>
                            <div class="form_content form_inline">
                              <select id="selectSample" name="">
                                <option value="">類別1</option>
                                <option value="">類別2</option>
                                <option value="">類別3</option>
                              </select>
                            </div>
                          </div>
                          <div class="form_grp">
                            <label class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>驗證碼：</label>
                            <div class="form_content">
                              <img src="images/basic/captcha.gif" alt="" class="captcha">
                              <input type="text" id="" value="">
                            </div>
                          </div>
                          <div class="btn_grp">
                            <input name="" type="reset" value="清除">
                            <input name="Search" type="submit" value="送出">
                          </div>
                        </form>
                      </section>
                      <!-- QP End -->
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