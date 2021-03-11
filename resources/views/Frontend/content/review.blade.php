@extends('Frontend.layout')
@section('title','Anasayfa')
@section('content')


    <!-- Details Hero Section Begin -->
    <section class="details-hero-section set-bg" data-setbg="/Frontend/img/details/details-post-review.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-hero-text">
                        <div class="label"><span>Playstation</span></div>
                        <div class="label"><span>Hardware</span></div>
                        <h3>Jupiter Hell, the spiritual successor to a Doom roguelike week</h3>
                        <ul>
                            <li>by <span></span></li>
                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                            <li><i class="fa fa-comment-o"></i> 20</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Details Hero Section End -->

    <!-- Details Post Section Begin -->
    <section class="details-post-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <div class="details-text">
                        <div class="dt-desc">
                            <P>{!! $data->review_content!!}</P>
                        </div>
                        <div class="dt-quote">
                            <p>“ Mutluluğu ve huzuru ise silahların patlama anlarının arasında çöken 5 saniyelik
                                sessizliklerde buldum, benim adım Michael De Santa ve hayatımda kimseyi sevmedim..” -
                                <span>Michael De Santa</span></p>
                        </div>
                        <div class="dt-overall-rating">
                            <div class="or-heading">
                                <div class="or-item">
                                    <div class="or-loader">
                                        <div class="loader-circle-wrap">
                                            <div class="loader-circle">
                                                <span class="circle-progress-2" data-cpid="id-5" data-cpvalue="85"
                                                      data-cpcolor="#c20000"></span>

                                                <div class="review-point">
                                                    <div>
                                                        <script !src="">
                                                            var sayi = {{$data->ort}}
                                                                sayi = sayi.toFixed(1);
                                                            if (sayi == 10.0) {
                                                                sayi = 10;
                                                                document.write(sayi);
                                                            } else {
                                                                document.write(sayi);
                                                            }

                                                        </script>
                                                    </div>
                                                    <span>AVERAGE SCORE</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="or-text">
                                        <h5>Genel Değerlendirme</h5>
                                        <p>{{$data->short_description}}</p>
                                    </div>
                                </div>
                                <div class="or-skill">
                                    <div class="skill-item">
                                        <p>Tasarım</p>
                                        <div id="bar-1" class="barfiller">
                                            <span class="fill" data-percentage="80"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">{{$data->design}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <p>Design</p>
                                        <div id="bar-2" class="barfiller">
                                            <span class="fill" data-percentage="80"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">8.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <p>Design</p>
                                        <div id="bar-3" class="barfiller">
                                            <span class="fill" data-percentage="78"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">7.8</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <p>Design</p>
                                        <div id="bar-4" class="barfiller">
                                            <span class="fill" data-percentage="85"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">8.5</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <p>Design</p>
                                        <div id="bar-5" class="barfiller">
                                            <span class="fill" data-percentage="90"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">9.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <p>Design</p>
                                        <div id="bar-6" class="barfiller">
                                            <span class="fill" data-percentage="80"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">9.7</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="or-qualities">
                                <div class="qualities-item">
                                    <p>The Goods</p>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Ut enim veniam, quis nostrud exercitation.</li>
                                        <li><i class="fa fa-check"></i> Irure dolor in reprehenderit in voluptate velit.
                                        </li>
                                        <li><i class="fa fa-check"></i> Excepteur sint occaecat cupidatat proident.</li>
                                        <li><i class="fa fa-check"></i> Sed ut perspiciatis unde omnis iste natus error.
                                        </li>
                                    </ul>
                                </div>
                                <div class="qualities-item bad-item">
                                    <p>The bads</p>
                                    <ul>
                                        <li><i class="fa fa-close"></i> Ut enim veniam, quis nostrud exercitation.</li>
                                        <li><i class="fa fa-close"></i> Irure dolor in reprehenderit in voluptate velit.
                                        </li>
                                        <li><i class="fa fa-close"></i> Excepteur sint occaecat cupidatat proident.</li>
                                        <li><i class="fa fa-close"></i> Sed ut perspiciatis unde omnis iste natus error.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="dt-tags">
                            <a href="#"><span>Gaming</span></a>
                            <a href="#"><span>Platform</span></a>
                            <a href="#"><span>Playstation</span></a>
                            <a href="#"><span>Hardware</span></a>
                        </div>
                        <div class="dt-share">
                            <div class="ds-title">Share</div>
                            <div class="ds-links">
                                <a href="#" class="wide"><i class="fa fa-heart-o"></i><span>120</span></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                        <div class="dt-related-post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="#" class="rp-prev">
                                        <span>Prev</span>
                                        <div class="rp-pic">
                                            <img src="/Frontend/img/details/prev.jpg" alt="">
                                        </div>
                                        <div class="rp-text">
                                            <h6>The Real-Estate Developers Are the Enemy</h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" class="rp-next">
                                        <span>Next</span>
                                        <div class="rp-pic">
                                            <img src="/Frontend/img/details/next.jpg" alt="">
                                        </div>
                                        <div class="rp-text">
                                            <h6>Montreal real estate: Bargains in cottage countrya</h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dt-author">
                            <div class="da-pic">
                                <img src="/Frontend/img/details/author-pic.jpg" alt="">
                            </div>
                            <div class="da-text">
                                <h5>Almil Hmaper</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="da-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>





                        <h4><font color="white">Yorum Sayısı {{$veri}}</font></h4>
                        <br>
                        @foreach($comments as $comments)
                            @if($comments->approval_status==1)
                                <div class="dt-comment">

                                    <div class="dc-item">
                                        <div class="dc-pic">
                                            <img src="/Frontend/img/details/comment/comment-3.jpg" alt="">
                                        </div>
                                        <div class="dc-text" id="{{$comments->id}}">


                                            <h5>{{$comments->Ad}}</h5>
                                            <span class="c-date">{{$comments->created_at}}</span>
                                            <p>{{$comments->content}}</p>

                                           <a id="{{$comments->id}}" href="javascript: none;"
                                             class="reply-btn" value=""><span id="{{$comments->id}}">Cevapla</span>
                                               <input id="{{$comments->Ad}}" type="hidden"></a>

                                        </div>
                                    </div>



                                    @foreach($repy_comment as $reply)
                                        @if($comments->id==$reply->id_reply)
                                        <div class="dc-item reply-item">
                                            <div class="dc-pic">
                                                <img src="/Frontend/img/details/comment/comment-2.jpg" alt="">
                                            </div>
                                            <div class="dc-text">
                                                <h5>{{$reply->Ad}}</h5>
                                                <span class="c-date">{{$reply->created_at}}</span>
                                                <p>{{$reply->content}}.</p>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach


                                </div>
                            @endif


                                <div id="{{$comments->id}}" class="dt-leave-comment" style="display: none;">
                                    <h4>Bir Yoruma Cevap verin</h4>
                                    <form action="{{route('yorum_gonder.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-list">

                                            <input required maxlength="60" requiredtype="text" name="Name" placeholder="İsim">

                                            <input maxlength="300" required type="email" name="Email"
                                                   placeholder="Mail Adresiniz">

                                            <input name="reply_comment" type="text" id="reply2" readonly="yes" placeholder="Yorumuna Cevap Verilen Kişi:" value="">
                                            <input type="hidden" id="reply3" name="ID">
                                            <input type="hidden" name="comment_slug" placeholder="Mail Adresiniz"
                                                   value="{{$data->review_slug}}">

                                        </div>


                                        <textarea id="txtMesaj" required maxlength="500" name="Message"
                                                  placeholder="Yorumunuz">  </textarea>


                                        <button type="submit">Yorumu Gönder</button>
                                        <br>
                                        <button class="button-a-soft" type="button">Yanıt Vermekten Vazgeç</button>
                                    </form>
                                </div>


                        @endforeach



                        <style>
                            input {
                                background-color: white;
                            }
                        </style>


                        <div class="dt-leave-comment">
                            <h4>Bir Yorum Yazın</h4>
                            <form action="{{route('yorum_gonder.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="input-list">

                                    <input required maxlength="60" requiredtype="text" name="Name" placeholder="İsim">

                                    <input maxlength="300" required type="email" name="Email"
                                           placeholder="Mail Adresiniz">

                                    <input name="reply_comment" type="text" id="reply2" readonly="yes" placeholder="Yorumuna Cevap Verilen Kişi:" value="">
                                    <input type="hidden" id="reply3" name="ID">
                                    <input type="hidden" name="comment_slug" placeholder="Mail Adresiniz"
                                           value="{{$data->review_slug}}">

                                </div>


                                <textarea id="txtMesaj" required maxlength="500" name="Message"
                                          placeholder="Yorumunuz">  </textarea>


                                <button type="submit">Yorumu Gönder</button>
                                <br>
                                <button class="button-a-soft" type="button">Yanıt Vermekten Vazgeç</button>
                            </form>
                        </div>
                        <font color="white"> <span
                                id="kalanKarakter">Kalan Karakter <strong>500</strong></span><br></font>





                        <!-- BU SCRİPT DOSYASI NE KADAR KARAKTER GİRME HAKKIN KALDIĞINI GÖSTERİR -->
                        <script>


                            $(function () {
                                $("#txtMesaj").keyup(function () {
                                    var limit = 500; // max kaç karakter olacak
                                    $("#txtMesaj").attr('maxlength', limit); // text e limit değişkeni değerinden fazla yazı yazılmasın
                                    var kalanKarakter = limit - $("#txtMesaj").val().length;
                                    if (kalanKarakter >= 0) {
                                        $("#kalanKarakter strong").html(kalanKarakter);
                                    }
                                });
                            });
                        </script>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif


                </div>

    <!-- Details Post Section End -->

                <script type="text/javascript">







                </script>

@endsection
@section('js')@endsection
@section('css')@endsection
