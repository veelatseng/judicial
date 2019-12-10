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
          <h2 class="pageTitle">節點標題</h2>
          <!-- function_panel -->
          <?php require_once('include/function_panel.html'); ?> 
          <!-- LP Start -->
          <section class="lp">

            <div class="table_list_search_block">
              <div class="search_btn">
                <a href="">範例查詢</a>
              </div>
              <!-- 公示送達 -->
              <div class="table_list_search">
                <form method="post" class="form_grid" action="lp-139-1.html">
                  <div class="form_grp">
                    <label for="" class="form_title">法院別</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入法院別">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告日期</label>
                    <div class="form_content date">
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                      <label for="">~</label>  
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">案號</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入案號">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">應受送達人(姓名)</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入姓名">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">國內外</label>
                    <div class="form_content">
                      <select name="" id="">
                        <option value="">全部</option>
                      </select>
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">文書種類</label>
                    <div class="form_content">
                      <select name="" id="">
                        <option value="">全部</option>
                      </select>
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">案件類別</label>
                    <div class="form_content">
                      <select name="" id="">
                        <option value="">全部</option>
                      </select>
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告內容</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入文書內容">
                    </div>
                  </div>
                  <div class="btn_grp">
                    <input name="BtnSubmit" id="BtnSubmit" type="submit" value="查詢">
                    <input name="BtnReset" id="BtnReset" type="reset" value="清除">
                  </div>
                </form>
              </div>
              <!-- 刑事保證金 -->
              <div class="table_list_search">
                <form method="post" class="form_grid" action="">
                  <div class="form_grp">
                    <label for="" class="form_title">法院別</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入法院別">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">應受發還人(姓名)</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入姓名">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">案號</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入案號">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告內容</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入公告內容">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">被告</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入被告">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告日期</label>
                    <div class="form_content date">
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                      <label for="">~</label>  
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                    </div>
                  </div>
                  <div class="btn_grp">
                    <input name="BtnSubmit" id="BtnSubmit" type="submit" value="查詢">
                    <input name="BtnReset" id="BtnReset" type="reset" value="清除">
                  </div>
                </form>
              </div>
              <!-- 公告曉示 不作為訴訟公告 -->
              <div class="table_list_search">
                <form method="post" class="form_grid" action="">
                  <input type="hidden" name="Action" value="Qeury">
                  <input type="hidden" name="lstoken" id="lstoken" value="4109415329">
                  <div class="form_grp">
                    <label for="" class="form_title">法院別</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入法院別">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">原告</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入原告字">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">案號</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入案號">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">被告</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入被告">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">案由</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入案由">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告日期</label>
                    <div class="form_content date">
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                      <label for="">~</label>  
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告內容</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入公告內容">
                    </div>
                  </div>
                  <div class="btn_grp">
                    <input name="BtnSubmit" id="BtnSubmit" type="submit" value="查詢">
                    <input name="BtnReset" id="BtnReset" type="reset" value="清除">
                  </div>
                </form>
              </div>
              <!-- 提存公告 -->
              <div class="table_list_search">
                <form method="post" class="form_grid" action="">
                  <div class="form_grp">
                    <label for="" class="form_title">法院別</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入法院別">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">聲請人</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入聲請人">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">提存書/通知書案號</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入案號">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">發文字號</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入發文字號">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">案由</label>
                    <div class="form_content">
                      <select name="" id="">
                        <option value="">全部</option>
                      </select>
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">發文日期</label>
                    <div class="form_content date">
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                      <label for="">~</label>  
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告內容</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入公告內容">
                    </div>
                  </div>
                  <div class="btn_grp">
                    <input name="BtnSubmit" id="BtnSubmit" type="submit" value="查詢">
                    <input name="BtnReset" id="BtnReset" type="reset" value="清除">
                  </div>
                </form>
              </div>
              <!-- 公示催告 -->
              <div class="table_list_search">
                <form method="post" class="form_grid" action="">
                  <div class="form_grp">
                    <label for="" class="form_title">法院別</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入法院別">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">聲請人</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入聲請人">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">案號</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入案號">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告日期</label>
                    <div class="form_content date">
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                      <label for="">~</label>  
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告內容</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入公告內容">
                    </div>
                  </div>
                  <div class="btn_grp">
                    <input name="BtnSubmit" id="BtnSubmit" type="submit" value="查詢">
                    <input name="BtnReset" id="BtnReset" type="reset" value="清除">
                  </div>
                </form>
              </div>
              <!-- 法人登記公告 -->
              <div class="table_list_search">
                <form method="post" class="form_grid" action="">
                  <div class="form_grp">
                    <label for="" class="form_title">法院別</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入法院別">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">法人名稱</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入法人名稱">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">登記案號</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入登記案號">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">登記日期</label>
                    <div class="form_content date">
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                      <label for="">~</label>  
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">登記號數</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入公告內容">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告內容</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入公告內容">
                    </div>
                  </div>
                  <div class="btn_grp">
                    <input name="BtnSubmit" id="BtnSubmit" type="submit" value="查詢">
                    <input name="BtnReset" id="BtnReset" type="reset" value="清除">
                  </div>
                </form>
              </div>
              <!-- 夫妻財產登記公告 -->
              <div class="table_list_search">
                <form method="post" class="form_grid" action="">
                  <div class="form_grp">
                    <label for="" class="form_title">法院別</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入法院別">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">姓名</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入姓名">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">登記案號</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入登記案號">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">登記日期</label>
                    <div class="form_content date">
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                      <label for="">~</label>  
                      <input type="date" id="" name="" value="" placeholder="選擇日期">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">登記號數</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入公告內容">
                    </div>
                  </div>
                  <div class="form_grp">
                    <label for="" class="form_title">公告內容</label>
                    <div class="form_content">
                      <input type="text" id="" name="" value="" placeholder="請輸入公告內容">
                    </div>
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
                  <caption>備註：家事公示催告，請至網站查詢 <a href="">https://law.judicial.gov.tw/FJUD/default.aspx</a></caption>
                  <thead>
                    <tr>
                      <th>項次</th>
                      <th>法院別</th>
                      <th>案號</th>
                      <th>應受送達人(姓名)</th>
                      <th>案件類別</th>
                      <th>國內外</th>
                      <th>文書種類</th>
                      <th>公告日期</th>
                      <th>文書內容</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td  data-title="項次" class="num">1</td>
                      <td data-title="法院別">臺灣臺北地方法院</td>
                      <td data-title="案號">108年司執丑字57398號</td>
                      <td data-title="應受送達人" class="center"><a href="/tw/cp-139-90735-b8e6a-1.html" title="林博裕">林博裕</a></td>
                      <td data-title="案件類別" class="center">民事</td>
                      <td data-title="國內外" class="center">國內</td>
                      <td data-title="文書種類" class="center">裁定</td>
                      <td data-title="公告日期" class="num">108-11-26</td>
                      <td data-title="文書內容" class="center"><a href="" class="searchcontent">文書內容</a></td>
                    </tr>
                    <tr>
                      <td  data-title="項次" class="num">1</td>
                      <td data-title="法院別">臺灣臺北地方法院</td>
                      <td data-title="案號">108年司執丑字57398號</td>
                      <td data-title="應受送達人" class="center"><a href="/tw/cp-139-90735-b8e6a-1.html" title="林博裕">林博裕</a></td>
                      <td data-title="案件類別" class="center">民事</td>
                      <td data-title="國內外" class="center">國內</td>
                      <td data-title="文書種類" class="center">裁定</td>
                      <td data-title="公告日期" class="num">108-11-26</td>
                      <td data-title="文書內容" class="center"><a href="" class="searchcontent">文書內容</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
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