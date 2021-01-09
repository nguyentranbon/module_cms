<?php

/**
 * Template Name: Left Sidebar
 *
 * @package theme_nhom_a
 */

get_header();
?>

<div class="module-20">
    <div class="blog-media">

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <h1 class="left-sidebar">Left Sidebar</h1>
            <div class="mt-50">
                <?php
                dynamic_sidebar('archive');
                ?>
                <div class="module-34">
                    <?php
                    dynamic_sidebar('tags');
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="left-sidebar-21">
                
            </div>
            <div class="module-21">
                <div class="row">
                    <h2></h2>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="post-content clearfix">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi</p>
                            <blockquote>
                                <span class="fa fa-quote-left"></span>
                                <div class="div">
                                </div>
                                <p>Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin’ caught in the rain.)</p>
                                <span class="fa fa-quote-right"></span>
                            </blockquote>
                            <p>…or something like this:</p>
                            <blockquote>
                                <span class="fa fa-quote-left"></span>
                                <p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>
                                <span class="fa fa-quote-right"></span>
                            </blockquote>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
