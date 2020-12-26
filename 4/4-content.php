<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-4">
  <div class="blox-pd">
    <a href="#" class="blog-item-media">
      <img width="848" height="566" src="http://<?php echo $url_path ?>/images/4.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
    </a>
    <h3 class="blog-item-title">
      <a href="#">
        7 Days In Washington
      </a>
    </h3>
    <div class="blog-item-meta">
      Written on September 9, 2015 in
      <a href="category/spain/index.html">USA</a>
    </div>
    <p>
      Washington, D.C. is the capital of the United States of America and the seat of its three branches of government, as well as the federal district of the U.S. The city has an unparalleled collection of free, public museums and many of the nation’s most treasured monuments and memorials. The vistas on the National Mall...
    </p>
    <a href="#" class="read-more">
      Continue reading <i class="fa fa-angle-right"></i>
    </a>
  </div>
  <div class="blox-pd">
    <a href="#" class="blog-item-media">
      <img width="848" height="566" src="http://<?php echo $url_path ?>/images/sl4n.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
    </a>
    <h3 class="blog-item-title">
      <a href="#">
        Couple Of Days In Sunny Miami
      </a>
    </h3>
    <div class="blog-item-meta">
      Written on July 27, 2015 in
      <a href="category/spain/index.html">USA</a>
    </div>
    <p>
      Three quarters of a century after the art deco movement, Miami remains one of the world’s trendiest and flashiest hot spots. Luckily for visitors, South Beach is no longer the only place to stand and pose in Miami. North of downtown, the growing Wynwood and Design districts—along with nearby Midtown—are home to Miami’s hipster and.....
    </p>
    <a href="#" class="read-more">
      Continue reading <i class="fa fa-angle-right"></i>
    </a>
  </div>
  <a href="#" class="blog-item-media">
    <img width="848" height="566" src="http://<?php echo $url_path ?>/images/4.3.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
  </a>
  <h3 class="blog-item-title">
    <a href="#">
      No Sleep In New York
    </a>
  </h3>
  <div class="blog-item-meta">
    Written on July 14, 2015 in USA
    <a href="category/spain/index.html">USA</a>
  </div>
  <p>
    From Wall Street’s skyscrapers to the neon of Times Square to Central Park’s leafy paths, New York City pulses with an irrepressible energy. History meets hipness in this global center of entertainment, fashion, media, and finance. World-class museums like MoMA and unforgettable icons like the Statue of Liberty beckon, but discovering t...
  </p>
  <a href="#" class="read-more">
    Continue reading <i class="fa fa-angle-right"></i>
  </a>
</div>