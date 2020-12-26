<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-8">
<div class="widget white-block clearfix widget_widget_top_author">
              <div class="widget-title-wrap">
                <h4 class="widget-title">Top Travelers</h4>
              </div>
              <ul class="list-unstyled no-top-padding">
                <li class="top-authors">
                  <div class="widget-image-thumb">
                    <img
                      src="http://<?php echo $url_path ?>/images/avatar-6.jpg"
                      width="50"
                      height="50"
                      alt="Ally Star"
                      class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo"
                    />
                  </div>

                  <div class="widget-text">
                    <a href="#"> Ally Star </a>
                    <p class="small">
                      <i class="fa fa-pencil"></i> Wrote 6 posts
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li class="top-authors">
                  <div class="widget-image-thumb">
                    <img
                      src="http://<?php echo $url_path ?>/images/avatar-4.jpg"
                      width="50"
                      height="50"
                      alt="Sandy Smith"
                      class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo"
                    />
                  </div>

                  <div class="widget-text">
                    <a href="#"> Sandy Smith </a>
                    <p class="small">
                      <i class="fa fa-pencil"></i> Wrote 4 posts
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li class="top-authors">
                  <div class="widget-image-thumb">
                    <img
                      src="http://<?php echo $url_path ?>/images/avatar-2.jpg"
                      width="50"
                      height="50"
                      alt="Mark Doe"
                      class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo"
                    />
                  </div>

                  <div class="widget-text">
                    <a href="#"> Mark Doe </a>
                    <p class="small">
                      <i class="fa fa-pencil"></i> Wrote 4 posts
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </li>
              </ul>
            </div>
</div>
