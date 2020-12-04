<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
<a
                href="2016/05/14/5-sunny-days-in-malaga/index.html"
                class="blog-item-media"
              >
                <img
                  width="848"
                  height="566"
                  src="http://<?php echo $url_path ?>/images/malaga.jpg"
                  class="attachment-post-thumbnail size-post-thumbnail travelog-lazy-load wp-post-image"
                  sizes="(max-width: 848px) 100vw, 848px"
                />
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
                City, seaport and holiday resort on the Mediterranean in South
                Spain. Málaga is the heart of the Costa del Sol, a major tourist
                region. Birthplace of Picasso, the vibrant cosmopolitan city of
                Málaga is situated on the beautiful Andalucía coastline. Blessed
                with sunshine and fantastic quality of life, Málaga provides
                lively nightlife, museums an...
              </p>
              <a
                href="2016/05/14/5-sunny-days-in-malaga/index.html"
                class="read-more"
              >
                Continue reading <i class="fa fa-angle-right"></i>
              </a>
</div>
