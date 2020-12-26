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
        <a href="#">beach</a
        ><a href="#">sea</a
        ><a href="#">spain</a
        ><a href="#">sunny</a
        ><a href="#">vacation</a>
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
            href="#"
            class="share facebook"
            target="_blank"
            title="Share on Facebook"
            ><i class="fa fa-facebook-f fa-fw"></i>
          </a>
          <a
            href="#"
            class="share twitter"
            target="_blank"
            title="Share on Twitter"
            ><i class="fa fa-twitter fa-fw"></i
          ></a>
          <a
            href="#"
            class="share google"
            target="_blank"
            title="Share on Google+"
            ><i class="fa fa-google fa-fw"></i
          ></a>
          <a
            href="#"
            class="share linkedin"
            target="_blank"
            title="Share on LinkedIn"
            ><i class="fa fa-linkedin fa-fw"></i
          ></a>
          <a
            href="#"
            class="share tumblr"
            target="_blank"
            title="Share on Tumblr"
            ><i class="fa fa-tumblr fa-fw"></i
          ></a>
        </div>
      </div>
</div>
