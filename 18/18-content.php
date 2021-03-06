<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-33">
    <div class="container">
        <form method="get" class="searchform">
            <div class="travelog-form">
                <input type="text" value="" name="s" class="form-control" placeholder="Input search query and hit enter...">
            </div>
        </form>
    </div>
</div>

<div class="type-18">
    <nav class="navbar navbar-expand-lg navbar-light no-response">
        <div class="container">
            <div class="flex-wrap">
                <div class="flex-left">
                    <a href="#" class="logo">
                        <img src="http://<?php echo $url_path ?>/images/hinh18.png" alt="hinh18" width="252" height="50">
                    </a>
                </div> 
                <div class="flex-right">
                    <a href="#"><img src="http://<?php echo $url_path ?>/images/hinh18-2.png" alt="hinh18-2" width="728" height="90"></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home<i class="fa fa-angle-down fa-sm"></i></a>
                        <ul class=" dropdown-menu">
                            <li class="menu-item"><a href="#">Listing – Standard</a></li>
                            <li class="menu-item"><a href="#">Listing – Title Over</a></li>
                            <li class="menu-item"><a href="#">Listing – Title Over Block</a></li>
                            <li class="menu-item"><a href="#">No Sidebar</a></li>
                            <li class="menu-item"><a href="#">Sidebar</a></li>
                            <li class="menu-item"><a href="#">Featured Posts</a></li>
                            <li class="menu-item"><a href="#">Map</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Headers<i class="fa fa-angle-down"></i></a>
                        <ul class=" dropdown-menu">
                            <li class="menu-item"><a href="#">Standard</a></li>
                            <li class="menu-item"><a href="#">Top Menu</a></li>
                            <li class="menu-item"><a href="#">Bottom Menu</a></li>
                            <li class="menu-item"><a href="#">Bottom Menu Centered</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Areas<i class="fa fa-angle-down"></i></a>
                        <ul class=" dropdown-menu">
                            <li class="menu-item"><a href="#">USA</a></li>
                            <li class="menu-item"><a href="#">Top Russia</a></li>
                            <li class="menu-item"><a href="#">Spain Menu</a></li>
                            <li class="menu-item"><a href="#">Serbia</a></li>
                            <li class="menu-item"><a href="#">Sweeden</a></li>
                            <li class="menu-item"><a href="#">Morocco</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pages<i class="fa fa-angle-down"></i></a>
                        <ul class=" dropdown-menu">
                            <li class="menu-item"><a href="#">Full Width</a></li>
                            <li class="menu-item"><a href="#">Left Sidebar</a></li>
                            <li class="menu-item"><a href="#">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item search">
                        <a href="javascript:;" class="trigger-search"><i class="fa fa-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="responsive1">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="http://<?php echo $url_path ?>/images/hinh18.png" alt="hinh18"></a>
                <div class="fix-right">
                    <ul class="list-inline">
                        <li>
                            <a class="navbar-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="trigger-search">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="navigation">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto responsive2">
                        <li class="nav-item active">
                            <a class="nav-link " href="#">Home<i class="fa fa-angle-down fa-sm"></i></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="#">Listing – Standard</a></li>
                                <li class="menu-item"><a href="#">Listing – Title Over</a></li>
                                <li class="menu-item"><a href="#">Listing – Title Over Block</a></li>
                                <li class="menu-item"><a href="#">No Sidebar</a></li>
                                <li class="menu-item"><a href="#">Sidebar</a></li>
                                <li class="menu-item"><a href="#">Featured Posts</a></li>
                                <li class="menu-item"><a href="#">Map</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Headers<i class="fa fa-angle-down" data-toggle="dropdown"  ></i></a>
                            <ul class=" dropdown-menu">
                                <li class="menu-item"><a href="#">Standard</a></li>
                                <li class="menu-item"><a href="#">Top Menu</a></li>
                                <li class="menu-item"><a href="#">Bottom Menu</a></li>
                                <li class="menu-item"><a href="#">Bottom Menu Centered</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Areas<i class="fa fa-angle-down"></i></a>
                            <ul class=" dropdown-menu">
                                <li class="menu-item"><a href="#">USA</a></li>
                                <li class="menu-item"><a href="#">Top Russia</a></li>
                                <li class="menu-item"><a href="#">Spain Menu</a></li>
                                <li class="menu-item"><a href="#">Serbia</a></li>
                                <li class="menu-item"><a href="#">Sweeden</a></li>
                                <li class="menu-item"><a href="#">Morocco</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pages<i class="fa fa-angle-down"></i></a>
                            <ul class=" dropdown-menu">
                                <li class="menu-item"><a href="#">Full Width</a></li>
                                <li class="menu-item"><a href="#">Left Sidebar</a></li>
                                <li class="menu-item"><a href="#">Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
    </div>
</div>
