  <?php
    error_reporting (0);
    // $url = "https://someserver.com/~place/Web_Portfolio/Block4/controller/news";
    $url = "http://localhost/Web_Portfolio/Block4/controller/news.php";
    $xml = new DOMDocument ();
    $xml -> load ($url);
    $xsl = new DOMDocument ();
    $xsl -> load ("../xsl/rss.xsl");
    $proc = new XSLTProcessor ();
    $proc -> importStyleSheet ($xsl);
    echo $proc -> transformToXML ($xml);
  ?>