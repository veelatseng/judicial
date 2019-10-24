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
        <!-- h2節點 -->
        <div class="topTitle">
          <h2>司法改革方案&進度</h2>
          <ul class="link">
            <li><a href="">司法改革方案及進度</a></li>
            <li><a href="">司法院與行政院司改進度追蹤平台</a></li>
          </ul>
        </div>
        <div class="content_block">
          <!-- breadcrumb路徑 -->
          <?php require_once('include/breadcrumb.html'); ?>

          <!-- reform Start -->
          <section class="reform">
            <div class="reform_data">
              <h3 class="reform_title">司法院已完成與推動中法令與措施</h3>
              <div class="reform_date">資料統計至108年6月30日</div>
              <ul>
                <li>
                  <a href="">
                    <span class="status pass">已修正通過</span>
                    <span class="type">法律類</span>
                    <span class="no">17</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="status pass">已修正通過</span>
                    <span class="type">行政命令類</span>
                    <span class="no">6</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="status put">已實施</span>
                    <span class="type">行政措施類</span>
                    <span class="no">20</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="status propose">已提出</span>
                    <span class="type">法律草案類</span>
                    <span class="no">35</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="status propose">已提出</span>
                    <span class="type">行政命令草案類</span>
                    <span class="no">2</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="status planning">規劃中</span>
                    <span class="type">行政措施類</span>
                    <span class="no">8</span>
                  </a>
                </li>
              </ul>
              <div class="more"><a href="">詳細內容一覽表</a></div>
            </div>   
            <div class="reform_program">
              <h3 class="reform_title">司法改革方案</h3>
              <ul>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program1.jpg" alt=""></span>
                    <span class="program_title">國民參與刑事審判</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program2.jpg" alt=""></span>
                    <span class="program_title">金字塔訴訟</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program3.jpg" alt=""></span>
                    <span class="program_title">憲法訴訟</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program4.jpg" alt=""></span>
                    <span class="program_title">司法與社會對話</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program5.jpg" alt=""></span>
                    <span class="program_title">法官多元進用</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program6.jpg" alt=""></span>
                    <span class="program_title">減輕法官工作負擔</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program7.jpg" alt=""></span>
                    <span class="program_title">司法公開與透明</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program8.jpg" alt=""></span>
                    <span class="program_title">建構專業便民法院</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program9.jpg" alt=""></span>
                    <span class="program_title">被害人及兒少保護</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="program_pic"><img src="images/reform/reform_program10.jpg" alt=""></span>
                    <span class="program_title">確定判決檢討機制</span>
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <!-- reform End -->
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