<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-28">
    <div class="blog-header">
        <div class="container">
            <ul class="list-unstyled list-inline post-meta">
                <li class="single-small-time" title="Creation time">
                    <i class="far fa-calendar"></i>March 23, 2016
                </li>
                <li title="Number of comments">
                    <i class="far fa-comment"></i>2 comments
                </li>
                <li title="Author">
                    <i class="fa fa-user"></i><a href="#"> Sandy Smith</a>
                </li>
                <li title="Post categories">
                    <i class="far fa-folder-open"></i> <a href="#">Serbia</a>
                </li>
            </ul>
            <h1 class="post-title">Trip To Belgrade</h1>
            <p>As the seat of the National Parliament it is also the legislative capital of the country. It forms part of the City of Cape Belgrade is the capital of the Republic of Serbia and is, as such, the country’s largest city with a population of about 1.7 million people. It lies on the confluence of...</p>
            
        </div>
    </div>
    <div class="white-section">
        <div class="container">
            <div class="row">
                <div class="post-content-wrap col-sm-10 col-sm-push-1">
                    <div class="post-content">
                        <p>As the seat of the National Parliament it is also the legislative capital of the country. It forms part of the City of Cape Belgrade is the capital of the Republic of Serbia and is, as such, the country’s largest city with a population of about 1.7 million people. It lies on the confluence of the Sava and Danube rivers. The city has a long history, dating back to the 4th century BC, when the area was settled by Celtic tribes. Later on, it became the Roman city of Singidunum, and relics of that era can still be seen in the city, particularly at Kalemegdan Fortress. During the Middle Ages the town became a Serbian stronghold until the Ottoman invasion. The city changed hands between the Ottomans and the Austrians several times until 1878, when Serbia got its independence and Belgrade became the capital of the new country.</p>
                        <p>After the First World War, Belgrade became the seat of Kingdom of Serbs, Croats and Slovenes (in 1929, the country changed name to Kingdom of Yugoslavia) until its collapse, and it saw violence again in 1999 with NATO’s bombing campaign. This often violent history and outside influence has colored much of Belgrade’s evolution, which is evident in its culture and architecture. Often caught between the hammer and anvil of clashing empires, the city has taken on a unique character, reminiscent of both Austrian and Turkish influences, with a unique set of Communist elements thrown in as Yugoslavia was expelled from the Eastern Bloc in 1948 but followed its own brand of Communism until the years following Marshal Tito’s death in 1980. Yet, the city has its own spirit, and in it can be found some not only unique features, but also a healthy joie de vivre in its café culture, nightlife and often Mediterranean flavor in its view of life.</p>
                        <div class="gallery ">
                            <a class="gallery-item gallery-columns-3" title="" href="#">
                                <img src="http://<?php echo $url_path ?>/images/hinh28-1.png" alt="hinh28-1" class="img-responsive">
                            </a>
                            <a class="gallery-item gallery-columns-3" title="" href="#">
                                <img src="http://<?php echo $url_path ?>/images/hinh28-2.png" alt="hinh28-2" class="img-responsive">
                            </a>
                            <a class="gallery-item gallery-columns-3" title="" href="#">
                                <img src="http://<?php echo $url_path ?>/images/hinh28-3.png" alt="hinh28-3" class="img-responsive">
                            </a><br style="clear: both">
                        </div>
                        
                        <p>Whilst there isn’t much ethnic or cultural diversity in Belgrade compared to other European cities, there are minority communities (largely Roma and Chinese), as well as people from other former Yugoslav republics, such as Bosnia, Croatia and Macedonia. There is also a small expat community. Cultural events from around the world, however, are starting to become increasingly common, particularly in the spring and summer months, due to both local arts and culture organizations, as well as foreign embassies/cultural centers. These attract a good deal of local attention, and will help in raising the city’s profile as a cultural hotspot. Belgrade is an energetic city re-discovering its tourism potential.</p>
                        
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</div>
