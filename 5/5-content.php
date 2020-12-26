<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-5">
  <div class="widget white-block clearfix widget_text">
    <div class="textwidget">
      <div class="text-center">
        <a href="#"><img src="http://<?php echo $url_path ?>/images/banner.png" alt="banner"  width="262" height="300"/></a>
      </div>
    </div>
  </div>

</div>