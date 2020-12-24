<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-37">
  <div class="blox-pd">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
      <img width="848" height="566" src="http://<?php echo $url_path ?>/images/37.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
    </a>
    <h3 class="blog-item-title">
      <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
        Week In Volgograd
      </a>
    </h3>
    <div class="blog-item-meta">
      Written on April 5, 2016 in
      <a href="category/spain/index.html">Russia</a>
    </div>
    <p>
      Volgograd (Russian: Волгогра́д vuhl-gah-GRAHD) used to be called Stalingrad. It lies along the west bank of the Volga River in Southern Russia. It was the scene of one of the most important and bloodiest battles of the Second World War. Volgograd is one of the most beautiful ancient cities of Russia. It is located in...
    </p>
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
      Continue reading <i class="fa fa-angle-right"></i>
    </a>
  </div>
  <div class="blox-pd">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
      <img width="848" height="566" src="http://<?php echo $url_path ?>/images/37-2.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
    </a>
    <h3 class="blog-item-title">
      <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
        Exploring Moskow
      </a>
    </h3>
    <div class="blog-item-meta">
      Written on May 11, 2015 in
      <a href="category/spain/index.html">Russia</a>
    </div>
    <p>
      Moscow (Russian: Москва) is the 860 year-old capital of Russia. A truly iconic, global city, Moscow has played a central role in the development of Russia and the world. For many, the sight of the Kremlin complex in the centre of the city is still loaded with symbolism and history. Moscow was the capital of...
    </p>
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
      Continue reading <i class="fa fa-angle-right"></i>
    </a>
  </div>
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
    <img width="848" height="566" src="http://<?php echo $url_path ?>/images/37-3.jpg" class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image" sizes="(max-width: 848px) 100vw, 848px" />
  </a>
  <h3 class="blog-item-title">
    <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
      Weekend In Sankt Petersburg
    </a>
  </h3>
  <div class="blog-item-meta">
    Written on April 14, 2015 in
    <a href="category/spain/index.html">Russia</a>
  </div>
  <p>
    Saint Petersburg (Russian: Санкт-Петерб́ург Sankt-Peterburg;) is a world-class destination and Russia’s second largest city, with a population of more than 5 million perched at the eastern tip of of the Baltic Sea and the Neva River. The city was formerly known as Petrograd (Петрогр́ад), and later Leningrad (Лени�...
  </p>
  <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
    Continue reading <i class="fa fa-angle-right"></i>
  </a>
</div>