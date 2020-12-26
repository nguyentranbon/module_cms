<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
	<div class="home-categories">
		<div class="container">
			<div class="row">
								<div class="cat-box col-xs-12 col-sm-6 col-md-4">
						<a href="#" class="category-box" style="background-image: url( http://<?php echo $url_path ?>/images/africa.jpg)">
							<span>Morocco</span>
						</a>
					</div>
									<div class="cat-box col-xs-12 col-sm-6 col-md-4">
						<a href="#" class="category-box" style="background-image: url( http://<?php echo $url_path ?>/images/russia.jpg)">
							<span>Russia</span>
						</a>
					</div>
									<div class="cat-box col-xs-12 col-sm-6 col-md-4">
						<a href="#" class="category-box" style="background-image: url( http://<?php echo $url_path ?>/images/serbia.jpg)">
							<span>Serbia</span>
						</a>
					</div>
					</div>
					<div class="row">				
						<div class="cat-box col-xs-12 col-sm-6 col-md-4">
						<a href="#" class="category-box" style="background-image: url( http://<?php echo $url_path ?>/images/spain.jpg)">
							<span>Spain</span>
						</a>
					</div>
									<div class="cat-box col-xs-12 col-sm-6 col-md-4">
						<a href="#" class="category-box" style="background-image: url( http://<?php echo $url_path ?>/images/sweden.jpg)">
							<span>Sweeden</span>
						</a>
					</div>
									<div class="cat-box col-xs-12 col-sm-6 col-md-4">
						<a href="#" class="category-box" style="background-image: url( http://<?php echo $url_path ?>/images/north-america.jpg)">
							<span>USA</span>
						</a>
					</div>
							</div>
		</div>
	</div>
</div>
