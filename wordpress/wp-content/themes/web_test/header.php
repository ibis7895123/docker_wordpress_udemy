<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <meta http-equiv="imagetoolbar" content="no" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="css/common.css" type="text/css" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript">
    $(function() {
      $('#slide').slideshow({
        autoSlide: true,
        effect: 'fade',
        type: 'repeat',
        interval: 3000,
        duration: 500,
        imgHoverStop: true,
        navHoverStop: true
      });
      $(window).load(function() {
        $(".topNaviColumn").uniformHeight();
      });
    });
  </script>
  <title>あなたのサイト名などお書きください</title>
</head>

<body>
  <div id="container">
    <div id="header">
      <h1><a href="index.html"><img src="images/logo.png" alt="SAMPLE WEB SITE" /></a></h1>
      <div id="menu">
        <ul>
          <li class="home"><a href="index.html">ホーム</a></li>
          <li><a href="service.html">事業内容</a></li>
          <li><a href="company.html">会社概要</a></li>
          <li><a href="archive-news.html">お知らせ</a></li>
          <li><a href="archive-news.html">ブログ</a></li>
          <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
      </div><!-- /#menu -->
    </div><!-- /#header -->