<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="myPortfolio.css">
  <link rel="stylesheet" href="myPortfolio2.css">
  <script src="https://kit.fontawesome.com/e6750ec607.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <title>KengoのPortfolio</title>
</head>
<body>
  <header id="top">

    <h1>
			Kengo's Portfolio Site
		</h1>
    <div class="index">
      <nav class="index-nav">
        <ul class="index-ul">
          <li> <a href="#top">TOP</a> </li>
          <li> <a href="#about">ABOUT</a> </li>
          <li> <a href="#works">WORKS</a> </li>
          <li> <a href="#contact">CONTACT</a> </li>
        </ul>
      </nav>
    </div>


    <a class="menuBtn" id="menuBtn">
      <div></div>
      <div></div>
      <div></div>
    </a>
    <nav class="list-nav">
      <ul class="list-ul">
        <li> <a href="#top">TOP</a> </li>
        <li> <a href="#about">ABOUT</a> </li>
        <li> <a href="#works">WORKS</a> </li>
        <li> <a href="#contact">CONTACT</a> </li>
      </ul>
      <a class="btn t-btn" href="#aaa">
        <span class="fa fa-twitter"></span>
      </a>

      <a class="btn i-btn" href="#bbb">
        <span class="fab fa-instagram"></span>
      </a>

      <a class="btn l-btn" href="#bbb">
        <i class="fab fa-line"></i>
      </a>

    </nav>
  </header>

  <main>
    <h3 id="about">
			ABOUT
			<p>古頭　健吾について</p>
		</h3>
    <div class="about">
      2000年1月25日生まれ 20歳<br>
      神奈川県出身 <br>
      県立相模原高等学校卒業 <br>
      早稲田大学創造理工学部総合機械工学科三年在籍

    </div>
    <h4 id="works">
			WORKS
			<p>作品</p>
		</h4>

    <div class="works">

    </div>


    <h5 id="contact">
			CONTACT
			<p>お問合せ</p>

		</h5>
    <div class="contact">
      <form method="POST" action="mailto:kenkuri125@gmail.com">
        <span>お名前 (漢字)</span>
        <p><input class="text-form" type="text" placeholder="例：山田　太郎"></p>

        <span>お名前 (カナ)</span>
        <p><input class=" text-form" type="text" placeholder="例：ヤマダ　タロウ"></p>

        <span>メールアドレス</span>
        <p><input class="text-form" type="text" placeholder="例：xxxx@gmail.com"></p>

        <span>電話番号</span>
        <p><input class="text-form" type="text" placeholder="例：09099990000"></p>

        <span>企業名・団体名</span>
        <p><input class="text-form" type="text"></p>

        <span>お問合せ内容</span>
        <p><textarea class="contents-form text-form" type="text"></textarea>

				<p><input class="submit-btn" type="submit" value="送信"></p>
      </form>
    </div>
  </main>
  <div class="page-top">
    <i class="fas fa-chevron-up"></i>
  </div>

  <footer>

    <a class="btn t-btn" href="#aaa">
      <span class="fa fa-twitter"></span>
    </a>

    <a class="btn i-btn" href="#bbb">
      <span class="fab fa-instagram"></span>
    </a>

    <a class="btn l-btn" href="#bbb">
      <i class="fab fa-line"></i>
    </a>

  </footer>

  <script type="text/javascript" src="myPortfolio.js"></script>
</body>
</html>