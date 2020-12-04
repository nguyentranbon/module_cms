<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
<div class="widget white-block clearfix widget_search">
              <form
                method="get"
                class="searchform"
                action="http://demo.djmimi.net/themes/travelog/"
              >
                <div class="travelog-form">
                  <input
                    type="text"
                    value=""
                    name="s"
                    class="form-control"
                    placeholder="Search for..."
                  />
                  <input type="hidden" name="post_type" value="post" />
                  <a class="btn btn-default submit_form"
                    ><i class="fa fa-search"></i
                  ></a>
                </div>
              </form>
            </div>
</div>
