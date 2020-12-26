<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-23">
<div class="blog-header">
        <div class="container">
          <h1 class="post-title">Left Sidebar</h1>
        </div>
      </div>
      <div class="white-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <div class="widget white-block clearfix widget_archive">
                <div class="widget-title-wrap">
                  <h4 class="widget-title">Archives</h4>
                </div>
                <ul>
                  <li>
                    <a href="#">May 2016</a> <span>1</span>
                  </li>
                  <li>
                    <a href="#">April 2016</a>
                    <span>2</span>
                  </li>
                  <li>
                    <a href="#">March 2016</a>
                    <span>1</span>
                  </li>
                  <li>
                    <a href="#">September 2015</a>
                    <span>1</span>
                  </li>
                  <li>
                    <a href="#">August 2015</a>
                    <span>2</span>
                  </li>
                  <li>
                    <a href="#">July 2015</a> <span>2</span>
                  </li>
                  <li>
                    <a href="#">June 2015</a> <span>1</span>
                  </li>
                  <li>
                    <a href="#">May 2015</a> <span>3</span>
                  </li>
                  <li>
                    <a href="#">April 2015</a>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
