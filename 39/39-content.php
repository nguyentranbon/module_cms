<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-39">
  <div class="blox-pd">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
      <img width="848" height="566" src="http://<?php echo $url_path ?>/images/39-1.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
    </a>
    <h3 class="blog-item-title">
      <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
        Trip To Belgrade
      </a>
    </h3>
    <div class="blog-item-meta">
      Written on March 23, 2016 in
      <a href="category/spain/index.html">Serbia</a>
    </div>
    <p>
      As the seat of the National Parliament it is also the legislative capital of the country. It forms part of the City of Cape Belgrade is the capital of the Republic of Serbia and is, as such, the country’s largest city with a population of about 1.7 million people. It lies on the confluence of...
    </p>
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
      Continue reading <i class="fa fa-angle-right"></i>
    </a>
  </div>
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
    <img width="848" height="566" src="http://<?php echo $url_path ?>/images/39-2.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
  </a>
  <h3 class="blog-item-title">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
      Sightseeing in Novi Sad
    </a>
  </h3>
  <div class="blog-item-meta">
    Written on August 14, 2015 in
    <a href="category/spain/index.html">Serbia</a>
  </div>
  <p>
    Situated on the Danube River between Budapest and Belgrade, it is a treasured regional and cultural centre. Novi Sad has a population of 400,000 in the wider urban area. What to see: The fortress of Petrovaradin on the right bank of the Danube. A fortress that no enemy has ever taken, it now contains a...
  </p>
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
    Continue reading <i class="fa fa-angle-right"></i>
  </a>
</div>