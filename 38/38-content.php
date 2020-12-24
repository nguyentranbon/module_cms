<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-38">
  <div class="blox-pd">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
      <img width="848" height="566" src="http://<?php echo $url_path ?>/images/38-1.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
    </a>
    <h3 class="blog-item-title">
      <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
      5 Sunny Days In Malaga
      </a>
    </h3>
    <div class="blog-item-meta">
    Written on May 14, 2016 in 
      <a href="category/spain/index.html">Spain</a>
    </div>
    <p>
    City, seaport and holiday resort on the Mediterranean in South Spain. Málaga is the heart of the Costa del Sol, a major tourist region. Birthplace of Picasso, the vibrant cosmopolitan city of Málaga is situated on the beautiful Andalucía coastline. Blessed with sunshine and fantastic quality of life, Málaga provides lively nightlife, museums an...
    </p>
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
      Continue reading <i class="fa fa-angle-right"></i>
    </a>
  </div>
  <div class="blox-pd">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
      <img width="848" height="566" src="http://<?php echo $url_path ?>/images/38-2.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
    </a>
    <h3 class="blog-item-title">
      <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
      Exiting Trip To Madrid
      </a>
    </h3>
    <div class="blog-item-meta">
    Written on June 23, 2015 in 
      <a href="category/spain/index.html">Spain</a>
    </div>
    <p>
    Madrid is the capital and largest city of Spain, as well as the capital of the autonomous community of the same name (Comunidad de Madrid). The population of the city is roughly 3.3 million with a metro area population of almost 6.5 million. Madrid is best known for its great cultural and artistic heritage, a...
    </p>
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
      Continue reading <i class="fa fa-angle-right"></i>
    </a>
  </div>
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
    <img width="848" height="566" src="http://<?php echo $url_path ?>/images/38-3.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
  </a>
  <h3 class="blog-item-title">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
    Visiting Barcelona
    </a>
  </h3>
  <div class="blog-item-meta">
  Written on May 1, 2015 in 
    <a href="category/spain/index.html">Spain</a>
  </div>
  <p>
  Barcelona is the capital and largest city of Catalonia and Spain’s second largest city, with a population of over one and half million people (over five million in the whole province). This city, located directly on the northeastern Mediterranean coast of Spain, has a rich history, having been under Roman, then Frank law before declaring...
  </p>
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
    Continue reading <i class="fa fa-angle-right"></i>
  </a>
</div>