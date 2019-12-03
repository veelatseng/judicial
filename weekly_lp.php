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
    <div id="center" class="main innerpage weekly">
      <div class="container">
        <!-- 內頁新增一個classname-->
        <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
        <!-- 左欄可自行刪除 -->
        <?php require_once('include/left_block.html'); ?>
        <div class="content_block">
          <!-- breadcrumb路徑 -->
          <?php require_once('include/breadcrumb.html'); ?>
          <!-- h2節點 -->
          <h2 class="pageTitle">進階搜尋</h2>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?>
          <div class="weekly_info">
            <ul>
              <li>民國95年（第1269期）之前，僅第1、4版之PDF檔，另開視窗連結。</li>
              <li>民國95年（第1269期）之後，包含第1、4版之PDF及HTML檔，在原視窗呈現。</li>
            </ul>
          </div>
          <!-- LP Start -->
          <section class="lp">   
            <div class="weekly_search_block">
              <form action="" class="form_grid">
                <div class="form_grp">
                  <label for="">期別：</label>
                  <input type="text" class="iss">
                  <label class="tilde">~</label>
                  <input type="text" class="iss">
                </div>
                <div class="form_grp">
                  <label for="">作者名：</label>
                  <input type="text" class="name">
                </div>
                <div class="form_grp">
                  <label for="">出刊日期：</label>
                  <input type="date" class="date">
                  <label class="tilde">~</label>
                  <input type="date" class="date">
                </div>
                <div class="form_grp">
                  <input name="" id="" type="text" placeholder="請輸入關鍵字">
                </div>
                <div class="btn_grp">
                  <input name="BtnSubmit" id="BtnSubmit" type="submit" value="查詢">
                  <input name="BtnReset" id="BtnReset" type="reset" value="清除">
                </div>
              </form>  
            </div>
            <!-- 表格列表 -->
            <div class="table_list">
              <table summary="" class="table_sprite table_hover">
                <thead>
                  <tr>
                    <th>期別</th>
                    <th>出刊日期</th>
                    <th>標題</th>
                    <th>檔案下載</th>
                    <th>作者</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a><a href="#" class="pdf">pdf</a><a href="#" class="odt">odt</a><a href="#" class="zip">zip</a><a href="#" class="sevenz">7z</a></td>
                    <td data-title="作者">王小明</td>
                  </tr>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a></td>
                    <td data-title="作者">王小明</td>
                  </tr>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a></td>
                    <td data-title="作者">王小明</td>
                  </tr>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a></td>
                    <td data-title="作者">王小明</td>
                  </tr>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a></td>
                    <td data-title="作者">王小明</td>
                  </tr>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a></td>
                    <td data-title="作者">王小明</td>
                  </tr>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a></td>
                    <td data-title="作者">王小明</td>
                  </tr>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a></td>
                    <td data-title="作者">王小明</td>
                  </tr>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a></td>
                    <td data-title="作者">王小明</td>
                  </tr>
                  <tr>
                    <td data-title="期別" class="num">1957</td>
                    <td data-title="出刊日期" class="num">2019/6/21</td>
                    <td data-title="標題"><a href="">司法院院會通過商業事件審理法草案 設智財及商業法院</a></td>
                    <td data-title="檔案下載" class="center"><a href="#" class="jpg">jpg</a></td>
                    <td data-title="作者">王小明</td>
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