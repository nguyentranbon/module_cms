<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-41">
  <div class="blox-pd">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
      <img width="848" height="566" src="http://<?php echo $url_path ?>/images/41-1.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
    </a>
    <h3 class="blog-item-title">
      <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
        Vacation in Rabat
      </a>
    </h3>
    <div class="blog-item-meta">
      Written on August 11, 2015 in
      <a href="category/spain/index.html">Morocco</a>
    </div>
    <p>
      Rabat (الرباط) literally “Fortified Place” is the capital city of Morocco. The city is located on the Atlantic Ocean at the mouth of the river Bou Regreg. On the facing shore of the river lies Salé, Rabat’s bedroom community. Together with Temara the cities account for a combined metropolitan population of 2.6 million. It i...
    </p>
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
      Continue reading <i class="fa fa-angle-right"></i>
    </a>
  </div>
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
    <img width="848" height="566" src="http://<?php echo $url_path ?>/images/41-2.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
  </a>
  <h3 class="blog-item-title">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
      Two Days In Agadir
    </a>
  </h3>
  <div class="blog-item-meta">
    Written on May 16, 2015 in
    <a href="category/spain/index.html">Morocco</a>
  </div>
  <p>
    Agadir is a major modern city in the southern part of Morocco. It is of interest primarily because of its location, as it is surrounded by the Anti Atlas, the Sahara Desert on the Atlantic coast with many national parks, and secluded beaches which are all easily accessible. Agadir is a very tolerant city. The...
  </p>
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
    Continue reading <i class="fa fa-angle-right"></i>
  </a>
</div>