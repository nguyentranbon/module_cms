<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-40">
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
    <img width="848" height="566" src="http://<?php echo $url_path ?>/images/40-1.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
  </a>
  <h3 class="blog-item-title">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
      Spring In Sweden
    </a>
  </h3>
  <div class="blog-item-meta">
    Written on April 1, 2016 in
    <a href="category/spain/index.html">Sweeden</a>
  </div>
  <p>
    Stockholm is a city in the flush of its second youth. Since the mid-1990s, Sweden’s capital has emerged from its cold, Nordic shadow to take the stage as a truly international city. What started with entry into the European Union in 1995 gained pace with the extraordinary IT boom of the late 1990s, strengthened with...
  </p>
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
    Continue reading <i class="fa fa-angle-right"></i>
  </a>
</div>