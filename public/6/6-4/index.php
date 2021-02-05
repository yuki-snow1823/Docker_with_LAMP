<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link href="./css/style.css" rel="stylesheet" type="text/css">
  <title>JIKKYO PENSION</title>
</head>
<body>
  <!-- ヘッダー：開始-->
  <header id="header">
    <div id="pr">
      <p>部活・サークル等のグループ利用に最適！アットホームなペンション！</p>
    </div>
    <h1><a href="./index.php"><img src="./images/logo.png" alt=""></a></h1>
    <div id="contact">
      <h2>ご予約／お問い合わせ</h2>
      <span class="tel">☎0120-000-000</span>
    </div>
  </header>
  <!-- ヘッダー：終了 -->
  <!-- メニュー：開始 -->
<?php include("./topmenu.php"); ?>
  <!-- メニュー：終了 -->
  <!-- アイキャッチ：開始 -->
  <div id="icatch">
    <img src="./images/icatch.jpg" alt="">
  </div>
  <!-- アイキャッチ：終了 -->
  <!-- コンテンツ：開始 -->
  <div id="contents">
    <!-- メイン：開始 -->
    <main id="main">
      <article>
        <section>
          <h2><img class="small" src="./images/new.png"><br>更新情報</h2>
          <dl class="information">
            <dt>2016-02-15</dt>
            <dd>
              サイトオープンしました。
            </dd>
          </dl>
        </section>
        <section>
          <h2><img class="small" src="./images/about.png"><br>JikkyoPensionについて</h2>
          <h3>にこやか笑顔でお出迎え</h3>
          <p>
            少人数で営業している当ペンションですが、スタッフ一同心掛けているのは、
            <br> にこやかな笑顔で接客対応することです！
          </p>
          <h3>大人数でワイワイと</h3>
          <p>
            部活やサークル、仲の良いお友達同士などと、
            <br> 大人数でワイワイしながら過ごすのに最適な環境づくりを目指しています！
          </p>
          <h3>観光スポットに恵まれた好立地</h3>
          <p>
            ゲレンデ、テニスコート、各種レクリエーション施設へのアクセスは抜群です！
            <br> また、温泉地の中心街からも近いため、観光にも最適です！
          </p>
        </section>
      </article>
    </main>
    <!-- メイン：終了 -->
    <!-- サイド：開始 -->
    <aside id="side">
      <section>
        <h2>ご予約</h2>
        <ul>
          <li><a href="#">宿泊日入力</a></li>
        </ul>
      </section>
      <section>
        <h2>お部屋紹介</h2>
<?php include("./sideList.php"); ?>
      </section>
    </aside>
    <!-- サイド：終了 -->
    <!-- ページトップ：開始 -->
    <div id="pageTop">
      <a href="#top">ページのトップへ戻る</a>
    </div>
    <!-- ページトップ：終了 -->
  </div>
  <!-- コンテンツ：終了 -->
  <!-- フッター：開始 -->
  <footer id="footer">
    Copyright c 2016 Jikkyo Pension All Rights Reserved.
  </footer>
  <!-- フッター：終了 -->
</body>
</html>