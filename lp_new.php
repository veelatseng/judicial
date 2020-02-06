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
          <!-- QA Start -->
          <section class="meeting">
            <!-- h2節點 -->
            <h2 class="pageTitle">院會重要決議</h2>
            <!-- function_panel -->
            <?php require_once('include/function_panel.html'); ?>
            <div class="meeting_search_block">
              <form action="" class="form_inline">
                <div class="form_grp">
                  <select name="" id="">
                    <option value="">108年度</option>
                    <option value="">107年度</option>
                  </select>
                </div>
                <div class="form_grp">
                  <select name="" id="">
                    <option value="">1月</option>
                    <option value="">12月</option>
                  </select>
                </div>
                <div class="form_grp">
                  <input name="" id="" type="text" placeholder="請輸入關鍵字">
                </div>
                <div class="btn_grp">
                  <input name="" type="submit" title="查詢" value="查詢" />
                </div>
              </form>  
            </div>
            <!-- 文字列表 -->
            <div class="meeting_list">
              <ul>
                <li>
                  <div class="question">
                    <a href="">

                      <span class="text">如何購買法拍屋</span>
                    </a>
                  </div>
                  <div class="answer">
                    <div class="share">
                      <ul>
                        <li><a href="#"><img src="images/basic/icon_facebook.png" alt="facebook"></a></li>
                        <li><a href="#"><img src="images/basic/icon_twitter.png" alt="twitter"></a></li>
                        <li><a href="#"><img src="images/basic/icon_line.png" alt="line"></a></li>
                        <li><a href="#"><img src="images/basic/icon_plurk.png" alt="plurk"></a></li>
                      </ul>
                    </div>
                    <div class="text">
                      <h3>查看法拍屋之公告</h3>
                      <ol>
                        <li>公告方法：
                          <ol>
                            <li>揭示於執行法院及不動產所在地。</li>
                            <li>不動產所在地之鄉鎮市（區）公所。</li>
                            <li>新聞紙。</li>
                          </ol>
                        </li>
                        <li>保證金金額：投標時應依據公告所載繳納保證金。 </li>
                        <li>投標日時及場所：依不動產拍賣公告所載。請準時到場投標，逾時不受理。通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。 </li>
                        <li>如何填寫投標書：
                          <ol>
                            <li>投標人可向各地方法院洽買投標書暨保證金封存袋。</li>
                            <li>請填寫法院名稱，可依拍賣公告所載案號、標別、股別填寫。</li>
                            <li>請填寫投標人姓名、住址（請填寫與戶籍地相同之住址，如另有聯絡住址請另外載明）、聯絡電話、出生年月日、身分證統一編號等。如委任代理人到場者，代理人應提出具有民事訴訟法第70條第1項但書及第2項規定特別代理權之委任狀，附於投標書，一併投入標匭內，並應提出國民身分證正本或影本，或其他相類之身分證明文件正本或影本。</li>
                            <li>願買之不動產，須按照拍賣公告之記載填寫。不動產為數宗者，應分別記明，並將各宗願出之價額及合計總價額詳細載明。</li>
                            <li>投標人應將投標書暨保證金封存袋之內容填載明確，且記明執行案號。</li>
                            <li>保證金應以經金融主管機關核准之金融業者為發票人之支票、匯票或本票，放進保證金封存袋內，不必向法院出納室繳納。</li>
                            <li>投標人將保證金放進保證金封存袋後，應將袋口密封，並在封口處簽章後，連同投標書投入標匭，通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。得標者，即以保證金抵充價款；未得標者，由投標人當場領回，通訊投標之投標人未到場者，其保證金由法院會計室入帳處理，並通知投標人依規定領取之。保證金票據受款人為法院者，未得標時，得由法院在支票背面加蓋「ＯＯ地方法院發還落標保證金專用章」，或請落標人逕持該票據至發票銀行註銷受款人。</li>
                          </ol>
                        </li>
                      </ol>
                      <p>投標人將保證金放進保證金封存袋後，應將袋口密封，並在封口處簽章後，連同投標書投入標匭，通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。得標者，即以保證金抵充價款；未得標者，由投標人當場領回，通訊投標之投標人未到場者，其保證金由法院會計室入帳處理，並通知投標人依規定領取之。保證金票據受款人為法院者，未得標時，得由法院在支票背面加蓋「ＯＯ地方法院發還落標保證金專用章」，或請落標人逕持該票據至發票銀行註銷受款人。</p> 
                      <h4>查看法拍屋之公告</h4>
                      <h5>查看法拍屋之公告</h5>
                      <h6>查看法拍屋之公告</h6>
                    </div>
                    <div class="dep"> [ 民事廳  2016/10/31更新 ]</div>
                  </div>  
                </li>
                <li>
                  <div class="question">
                    <a href="">

                      <span class="text">如何購買法拍屋 <img src="images/basic/icon_new.png" alt="new"></span>
                    </a>
                  </div>
                  <div class="answer">
                    <div class="share">
                      <ul>
                        <li><a href="#"><img src="images/basic/icon_facebook.png" alt="facebook"></a></li>
                        <li><a href="#"><img src="images/basic/icon_twitter.png" alt="twitter"></a></li>
                        <li><a href="#"><img src="images/basic/icon_line.png" alt="line"></a></li>
                        <li><a href="#"><img src="images/basic/icon_plurk.png" alt="plurk"></a></li>
                      </ul>
                    </div>
                    <div class="text">
                      <h3>查看法拍屋之公告</h3>
                      <ol>
                        <li>公告方法：
                          <ol>
                            <li>揭示於執行法院及不動產所在地。</li>
                            <li>不動產所在地之鄉鎮市（區）公所。</li>
                            <li>新聞紙。</li>
                          </ol>
                        </li>
                        <li>保證金金額：投標時應依據公告所載繳納保證金。 </li>
                        <li>投標日時及場所：依不動產拍賣公告所載。請準時到場投標，逾時不受理。通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。 </li>
                        <li>如何填寫投標書：
                          <ol>
                            <li>投標人可向各地方法院洽買投標書暨保證金封存袋。</li>
                            <li>請填寫法院名稱，可依拍賣公告所載案號、標別、股別填寫。</li>
                            <li>請填寫投標人姓名、住址（請填寫與戶籍地相同之住址，如另有聯絡住址請另外載明）、聯絡電話、出生年月日、身分證統一編號等。如委任代理人到場者，代理人應提出具有民事訴訟法第70條第1項但書及第2項規定特別代理權之委任狀，附於投標書，一併投入標匭內，並應提出國民身分證正本或影本，或其他相類之身分證明文件正本或影本。</li>
                            <li>願買之不動產，須按照拍賣公告之記載填寫。不動產為數宗者，應分別記明，並將各宗願出之價額及合計總價額詳細載明。</li>
                            <li>投標人應將投標書暨保證金封存袋之內容填載明確，且記明執行案號。</li>
                            <li>保證金應以經金融主管機關核准之金融業者為發票人之支票、匯票或本票，放進保證金封存袋內，不必向法院出納室繳納。</li>
                            <li>投標人將保證金放進保證金封存袋後，應將袋口密封，並在封口處簽章後，連同投標書投入標匭，通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。得標者，即以保證金抵充價款；未得標者，由投標人當場領回，通訊投標之投標人未到場者，其保證金由法院會計室入帳處理，並通知投標人依規定領取之。保證金票據受款人為法院者，未得標時，得由法院在支票背面加蓋「ＯＯ地方法院發還落標保證金專用章」，或請落標人逕持該票據至發票銀行註銷受款人。</li>
                          </ol>
                        </li>
                      </ol>
                      <p>投標人將保證金放進保證金封存袋後，應將袋口密封，並在封口處簽章後，連同投標書投入標匭，通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。得標者，即以保證金抵充價款；未得標者，由投標人當場領回，通訊投標之投標人未到場者，其保證金由法院會計室入帳處理，並通知投標人依規定領取之。保證金票據受款人為法院者，未得標時，得由法院在支票背面加蓋「ＯＯ地方法院發還落標保證金專用章」，或請落標人逕持該票據至發票銀行註銷受款人。</p> 
                      <h4>查看法拍屋之公告</h4>
                      <h5>查看法拍屋之公告</h5>
                      <h6>查看法拍屋之公告</h6>
                    </div>
                    <div class="dep"> [ 民事廳  2016/10/31更新 ]</div>
                  </div>  
                </li>
                <li>
                  <div class="question">
                    <a href="">
                      <span class="text">如何購買法拍屋</span>
                    </a>
                  </div>
                  <div class="answer">
                    <div class="share">
                      <ul>
                        <li><a href="#"><img src="images/basic/icon_facebook.png" alt="facebook"></a></li>
                        <li><a href="#"><img src="images/basic/icon_twitter.png" alt="twitter"></a></li>
                        <li><a href="#"><img src="images/basic/icon_line.png" alt="line"></a></li>
                        <li><a href="#"><img src="images/basic/icon_plurk.png" alt="plurk"></a></li>
                      </ul>
                    </div>
                    <div class="text">
                      <h3>查看法拍屋之公告</h3>
                      <ol>
                        <li>公告方法：
                          <ol>
                            <li>揭示於執行法院及不動產所在地。</li>
                            <li>不動產所在地之鄉鎮市（區）公所。</li>
                            <li>新聞紙。</li>
                          </ol>
                        </li>
                        <li>保證金金額：投標時應依據公告所載繳納保證金。 </li>
                        <li>投標日時及場所：依不動產拍賣公告所載。請準時到場投標，逾時不受理。通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。 </li>
                        <li>如何填寫投標書：
                          <ol>
                            <li>投標人可向各地方法院洽買投標書暨保證金封存袋。</li>
                            <li>請填寫法院名稱，可依拍賣公告所載案號、標別、股別填寫。</li>
                            <li>請填寫投標人姓名、住址（請填寫與戶籍地相同之住址，如另有聯絡住址請另外載明）、聯絡電話、出生年月日、身分證統一編號等。如委任代理人到場者，代理人應提出具有民事訴訟法第70條第1項但書及第2項規定特別代理權之委任狀，附於投標書，一併投入標匭內，並應提出國民身分證正本或影本，或其他相類之身分證明文件正本或影本。</li>
                            <li>願買之不動產，須按照拍賣公告之記載填寫。不動產為數宗者，應分別記明，並將各宗願出之價額及合計總價額詳細載明。</li>
                            <li>投標人應將投標書暨保證金封存袋之內容填載明確，且記明執行案號。</li>
                            <li>保證金應以經金融主管機關核准之金融業者為發票人之支票、匯票或本票，放進保證金封存袋內，不必向法院出納室繳納。</li>
                            <li>投標人將保證金放進保證金封存袋後，應將袋口密封，並在封口處簽章後，連同投標書投入標匭，通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。得標者，即以保證金抵充價款；未得標者，由投標人當場領回，通訊投標之投標人未到場者，其保證金由法院會計室入帳處理，並通知投標人依規定領取之。保證金票據受款人為法院者，未得標時，得由法院在支票背面加蓋「ＯＯ地方法院發還落標保證金專用章」，或請落標人逕持該票據至發票銀行註銷受款人。</li>
                          </ol>
                        </li>
                      </ol>
                      <p>投標人將保證金放進保證金封存袋後，應將袋口密封，並在封口處簽章後，連同投標書投入標匭，通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。得標者，即以保證金抵充價款；未得標者，由投標人當場領回，通訊投標之投標人未到場者，其保證金由法院會計室入帳處理，並通知投標人依規定領取之。保證金票據受款人為法院者，未得標時，得由法院在支票背面加蓋「ＯＯ地方法院發還落標保證金專用章」，或請落標人逕持該票據至發票銀行註銷受款人。</p> 
                      <h4>查看法拍屋之公告</h4>
                      <h5>查看法拍屋之公告</h5>
                      <h6>查看法拍屋之公告</h6>
                    </div>
                    <div class="dep"> [ 民事廳  2016/10/31更新 ]</div>
                  </div>  
                </li>
                <li>
                  <div class="question">
                    <a href="">
                      <span class="num">108-10-22</span>
                      <span class="text">如何購買法拍屋</span>
                    </a>
                  </div>
                  <div class="answer">
                    <div class="share">
                      <ul>
                        <li><a href="#"><img src="images/basic/icon_facebook.png" alt="facebook"></a></li>
                        <li><a href="#"><img src="images/basic/icon_twitter.png" alt="twitter"></a></li>
                        <li><a href="#"><img src="images/basic/icon_line.png" alt="line"></a></li>
                        <li><a href="#"><img src="images/basic/icon_plurk.png" alt="plurk"></a></li>
                      </ul>
                    </div>
                    <div class="text">
                      <h3>查看法拍屋之公告</h3>
                      <ol>
                        <li>公告方法：
                          <ol>
                            <li>揭示於執行法院及不動產所在地。</li>
                            <li>不動產所在地之鄉鎮市（區）公所。</li>
                            <li>新聞紙。</li>
                          </ol>
                        </li>
                        <li>保證金金額：投標時應依據公告所載繳納保證金。 </li>
                        <li>投標日時及場所：依不動產拍賣公告所載。請準時到場投標，逾時不受理。通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。 </li>
                        <li>如何填寫投標書：
                          <ol>
                            <li>投標人可向各地方法院洽買投標書暨保證金封存袋。</li>
                            <li>請填寫法院名稱，可依拍賣公告所載案號、標別、股別填寫。</li>
                            <li>請填寫投標人姓名、住址（請填寫與戶籍地相同之住址，如另有聯絡住址請另外載明）、聯絡電話、出生年月日、身分證統一編號等。如委任代理人到場者，代理人應提出具有民事訴訟法第70條第1項但書及第2項規定特別代理權之委任狀，附於投標書，一併投入標匭內，並應提出國民身分證正本或影本，或其他相類之身分證明文件正本或影本。</li>
                            <li>願買之不動產，須按照拍賣公告之記載填寫。不動產為數宗者，應分別記明，並將各宗願出之價額及合計總價額詳細載明。</li>
                            <li>投標人應將投標書暨保證金封存袋之內容填載明確，且記明執行案號。</li>
                            <li>保證金應以經金融主管機關核准之金融業者為發票人之支票、匯票或本票，放進保證金封存袋內，不必向法院出納室繳納。</li>
                            <li>投標人將保證金放進保證金封存袋後，應將袋口密封，並在封口處簽章後，連同投標書投入標匭，通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。得標者，即以保證金抵充價款；未得標者，由投標人當場領回，通訊投標之投標人未到場者，其保證金由法院會計室入帳處理，並通知投標人依規定領取之。保證金票據受款人為法院者，未得標時，得由法院在支票背面加蓋「ＯＯ地方法院發還落標保證金專用章」，或請落標人逕持該票據至發票銀行註銷受款人。</li>
                          </ol>
                        </li>
                      </ol>
                      <p>投標人將保證金放進保證金封存袋後，應將袋口密封，並在封口處簽章後，連同投標書投入標匭，通訊投標之投標人應於拍賣公告所載之最後寄達之日、時，寄達指定之地址或郵局信箱。得標者，即以保證金抵充價款；未得標者，由投標人當場領回，通訊投標之投標人未到場者，其保證金由法院會計室入帳處理，並通知投標人依規定領取之。保證金票據受款人為法院者，未得標時，得由法院在支票背面加蓋「ＯＯ地方法院發還落標保證金專用章」，或請落標人逕持該票據至發票銀行註銷受款人。</p> 
                      <h4>查看法拍屋之公告</h4>
                      <h5>查看法拍屋之公告</h5>
                      <h6>查看法拍屋之公告</h6>
                    </div>
                    <div class="dep"> [ 民事廳  2016/10/31更新 ]</div>
                  </div>  
                </li>
              </ul>
            </div>
          </section>
          <!-- QA End -->
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