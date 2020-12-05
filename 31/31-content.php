<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-31">
    <div class="">
        <div class="row next-prev">
            <div class="col-sm-6">
                <div class="prev-post text-right padding" style="background-image: url(http://<?php echo $url_path ?>/images/hinh31-1.png)">
                    <div class="overlay"></div>
                    <div class="caption-holder">
                        <h5 class="animation">PREV POST</h5>
                        <a href="#">
                            <h2 class="animation">Sightseeing in Novi Sad</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="next-post padding" style="background-image: url(http://<?php echo $url_path ?>/images/hinh31-2.png)">
                    <div class="overlay"></div>
                    <div class="caption-holder">
                        <h5 class="animation">NEXT POST</h5>
                        <a href="#">
                            <h2 class="animation">Trip To Belgrade</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
