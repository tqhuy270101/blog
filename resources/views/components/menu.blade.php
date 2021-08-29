<!-- menu -->

<?php
    $message = Session::get('message');
    if ($message) {
        echo "<script type='text/javascript'>alert('$message');</script>";
        Session::put('message', null);
    }
    
?>

<div class="row navbar-container-top">
    <div class="col navbar-link">
        <a class="about-contact-navbar" href="/about-us" ><span>About</span></a>
        <a class="about-contact-navbar" href="/contact-us"><span>Contact</span></a>
    </div>
    <div class="col d-flex justify-content-end big-navbar-icon">
        <a class="icon-navbar" target="_blank" href="http://facebook.com"><i class="fab fa-facebook fa-lg"></i></a>
        <a class="icon-navbar" target="_blank" href="http://instagram.com/"><i class="fab fa-instagram-square fa-lg"></i></a>
        <a class="icon-navbar" target="_blank" href="http://youtube.com/"><i class="fab fa-youtube fa-lg"></i></a>
    </div>
</div>
<div class="row navbar-menu">
    <div class="col">
        <a class="navbar-logo-menu" href="{{ route('user.home') }}"><img src="https://f.hubspotusercontent40.net/hubfs/19948095/logo-1.svg" alt="Logo"></a>
        <span class="navbar-link-menu">
            <a class="navbar-item-menu" href="{{ route('user.home') }}"><Span>Home</Span></a>
            <a class="navbar-item-menu" href="{{route('user.blog')}}">Blog</a>
            <span class="dropdown">
                <a class="navbar-item-menu dropdown-item-menu" id="dropdownMenuPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages&nbsp;&nbsp;&nbsp;<i class="fas fa-tint fa-sm"></i>
                </a>
                <div class="dropdown-menu navbar-menu-dropdown" aria-labelledby="dropdownMenuPages">
                    <a class="dropdown-item" href="{{ route('user.aboutUs') }}">About Us</a>
                    <a class="dropdown-item" href="#">About Me</a>
                    <a class="dropdown-item" href="#">Team</a>
                    <a class="dropdown-item" href="#">Portfolio</a>
                    <a class="dropdown-item" href="#">Pricing</a>
                    <a class="dropdown-item" href="#">Services</a>
                    <a class="dropdown-item" href="#">Contact</a>
                    <a class="dropdown-item" href="#">Landing Page</a>
                    <a class="dropdown-item" href="#">FAQ</a>
                    <a class="dropdown-item" href="#">Terms</a>
                </div>
            </span>
        </span>
    </div>
    <div class="col-4 d-flex justify-content-end right-navbar-menu">
        <span class="item-icon-navbar-right">
            <i class="fas fa-search" data-toggle="modal" data-target="#exampleModalSearch"></i>
            <!-- Modal search -->
            <div class="modal fade search" id="exampleModalSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body d-flex justify-content-center">
                            <form class="form-group row justify-content-center d-flex align-items-center navbar-search" action="{{route('user.search')}}" method="get">
                                @csrf
                                <div class="col-10">
                                    <input class="form-control input-search" type="search" placeholder="Search" aria-label="Search" name="search">
                                </div>
                                <i class="fas fa-search" color=""></i>                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="dropdown item-icon-navbar-right">
            <i class="fas fa-phone-alt" id="dropdownMenuCall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
            <div class="dropdown-menu navbar-menu-call" aria-labelledby="dropdownMenuCall">
                <a class="dropdown-item" href="tel:+442135268170">
                    <p class="title-menu-call">Phone Hotline</p>
                    <p class="info-menu-call">(+84) 862 957 787</p>
                </a>
                <a class="dropdown-item" href="#">
                    <p class="title-menu-call">Email</p>
                    <p class="info-menu-call">Tqhuy.19it3@vku.udn.vn</p>
                </a>
            </div>
        </span>
        <span class="item-icon-navbar-right login">
            <?php 
                $right = Session::get('right');
                if (!$right) {
                    echo "<a href='/login' class='btn-login-navbar'>Login</a>";
                } else {
                    echo "<a href='/logout' class='btn-login-navbar'>LogOut</a>";
                }
            ?>
        </span>
        <span class="item-icon-navbar-right btn-navbar-mobile-toggle">
            <button class="btn-navbar-mobile navbar-toggler" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-bars"></i>
            </button>
        </span>
    </div>
</div>
<!-- modal navbar -->
<div class="modal navbar fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close navbar" data-dismiss="modal" aria-label="Close">
                            <span><i class="fas fa-times"></i></span>
                        </button>
                        <div class="link-navbar-mobile">
                            <div class="home link">
                                <a class="link2" href="#">Home</a><br>
                            </div>
                            <div class="pages link">
                                <a class="link2" data-toggle="collapse" href="#collapseExamplePages" role="button" aria-expanded="false" aria-controls="collapseExamplePages">
                                    Pages&nbsp;&nbsp;&nbsp;<i class="fas fa-tint fa-sm"></i>
                                </a>
                                <div class="collapse" id="collapseExamplePages">
                                    <div class="card-body">
                                        <div class="link1"><a class="link2" href="#">About Us</a></div>
                                        <div class="link1"><a class="link2" href="#">About Me</a></div>
                                        <div class="link1"><a class="link2" href="#">Team</a></div>
                                        <div class="link1"><a class="link2" href="#">Portfolio</a></div>
                                        <div class="link1"><a class="link2" href="#">Pricing</a></div>
                                        <div class="link1"><a class="link2" href="#">Service</a></div>
                                        <div class="link1"><a class="link2" href="#">Contact</a></div>
                                        <div class="link1"><a class="link2" href="#">Landing</a></div>
                                        <div class="link1"><a class="link2" href="#">FAQ</a></div>
                                        <div class="link1"><a class="link2" href="#">Terms</a></div>
                                    </div>      
                                </div>
                            </div>
                            <div class="blog link">
                                <a class="link2" data-toggle="collapse" href="#collapseExampleBlog" role="button" aria-expanded="false" aria-controls="collapseExampleBlog">
                                    Blog&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-tint fa-sm"></i>
                                </a>
                                <div class="collapse" id="collapseExampleBlog">
                                    <div class="card-body">
                                        <div class="link1"><a class="link2" href="#">Blog Listing</a></div>
                                        <div class="link1"><a class="link2" href="#">Blog Post</a></div>
                                    </div>      
                                </div>
                            </div>
                            <div class="hr-navbar"><hr></div>
                            <div class="blog link">
                                <a class="link2" href="#">About</a><br>
                            </div>
                            <div class="blog link">
                                <a class="link2" href="#">Contact</a><br>
                            </div>
                            <div class="bottom-navbar-mobile">
                                <div class="btn-get-started">
                                    <a class="btn-link" href="#">Get Started</a>
                                </div>
                                <div class="icon-navbar-icon">
                                    <a class="icon-navbar" target="_blank" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                                    <a class="icon-navbar" target="_blank" href="http://instagram.com/"><i class="fab fa-instagram-square"></i></a>
                                    <a class="icon-navbar" target="_blank" href="http://youtube.com/"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>