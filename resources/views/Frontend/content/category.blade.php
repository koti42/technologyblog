@extends('Frontend.layout')
@section('title','Anasayfa')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg="Frontend/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h3>Categories: <span>hardware</span></h3>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <a href="#">Latest posts</a>
                            <span>Hardware</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Categories Grid Section Begin -->
    <section class="categories-grid-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <div class="row">

                        @foreach($data['reviews'] as $category)
                        <div class="col-lg-6">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="/images/inceleme/{{$category->review_file}}">
                                    <div class="label"><span>{{$category->review_plartform}}</span></div>
                                </div>
                                <div class="cg-text">


                                    <h5><a href="{{route('Detail',$category->review_slug)}}">{{$category->review_title}}</a></h5>
                                    <ul>
                                        <li>by <span>{{$category->author}}</span></li>
                                        <li><i class="fa fa-clock-o"></i>{{$category->created_at}}</li>
                                        <li><i class="fa fa-comment-o"></i>{{$category->review_comment}}</li>

                                    </ul>

                              <p>{{$category->short_description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach







                    </div>
                    <div class="">

                        {{ $data['reviews']->links('vendor.pagination.custom2') }}

                    </div>
                </div>
                <div class="col-lg-4 col-md-7 p-0">
                    <div class="sidebar-option">
                        <div class="social-media">
                            <div class="section-title">
                                <h5>Social media</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-facebook"></i></div>
                                    <span>Facebook</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-twitter"></i></div>
                                    <span>Twitter</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-youtube-play"></i></div>
                                    <span>Youtube</span>
                                    <div class="follow">2,3k Subs</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-instagram"></i></div>
                                    <span>Instagram</span>
                                    <div class="follow">2,6k Follow</div>
                                </li>
                            </ul>
                        </div>
                        <div class="hardware-guides">
                            <div class="section-title">
                                <h5>Hardware guides</h5>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="/Frontend/img/trending/trending-5.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="/Frontend/img/trending/trending-6.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">Facebook wants to read your thoughts with its augmented...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="/Frontend/img/trending/trending-7.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660 Ti and 32GB of RAM is down...</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="/Frontend/img/trending/trending-8.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="insta-media">
                            <div class="section-title">
                                <h5>Instagram</h5>
                            </div>
                            <div class="insta-pic">
                                <img src="/Frontend/img/instagram/ip-1.jpg" alt="">
                                <img src="/Frontend/img/instagram/ip-2.jpg" alt="">
                                <img src="/Frontend/img/instagram/ip-3.jpg" alt="">
                                <img src="/Frontend/img/instagram/ip-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="best-of-post">
                            <div class="section-title">
                                <h5>Best of</h5>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-1" data-cpvalue="95" data-cpcolor="#c20000"><div class="id-1"><canvas width="60" height="60"></canvas></div><div class="progress-value"></div></span>
                                            <div class="review-point">9.5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-2" data-cpvalue="85" data-cpcolor="#c20000"><div class="id-2"><canvas width="60" height="60"></canvas></div><div class="progress-value"></div></span>
                                            <div class="review-point">8.5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-3" data-cpvalue="80" data-cpcolor="#c20000"><div class="id-3"><canvas width="60" height="60"></canvas></div><div class="progress-value"></div></span>
                                            <div class="review-point">8.0</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-4" data-cpvalue="75" data-cpcolor="#c20000"><div class="id-4"><canvas width="60" height="60"></canvas></div><div class="progress-value"></div></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="subscribe-option">
                            <div class="section-title">
                                <h5>Subscribe</h5>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor.</p>
                            <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <button type="submit"><span>Subscribe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Grid Section End -->

@endsection
@section('js')@endsection
@section('css')@endsection
