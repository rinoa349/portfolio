<?php
session_start();

$flash = isset($_SESSION['flash']) ? $_SESSION['flash'] : [];
unset($_SESSION['flash']);

$original = isset($_SESSION['original']) ? $_SESSION['original'] : [];
unset($_SESSION['original']);

$toke_byte = openssl_random_pseudo_bytes(16);
$csrf_token = bin2hex($toke_byte);

$_SESSION['csrf_token'] = $csrf_token;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="reset.css"rel="stylesheet" type="text/css" >
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
  <title>ポートフォリオ</title>
</head>
<body>
  <div id="home" class="hero">

    <!------------------------------------------ メインページ ------------------------------------------>
   <header class="page-header">
    <img src="images/hero-img.jpg" alt="ホーム画面" class="hero-img">
    <nav>
      <ul class="main-nav" id="page-link">
        <li><a href="#profile-jump">My Profile</a></li>
        <li><a href="#skill-jump">My Skill</a></li>
        <li><a href="#work-jump">The Work</a></li>
        <li><a href="#contact-jump">Contact</a></li>
      </ul>
    </nav>
    <div class="main-title">
      <p>Norikatsu's Portfolio</p>
    </div>
   </header>
  </div>

  <div class="main-container" id="profile-jump">
    <!------------------------------------------ 自己紹介 ------------------------------------------>
    
    
      <p class="profile-description"><img src="images/profile-img.png" class="img-size"><a id="profile-jump">My Profile</a></p>
    <div class="profile">
      <img src="images/my-profile-photo.png" class="profile-photo">
      <p class="profile-content">初めまして。Norikatsuです。現在、新潟在住の37歳です。<br>
        長野県の高等学校を卒業後、マンガ専門学校でマンガを描く勉強をしました。<br>
        2009年より、電機メーカーで電子部品・半導体の生産を3年従事していました。<br>
        2013年〜現在、病院や老人ホームなど、医療機関で使用する食材の配送業務に従事しています。<br>
        そんな中、普段使用しているwebサイトの仕組みに興味を持ち、プログラミングスクール（オンライン）<br>
        に通い、エンジニアになるため日々勉強中です。
    </div>


    <!------------------------------------------ スキル ------------------------------------------>

    <div class="my-skill" id="skill-jump">
      <p><img src="images/skill-img.png" class="img-size"><a id="skill-jump">My Skill</a></p>
      <div class="my-skill-list">
        <div class="skill-1">
          <table>
            <tr>    
              <td colspan="3"><span class="skill-name">フロントエンド</span></td>
            </tr>  
            <tr>
              <th>技術</th>
              <th>経験期間</th>
              <th>スキル</th>
            </tr> 
            <tr>
              <td>HTML</td>
              <td>1年</td>
              <td><span style="color:#f90;">★★★★</span>★ </td>
            </tr>
            <tr>
              <td>CSS</td>
              <td>1年</td>
              <td><span style="color:#f90;">★★★★</span>★ </td>
            </tr>
            <tr>
              <td>JavaScript</td>
              <td>1年</td>
              <td><span style="color:#f90;">★★★</span>★★ </td>
            </tr>
            <tr>
              <td>React</td>
              <td>3ヶ月</td>
              <td><span style="color:#f90;">★★</span>★★★ </td>
            </tr>
            <tr>
              <td>WordPress</td>
              <td>6ヶ月</td>
              <td><span style="color:#f90;">★★★</span>★★ </td>
            </tr>
          </table>
        </div>
        <div class="skill-container">
          <div class="skill-2">
            <table>
              <tr>    
                <td colspan="3"><span class="skill-name">バックエンド</span></td>
              </tr>  
              <tr>
                <th>技術</th>
                <th>経験期間</th>
                <th>スキル</th>
              </tr>  
              <tr>
                <td>Ruby(Ruby on Rails)</td>
                <td>1年</td>
                <td><span style="color:#f90;">★★★</span>★★ </td>
              </tr>
              <tr>
                <td>PHP</td>
                <td>6ヶ月</td>
                <td><span style="color:#f90;">★★★</span>★★ </td>
              </tr>
            </table>
         
          <div class="skill-3">
            <table>
              <tr>    
                <td colspan="3"><span class="skill-name">データベース</span></td>
              </tr>  
              <tr>
                <th>技術</th>
                <th>経験期間</th>
                <th>スキル</th>
              </tr>
              <tr>
                <td>MySQL</td>
                <td>1年</td>
                <td><span style="color:#f90;">★★★</span>★★ </td>
              </tr>
            </table>
          </div>
        </div>
        
      </div>
      <div class="skill-opinion">広く浅くではありますが、さまざまな言語のスキルアップに取り組んできましたが、
          全体的に理解が浅いため、<br>専門性の低さを自負しています。ですが、幅広く対応できる点が強みだと思っているので、
          自身で<br>学習するのはもちろん、業務に携わることで、少しずつ専門性を高めようと考えています。
      </div>
    </div>

    <!------------------------------------------ 成果物 ------------------------------------------>

    <div class="my-product" id="work-jump">
      <p><img src="images/work-img.png" class="img-size"><a id="work-jump">The Work</a></p>
      <div class="my-product-content">
        <ul>
          <li class="content-list">
            <a href="https://health-beauty-tora.jp/">
              <img src="images/tora-img.png" alt="TORa ~health & beauty~" class="content-img">
            </a>
            <div class="content-list-right">
              <p class="content-title">「<a href="https://health-beauty-tora.jp/">TORa ~health & beauty~</a>」</p>
              <p class="content-text">姉が経営しているカイロプラクティックサロンのホームページを作成しました。<br>
                店内の写真やホームページ全体の色味をシンプルにするなど、見やすさを意識し、<br>オーナー（姉）のみが投稿できる、サロンのお得な情報や告知などの<br>
                お知らせ掲示板を作成しました。<hr>
                PHPとJavaScriptと、両方をまんべんなく学習できることを込みで<br>WordPressで作成したアプリです。<br>
                トップ、詳細、固定ページなど様々なページ用のファイルを用意しなければであり、<br>各ページの共通部分も別ファイルにしてPHPコードで呼び出すなど、
                覚えることも多く大変<br>でしたが、自分の思い通りにできることが多いので、楽しみながら制作作業ができました。
              </p>
            </div>
          </li>

            <hr class="hr2">
          <li class="content-list">
            <a href="http://tn-various-work.net/">
              <img src="images/crud-img.png" alt="CRUD" class="content-img">
            </a>
            <div class="content-list-right">
              <p class="content-title">「<a href="http://tn-various-work.net/">コメント投稿(会員登録)</a>」</p>
              <p class="content-text">WordPressでアプリ開発する前に、PHPのことを知りたいと思い、<br>CRUD機能の勉強として作成しました。<br><hr>
                PHPの文法をなかなか覚えられずに理解するまで時間がかかりました。<br>
                普段特に何も思わず行っている会員登録も、自分でプログラミングし、<br>
                登録機能を実装することで大変であったと実感し、<br>
                エンジニアにまた近づけたと嬉しく思いました。
              </p>
            </div>        
          </li>

            <hr class="hr2">
          <li class="content-list">
            <a href="http://takizawa-portfolio.net/">
            <img src="images/portfolio-img.png" alt="ポートフォリオ" class="content-img">
            <div class="content-list-right">
              <p class="content-title">「<a href="http://takizawa-portfolio.net/">Takizawa Norikatsu's Portfolio</a>」</p>
              <p class="content-text">私自身のことと、大事な作品を込めたポートフォリオです。<br><hr>
              あなたに私のことを少しでも知ってもらい、興味を持っていだだけると嬉しいです。</p>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!------------------------------------------ お問い合わせ ------------------------------------------>

    <div class="contact" id="contact-jump">
      <p><img src="images/contact-img.png" class="img-size"><a id="contact-jump">Contact</a></p>
    </div>
    <div class="contact-form">
      <form action="contact.php" method="POST">
          <div>
              <label for="name"></label>
              <input type="text" id="name" name="name" placeholder="Your name..." value="<?php echo isset($original['name']) ? $original['name'] : null;?>" required />
              <?php echo isset($flash['name']) ? $flash['name'] : null ?>
          </div>
          <div>
              <label for="email"></label>
              <input type="text" id="email" name="email" placeholder="Your e-mail..." value="<?php echo isset($original['email']) ? $original['email'] : null;?>" required />
              <?php echo isset($flash['email']) ? $flash['email'] : null ?>
          </div>
          <div>
              <label for="message"></label>
              <textarea id="message" name="message" placeholder="Your message..."><?php echo isset($original['message']) ? $original['message'] : null;?></textarea>
          </div>
          <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>" />
          <div class="submit-btn">
            <button type="submit">SEND</button>
          </div>
      </form>
    </div>
  </div>
  <div class="line"></div> 
  <footer id="footer" class="footer">
    <p id="page-top"><a href="#">Page Top</a></p> 
    <div class="my_copyright">
      Copyright © D.L.B All Rights Reserved.
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="page-scroll.js"></script>
  
</body>
</html>