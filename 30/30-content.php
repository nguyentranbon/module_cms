<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-30">
<div class="white-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-push-1">
              <div class="comments-wrap">
                <!-- title -->
                <h4 class="extra-margin">2 Comments</h4>
                <!--.title -->

                <!-- comments -->
                <div class="comment-content comments">
                  <!-- comment -->
                  <div class="comment-row clearfix" id="comment-10">
                    <div class="comment-header">
                      <img
                        src="http://<?php echo $url_path ?>/images/avatar-2.jpg"
                        width="60"
                        height="60"
                        alt="Mark Doe"
                        class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo"
                      />
                      <div class="comment-info">
                        <h5>Mark Doe</h5>
                        <p class="comment-time">May 16, 2016 @ 07:26</p>
                      </div>
                    </div>
                    <div class="comment-reply">
                      <a
                        rel="nofollow"
                        class="comment-reply-login"
                        href="../../../../wp-login51f5.html?redirect_to=http%3A%2F%2Fdemo.djmimi.net%2Fthemes%2Ftravelog%2F2015%2F07%2F14%2Fno-sleep-in-new-york%2F"
                        >Log in to Reply</a
                      >
                    </div>
                    <div class="comment-content-wrap">
                      <p>
                        Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae dicta sunt explicabo.
                      </p>
                    </div>
                  </div>
                  <!-- comment -->
                  <div
                    class="comment-row comment-margin-left clearfix"
                    id="comment-21"
                  >
                    <div class="comment-header">
                      <img
                        src="http://<?php echo $url_path ?>/images/avatar-6.jpg"
                        width="60"
                        height="60"
                        alt="Ally Star"
                        class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo"
                      />
                      <div class="comment-info">
                        <h5>Ally Star</h5>
                        <p class="comment-time">May 16, 2016 @ 07:28</p>
                      </div>
                    </div>
                    <div class="comment-reply">
                      <a
                        rel="nofollow"
                        class="comment-reply-login"
                        href="../../../../wp-login51f5.html?redirect_to=http%3A%2F%2Fdemo.djmimi.net%2Fthemes%2Ftravelog%2F2015%2F07%2F14%2Fno-sleep-in-new-york%2F"
                        >Log in to Reply</a
                      >
                    </div>
                    <div class="comment-content-wrap">
                      <p>
                        Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae dicta sunt explicabo.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- .comments -->

                <!-- comments pagination -->
                <!-- .comments pagination -->
              </div>
              <div class="leave-comment">
                <h4 class="extra-margin">Leave Comment</h4>

                <div id="contact_form">
                  <div id="respond" class="comment-respond">
                    <h3 id="reply-title" class="comment-reply-title">
                      <small
                        ><a
                          rel="nofollow"
                          id="cancel-comment-reply-link"
                          href="index.html#respond"
                          style="display: none"
                          >or cancel reply</a
                        ></small
                      >
                    </h3>
                    <p class="must-log-in">
                      You must be
                      <a
                        href="../../../../wp-login51f5.html?redirect_to=http%3A%2F%2Fdemo.djmimi.net%2Fthemes%2Ftravelog%2F2015%2F07%2F14%2Fno-sleep-in-new-york%2F"
                        >logged in</a
                      >
                      to post a comment.
                    </p>
                  </div>
                  <!-- #respond -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
