@extends('layoutFront')
@section('headerScrip')

@stop
@section('slider')
 <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both" style="background:#ddd;margin-top: 90px;">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Blog Grid View</h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li>/</li>
                        <li>
                            <a href="page-blog-grid.html">Blog Grid View</a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active">Jango Components</li>
                    </ul>
                </div>
            </div>
@stop
@section('contenido')

	<div class="container c-content-box c-size-md" style="margin-top: -80px;" >
                    <div class="row">
                        <div class="col-md-9">
                            <div class="c-content-blog-post-card-1-grid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="c-content-blog-post-card-1 c-option-2 c-bordered">
                                            <div class="c-media c-content-overlay">
                                                <div class="c-overlay-wrapper">
                                                    <div class="c-overlay-content">
                                                        <a href="#">
                                                            <i class="icon-link"></i>
                                                        </a>
                                                        <a href="{{URL::asset('/img/content/shop2/01.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <img class="c-overlay-object img-responsive" src="{{URL::asset('/img/content/shop2/01.jpg')}}" alt=""> 
                                            </div>
                                            <div class="c-body">
                                                <div class="c-title c-font-bold c-font-uppercase">
                                                    <a href="#">Realiadad aumentada</a>
                                                </div>
                                                <div class="c-author"> By
                                                    <a href="#">
                                                        <span class="c-font-uppercase">michael</span>
                                                    </a> on
                                                    <span class="c-font-uppercase">20 May 2015, 10:30AM</span>
                                                </div>
                                                <div class="c-panel">
                                                    <ul class="c-tags c-theme-ul-bg">
                                                        <li>ux</li>
                                                        <li>web</li>
                                                        <li>events</li>
                                                    </ul>
                                                    <div class="c-comments">
                                                        <a href="#">
                                                            <i class="icon-speech"></i> 30 comments</a>
                                                    </div>
                                                </div>
                                                <p> Lorem ipsum dolor sit amet, dolor adipisicing dolor sit amet elit atis unde omnis iste natus error sit dolor. Nulla nemo ad sapiente officia amet. Sed ut perspiciatis unde omnis iste natus error sit. </p>
                                            </div>
                                        </div>
                                     
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="c-content-blog-post-card-1 c-option-2 c-bordered">
                                            <div class="c-media c-content-overlay">
                                                <div class="c-overlay-wrapper">
                                                    <div class="c-overlay-content">
                                                        <a href="#">
                                                            <i class="icon-link"></i>
                                                        </a>
                                                        <a href="{{URL::asset('/img/content/stock2/04.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <img class="c-overlay-object img-responsive" src="{{URL::asset('/img/content/stock2/04.jpg')}}" alt=""> </div>
                                            <div class="c-body">
                                                <div class="c-title c-font-bold c-font-uppercase">
                                                    <a href="#">Code optimization</a>
                                                </div>
                                                <div class="c-author"> By
                                                    <a href="#">
                                                        <span class="c-font-uppercase">Paul Roger</span>
                                                    </a> on
                                                    <span class="c-font-uppercase">26 May 2015, 10:30AM</span>
                                                </div>
                                                <div class="c-panel">
                                                    <ul class="c-tags c-theme-ul-bg">
                                                        <li>code</li>
                                                        <li>clean</li>
                                                        <li>HTML</li>
                                                    </ul>
                                                    <div class="c-comments">
                                                        <a href="#">
                                                            <i class="icon-speech"></i> 17 comments</a>
                                                    </div>
                                                </div>
                                                <p> Lorem ipsum dolor sit amet, dolor adipisicing dolor sit amet elit. Nulla nemo ad sapiente officia amet. </p>
                                            </div>
                                        </div>
                                       
                                  
                                    </div>
                                </div>
                                <div class="c-pagination">
                                    <ul class="c-content-pagination c-theme">
                                        <li class="c-prev">
                                            <a href="#">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li class="c-active">
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li class="c-next">
                                            <a href="#">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control c-square c-theme-border" placeholder="Search blog...">
                                    <span class="input-group-btn">
                                        <button class="btn c-theme-btn c-theme-border c-btn-square" type="button">Go!</button>
                                    </span>
                                </div>
                            </form>
                            <div class="c-content-ver-nav">
                                <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                                    <h3 class="c-font-bold c-font-uppercase">Categories</h3>
                                    <div class="c-line-left c-theme-bg"></div>
                                </div>
                                <ul class="c-menu c-arrow-dot1 c-theme">
                                    <li>
                                        <a href="#">Web Development(2)</a>
                                    </li>
                                    <li>
                                        <a href="#">UX Design(12)</a>
                                    </li>
                                    <li>
                                        <a href="#">Mobile Development(5)</a>
                                    </li>
                                    <li>
                                        <a href="#">Internet Marketing(7)</a>
                                    </li>
                                    <li>
                                        <a href="#">Social Networks(11)</a>
                                    </li>
                                    <li>
                                        <a href="#">Web Design(18)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-content-tab-1 c-theme c-margin-t-30">
                                <div class="nav-justified">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#blog_recent_posts" data-toggle="tab">Recent Posts</a>
                                        </li>
                                        <li>
                                            <a href="#blog_popular_posts" data-toggle="tab">Popular Posts</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="blog_recent_posts">
                                            <ul class="c-content-recent-posts-1">
                                                <li>
                                                    <div class="c-image">
                                                        <img src="{{URL::asset('/img/content/stock2/04.jpg')}}" alt="" class="img-responsive"> </div>
                                                    <div class="c-post">
                                                        <a href="" class="c-title"> UX Design Expo 2015... </a>
                                                        <div class="c-date">27 Jan 2015</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="c-image">
                                                        <img src="{{URL::asset('/img/content/stock2/04.jpg')}}" alt="" class="img-responsive"> </div>
                                                    <div class="c-post">
                                                        <a href="" class="c-title"> UX Design Expo 2015... </a>
                                                        <div class="c-date">27 Jan 2015</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="c-image">
                                                        <img src="{{URL::asset('/img/content/stock2/04.jpg')}}" alt="" class="img-responsive"> </div>
                                                    <div class="c-post">
                                                        <a href="" class="c-title"> UX Design Expo 2015... </a>
                                                        <div class="c-date">27 Jan 2015</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="c-image">
                                                        <img src="{{URL::asset('/img/content/stock2/04.jpg')}}" alt="" class="img-responsive"> </div>
                                                    <div class="c-post">
                                                        <a href="" class="c-title"> UX Design Expo 2015... </a>
                                                        <div class="c-date">27 Jan 2015</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="blog_popular_posts">
                                            <ul class="c-content-recent-posts-1">
                                                <li>
                                                    <div class="c-image">
                                                        <img src="{{URL::asset('/img/content/stock2/04.jpg')}}" class="img-responsive" alt="" /> </div>
                                                    <div class="c-post">
                                                        <a href="" class="c-title"> UX Design Expo 2015... </a>
                                                        <div class="c-date">27 Jan 2015</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="c-image">
                                                        <img src="{{URL::asset('/img/content/stock2/04.jpg')}}" class="img-responsive" alt="" /> </div>
                                                    <div class="c-post">
                                                        <a href="" class="c-title"> UX Design Expo 2015... </a>
                                                        <div class="c-date">27 Jan 2015</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="c-image">
                                                        <img src="{{URL::asset('/img/content/stock2/04.jpg')}}" class="img-responsive" alt="" /> </div>
                                                    <div class="c-post">
                                                        <a href="" class="c-title"> UX Design Expo 2015... </a>
                                                        <div class="c-date">27 Jan 2015</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="c-image">
                                                        <img src="{{URL::asset('/img/content/stock2/04.jpg')}}" class="img-responsive" alt="" /> </div>
                                                    <div class="c-post">
                                                        <a href="" class="c-title"> UX Design Expo 2015... </a>
                                                        <div class="c-date">27 Jan 2015</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-content-ver-nav">
                                <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                                    <h3 class="c-font-bold c-font-uppercase">Blogs</h3>
                                    <div class="c-line-left c-theme-bg"></div>
                                </div>
                                <ul class="c-menu c-arrow-dot c-theme">
                                    <li>
                                        <a href="#">Fasion & Arts</a>
                                    </li>
                                    <li>
                                        <a href="#">UX & Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Mobile Development</a>
                                    </li>
                                    <li>
                                        <a href="#">Internet Marketing</a>
                                    </li>
                                    <li>
                                        <a href="#">Frontend Development</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


@stop

@section('script')



@stop


