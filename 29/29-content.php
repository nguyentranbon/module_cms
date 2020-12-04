<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-29">
<div class="share-section tag-section">
        <a href="../../../../tag/beach/index.html">beach</a
        ><a href="../../../../tag/sea/index.html">sea</a
        ><a href="../../../../tag/spain/index.html">spain</a
        ><a href="../../../../tag/sunny/index.html">sunny</a
        ><a href="../../../../tag/vacation/index.html">vacation</a>
      </div>

      <div class="grey-section">
        <div class="container">
          <div class="text-center">
            <div class="author-avatar">
              <img
                src="http://<?php echo $url_path ?>/images/avatar-4.jpg"
                width="100"
                height="100"
                alt="Sandy Smith"
                class="avatar avatar-150 wp-user-avatar wp-user-avatar-150 alignnone photo"
              />
            </div>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
              quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
              aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
              eos qui ratione voluptatem sequi nesciunt.
            </p>
          </div>
        </div>
      </div>

      <div class="share-section">
        <div class="post-share">
          <a
            href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdemo.djmimi.net%2Fthemes%2Ftravelog%2F2016%2F05%2F14%2F5-sunny-days-in-malaga%2F"
            class="share facebook"
            target="_blank"
            title="Share on Facebook"
            ><i class="fab fa-facebook-f fa-fw"></i>
          </a>
          <a
            href="http://twitter.com/intent/tweet?source=Travelog&amp;text=http%3A%2F%2Fdemo.djmimi.net%2Fthemes%2Ftravelog%2F2016%2F05%2F14%2F5-sunny-days-in-malaga%2F"
            class="share twitter"
            target="_blank"
            title="Share on Twitter"
            ><i class="fab fa-twitter fa-fw"></i
          ></a>
          <a
            href="https://plus.google.com/share?url=http%3A%2F%2Fdemo.djmimi.net%2Fthemes%2Ftravelog%2F2016%2F05%2F14%2F5-sunny-days-in-malaga%2F"
            class="share google"
            target="_blank"
            title="Share on Google+"
            ><i class="fab fa-google fa-fw"></i
          ></a>
          <a
            href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fdemo.djmimi.net%2Fthemes%2Ftravelog%2F2016%2F05%2F14%2F5-sunny-days-in-malaga%2F&amp;title=5%20Sunny%20Days%20In%20Malaga&amp;summary=City%2C%20seaport%20and%20holiday%20resort%20on%20the%20Mediterranean%20in%20South%20Spain.%20M%C3%A1laga%20is%20the%20heart%20of%20the%20Costa%20del%20Sol%2C%20a%20major%20tourist%20region.%20Birthplace%20of%20Picasso%2C%20the%20vibrant%20cosmopolitan%20city%20of%20M%C3%A1laga%20is%20situated%20on%20the%20beautiful%20Andaluc%C3%ADa%20coastline.%20Blessed%20with%20sunshine%20and%20fantastic%20quality%20of%20life%2C%20M%C3%A1laga%20provides%20lively%20nightlife%2C%20museums%20and%20exceptional...&amp;source=Travelog"
            class="share linkedin"
            target="_blank"
            title="Share on LinkedIn"
            ><i class="fab fa-linkedin fa-fw"></i
          ></a>
          <a
            href="http://www.tumblr.com/share/link?url=http%3A%2F%2Fdemo.djmimi.net%2Fthemes%2Ftravelog%2F2016%2F05%2F14%2F5-sunny-days-in-malaga%2F&amp;name=5%20Sunny%20Days%20In%20Malaga&amp;description=City%2C%20seaport%20and%20holiday%20resort%20on%20the%20Mediterranean%20in%20South%20Spain.%20M%C3%A1laga%20is%20the%20heart%20of%20the%20Costa%20del%20Sol%2C%20a%20major%20tourist%20region.%20Birthplace%20of%20Picasso%2C%20the%20vibrant%20cosmopolitan%20city%20of%20M%C3%A1laga%20is%20situated%20on%20the%20beautiful%20Andaluc%C3%ADa%20coastline.%20Blessed%20with%20sunshine%20and%20fantastic%20quality%20of%20life%2C%20M%C3%A1laga%20provides%20lively%20nightlife%2C%20museums%20and%20exceptional..."
            class="share tumblr"
            target="_blank"
            title="Share on Tumblr"
            ><i class="fab fa-tumblr fa-fw"></i
          ></a>
        </div>
      </div>
</div>
