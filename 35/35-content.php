<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-35">
<div class="blog-header">
        <div class="container">
          <h1 class="post-title">Right Sidebar</h1>
        </div>
      </div>

      <div class="white-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-9">
              <div class="post-content clearfix">
                <p>
                  Duis autem vel eum iriure dolor in hendrerit in vulputate
                  velit esse molestie consequat, vel illum dolore eu feugiat
                  nulla facilisis at vero eros et accumsan et iusto odio
                  dignissim qui blandit praesent luptatum zzril delenit augue
                  duis dolore te feugait nulla facilisi
                </p>
                <blockquote>
                <i class="fas fa-quote-left"></i>
                  <p>
                    Hi there! I&#8217;m a bike messenger by day, aspiring actor
                    by night, and this is my website. I live in Los Angeles,
                    have a great dog named Jack, and I like piña coladas. (And
                    gettin&#8217; caught in the rain.)
                  </p>
                  <i class="fas fa-quote-right"></i>
                </blockquote>
                <p>&#8230;or something like this:</p>
                <blockquote>
                <i class="fas fa-quote-left"></i>
                  <p>
                    The XYZ Doohickey Company was founded in 1971, and has been
                    providing quality doohickeys to the public ever since.
                    Located in Gotham City, XYZ employs over 2,000 people and
                    does all kinds of awesome things for the Gotham community.
                  </p>
                  <i class="fas fa-quote-right"></i>
                </blockquote>
                <p>
                  Claritas est etiam processus dynamicus, qui sequitur
                  mutationem consuetudium lectorum. Mirum est notare quam
                  littera gothica, quam nunc putamus parum claram, anteposuerit
                  litterarum formas humanitatis per seacula quarta decima et
                  quinta decima. Eodem modo typi, qui nunc nobis videntur parum
                  clari, fiant sollemnes in futurum
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
