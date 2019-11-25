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
          <h2 class="pageTitle">鑑定人（機關）參考名冊</h2>
          <!-- Nppraiser Start -->
          <section class="appraiser">
            <div class="appraiser_search_block">
              <form method="post" id="QueryForm" class="form_inline">
                <div class="form_grp">
                  <label for="" class="form_title">類別</label>
                  <select id="">
                    <option value="請選擇">請選擇</option>
                    <option value="刑事">刑事</option>
                    <option value="民事">民事</option>
                    <option value="家事">家事</option>
                    <option value="智財">智財</option>
                  </select>
                </div>
                <div class="form_grp">
                  <label for="" class="form_title">鑑定種類</label>
                  <select id="">
                    <option value="請選擇">請選擇</option>
                    <option value="槍枝/彈頭彈殼比對">槍枝/彈頭彈殼比對</option>
                    <option value="DNA">DNA</option>
                    <option value="種類及成分">種類及成分</option>
                    <option value="精神狀況">精神狀況</option>
                    <option value="爆裂物">爆裂物</option>
                  </select>
                </div>
                <div class="form_grp">
                  <label for="" class="form_title">全文檢索</label>
                  <input type="text" id="" value="" placeholder="請輸入關鍵字">
                </div>
                <div class="btn_grp">
                  <input name="BtnSubmit" id="BtnSubmit" type="submit" title="查詢" value="查詢">
                </div>
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
            <div class="table_list">
              <table summary="" class="table_hover">
                <thead>
                  <tr>
                    <th>項次</th>
                    <th>種類名稱</th>
                    <th>鑑定項目</th>
                    <th>鑑定人(機關)</th>
                    <th>機關聯絡地址</th>
                    <th>聯絡資訊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="num nowrap" data-title="項次">1</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">新北市立聯合醫院</td>
                    <td class="" data-title="機關聯絡地址">新北市三重區新北大道一段3號</td>
                    <td class="" data-title="聯絡資訊">02-29829111 分機3151
                    醫療事務室 蔣佳嫺</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">2</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">西園醫療社團法人西園醫院</td>
                    <td class="" data-title="機關聯絡地址">臺北市萬華區西園路二段270號</td>
                    <td class="" data-title="聯絡資訊">02-23076968 分機1219
                    身心科</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">3</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">西園醫療社團法人西園醫院</td>
                    <td class="" data-title="機關聯絡地址">臺北市萬華區西園路二段270號</td>
                    <td class="" data-title="聯絡資訊">02-23076968 分機1219
                    身心科</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">4</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">衛生福利部臺北醫院</td>
                    <td class="" data-title="機關聯絡地址">新北市新莊區思源路127號</td>
                    <td class="" data-title="聯絡資訊">02-22765566 分機1208
                    美沙冬個管師 吳鳳慈、蔡莉姍</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">5</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">新竹馬偕紀念醫院</td>
                    <td class="" data-title="機關聯絡地址">新竹市東區光復路二段690號</td>
                    <td class="" data-title="聯絡資訊">03-6889595 分機2581</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">6</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">衛生福利部臺北醫院</td>
                    <td class="" data-title="機關聯絡地址">新北市新莊區思源路127號</td>
                    <td class="" data-title="聯絡資訊">02-22765566 分機1208
                    美沙冬個管師 吳鳳慈、蔡莉姍</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">7</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">雲林基督教醫院</td>
                    <td class="" data-title="機關聯絡地址">雲林縣西螺鎮648市場南路375號</td>
                    <td class="" data-title="聯絡資訊">05-5871111 分機3221</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">8</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">雲林基督教醫院</td>
                    <td class="" data-title="機關聯絡地址">雲林縣西螺鎮648市場南路375號</td>
                    <td class="" data-title="聯絡資訊">05-5871111 分機3221</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">9</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">晴明身心診所</td>
                    <td class="" data-title="機關聯絡地址">雲林縣斗六市大同路183號</td>
                    <td class="" data-title="聯絡資訊">05-5330567 轉心理師或醫師</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">10</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">行天宮醫療志業醫療財團法人恩主公醫院</td>
                    <td class="" data-title="機關聯絡地址">新北市三峽區復興路399號</td>
                    <td class="" data-title="聯絡資訊">02-26730923
                    賴宏禹 職能治療師</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">11</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">行天宮醫療志業醫療財團法人恩主公醫院</td>
                    <td class="" data-title="機關聯絡地址">新北市三峽區復興路399號</td>
                    <td class="" data-title="聯絡資訊">02-26730923
                    賴宏禹 職能治療師</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">12</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">雲上太陽心靈診所</td>
                    <td class="" data-title="機關聯絡地址">高雄市高雄市苓雅區光華一路81號</td>
                    <td class="" data-title="聯絡資訊">07-3389169</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">13</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">雲林基督教醫院</td>
                    <td class="" data-title="機關聯絡地址">雲林縣西螺鎮648市場南路375號</td>
                    <td class="" data-title="聯絡資訊">05-5871111 分機3221</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">14</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">何正岳診所</td>
                    <td class="" data-title="機關聯絡地址">雲林縣斗六市鎮西里建成路109號</td>
                    <td class="" data-title="聯絡資訊">05-5328680</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">15</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">雲林基督教醫院</td>
                    <td class="" data-title="機關聯絡地址">雲林縣西螺鎮648市場南路375號</td>
                    <td class="" data-title="聯絡資訊">05-5871111 分機3221</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">16</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">佛教慈濟醫療財團法人大林慈濟醫院</td>
                    <td class="" data-title="機關聯絡地址">嘉義縣大林鎮民生路2號</td>
                    <td class="" data-title="聯絡資訊">05-2648000分機5272 
                    門診組-陳小姐</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">17</td>
                    <td class="num nowrap" data-title="種類名稱">監護輔助宣告</td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">佛教慈濟醫療財團法人斗六慈濟醫院</td>
                    <td class="" data-title="機關聯絡地址">雲林縣斗六市雲林路二段248號</td>
                    <td class="" data-title="聯絡資訊">05-5372000 分機128</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">18</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">佛教慈濟醫療財團法人大林慈濟醫院</td>
                    <td class="" data-title="機關聯絡地址">嘉義縣大林鎮民生路2號</td>
                    <td class="" data-title="聯絡資訊">05-2648000分機5272 
                    門診組-陳小姐</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">19</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">佛教慈濟醫療財團法人大林慈濟醫院</td>
                    <td class="" data-title="機關聯絡地址">嘉義縣大林鎮民生路2號</td>
                    <td class="" data-title="聯絡資訊">05-2648000分機5272 
                    門診組-陳小姐</td>
                  </tr>
                  <tr>
                    <td class="num nowrap" data-title="項次">20</td>
                    <td class="num nowrap" data-title="種類名稱">
                    </td>
                    <td class="num nowrap" data-title="鑑定項目">
                    </td>
                    <td class="num nowrap" data-title="鑑定人(機關)">佛教慈濟醫療財團法人大林慈濟醫院</td>
                    <td class="" data-title="機關聯絡地址">嘉義縣大林鎮民生路2號</td>
                    <td class="" data-title="聯絡資訊">05-2648000分機5272 
                    門診組-陳小姐</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
          <!-- Appraiser End -->
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