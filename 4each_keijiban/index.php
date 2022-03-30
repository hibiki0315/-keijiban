<!DOCTYPE html>
<html lang="ja">


<head>
  <meta charset="UTF-8" />
  <title>4eachblog掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>



<body>

  <div class="logo"><img src="4eachblog_logo.jpg"></div>


    <header>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>お問い合わせ<li>
        <li>その他</li>
      </ul>
    </header>



    <main>
      <div class="main-container">
        <div class="left">
          <h1>プログラミングに役立つ掲示板</h1>

          <form method="post" action="insert.php">
            <div class="keijiban">
              <h2>入力フォーム</h2>
              <div>
                <p><lable>ハンドルネーム</lable></p>
                <input type="text" class="text" size="40" name="handlename">
              </div>

              <div>
                <p><label>タイトル</label></p>
                <input type="text" class="text" size="40" name="title">
              </div>

              <div>
                <p><label>コメント</lable></p>
                <textarea cols="65" rows="10" name="comments"></textarea>
              </div>

              <div>
                <input type="submit" class="submit" value="投稿する">
              </div>

            </div>
          </form>

          <?php
           mb_internal_encoding("utf8");
           $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
           $stmt= $pdo->query("select*from 4each_keijiban");
          ?>

          <?php
             while($row= $stmt->fetch()){
               echo "<div class='kiji'>";
               echo "<h2>".$row['title']."</h2>";
               echo "<div class='contents'>";
               echo $row['comments'];
               echo "<div class='handlename'>posted by".$row['handlename']."</div>";
               echo "</div>";
               echo "</div>";
             }

            ?>



        </div>


        <div class="right">
          <h2>人気記事</h2>
          <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタ</li>
            <li>HTMLの基本</li>
          </ul>

          <h2>オススメリンク</h2>
          <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
          </ul>

          <h2>カテゴリ</h2>
          <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
          </ul>
        </div>
      </div>
   </main>


   <footer>copyright @ internous | 4each blog the which provides A to Z about programming.</footer>

  </body>
  
</html>








