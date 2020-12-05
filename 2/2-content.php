<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15673.899915121354!2d106.7580641!3d10.8514325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3ff69197b10ec4f!2sThu%20Duc%20College%20of%20Technology!5e0!3m2!1sen!2s!4v1607148884193!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
