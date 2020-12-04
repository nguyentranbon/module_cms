<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-25">
<div class="blog-header">
        <div class="container">
          <h1 class="post-title">Contact</h1>
        </div>
      </div>

      <div class="white-section">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-push-1">
              <div class="post-content clearfix"></div>

              <div class="contact-map hidden">
                ["45.2659584,19.8350193","45.2651946,19.8376351"]
              </div>

              <form id="comment-form" class="comment-form contact-form">
                <div class="form-group has-feedback">
                  <input
                    type="text"
                    class="form-control name"
                    id="name"
                    name="name"
                    placeholder="Your name *"
                  />
                </div>
                <div class="form-group has-feedback">
                  <input
                    type="text"
                    class="form-control email"
                    id="email"
                    name="email"
                    placeholder="Your email *"
                  />
                </div>
                <div class="form-group has-feedback">
                  <input
                    type="text"
                    class="form-control subject"
                    id="subject"
                    name="subject"
                    placeholder="Message subject *"
                  />
                </div>
                <div class="form-group has-feedback">
                  <textarea
                    rows="10"
                    cols="100"
                    class="form-control message"
                    id="message"
                    name="message"
                    placeholder="Your message *"
                  ></textarea>
                </div>
                <p class="form-submit">
                  <a href="javascript:;" class="send-contact btn"
                    >Send Message
                  </a>
                </p>
                <div class="send_result"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
