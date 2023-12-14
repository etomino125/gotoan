<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>五戸庵公式サイト</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="..\slick/slick.css" />
    <link rel="stylesheet" href="..\slick/slick-theme.css" />
    <link rel="stylesheet" href="..\CSS/style.css" />
    <link rel="stylesheet" href="..\CSS/menulist.css" />
    <link rel="stylesheet" href="..\CSS/pickup.css" />
    <link rel="icon" href="..\img\favicon.ico" />
  </head>
  <body>
    <!---ヘッダーメニュー--->
    <header class="header">
      <div class="hamburger">
        <div class="header-logo">
          <a href="..\index.html">
            <img
              src="..\img\gotoanlogo.png"
              alt="五戸庵のロゴ"
              width="140"
              height="54"
            />
          </a>
        </div>

        <p class="btn-header-nav-list">
          <span></span>
          <span></span>
          <span></span>
        </p>
        <nav class="header-nav">
          <ul class="header-nav-ul">
            <li class="header-nav-li">
              <a href="..\menu/menulist.html" class="header-nav-inr"
                >メニュー</a
              >
            </li>
            <li class="header-nav-li">
              <a href="..\order\order.html" class="header-nav-inr">ご注文</a>
            </li>
            <li class="header-nav-li">
              <a href="..\guide\guide.html" class="header-nav-inr">店舗案内</a>
            </li>
            <li class="header-nav-li">
              <a href="..\contact/contact.html" class="header-nav-inr"
                >お問い合わせ</a
              >
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="main">

        
     
      <!---通常メニュー-->
      <section class="pickupcheck">
        <div class="pickupcheck-check">
        <h1>注文内容確認</h1>
        
        <div class="pickupcheck-inr">
          
          <h2>以下の内容でお間違いないでしょうか？</h2>

          <div class="pickupcheck-menu">
            
            <!-- <ul>
              <li> -->
            
           
              <div class="formitem">
             
              <ul><h2>お名前</h2>
                <li><dl><dt>姓</dt><dd><?php
print $_GET['familyname']; ?></dd></dl></li>
                
             </ul>
             
              <div class="formitem_button">
              <button type="submit" class="button reverse">送信</button>
              </div>
              </div>
          
          </div>

      </section>
    </main>
    <footer class="footer">&copy;Gotoan</footer>

    <script src="..\js/jquery-3.7.1.min.js"></script>
    <script src="..\js/slick.min.js"></script>
    <script src="..\js/script.js"></script>
  </body>
</html>
