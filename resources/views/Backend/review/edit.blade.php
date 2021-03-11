@extends('Backend.layout')
@section('title','Anasayfa')
@section('content')
    <head>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>
    </head>



        <div class="col-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Oyun İncelemeleri</h4>
                    <p class="card-description"> İçerik Düzenleme </p>
                    <form action="{{route('inceleme_duzenle.update',$review->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>İnceleme Başlığı Resmi</label>
                            @isset($review->review_file)

                                    <div class="" style="margin-right: 1000px">
                                            <img width="100" src="/images/haberler/{{$review->review_file}}" alt="">

                                </div>
                            @endisset

                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Plartform</label>
                            <select class="form-control" id="exampleSelectGender" name="review_plartform">
                                <option {{$review->review_plartform=="PLAYSTATION 5" ? "selected=''" : ""}} value="PLAYSTATION 5">PLAYSTATION 5</option>
                                <option {{$review->review_plartform=="XBOX ONE" ? "selected=''" : ""}} value="XBOX ONE">XBOX ONE</option>
                                <option {{$review->review_plartform=="PC" ? "selected=''" : ""}} value="PC">PC</option>
                                <option {{$review->review_plartform=="NINTENDO" ? "selected=''" : ""}} value="NINTENDO">NINTENDO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">İnceleme Başlığı</label>
                            <input type="text" class="form-control" name="review_title" id="exampleSelectGender" placeholder="Başlık" value="{{$review->review_title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Oyun Türü</label>
                            <select class="form-control" id="exampleSelectGender" name="review_type">
                                <option {{$review->review_type=="FPS - First Person Shooter" ? "selected=''" : ""}} value="FPS - First Person Shooter">FPS - First Person Shooter</option>
                                <option {{$review->review_type=="RTS - Real Time Strategy" ? "selected=''" : ""}} value="RTS - Real Time Strategy">RTS - Real Time Strategy</option>
                                <option {{$review->review_type=="TPS - Third Person Shooter" ? "selected=''" : ""}} value="TPS - Third Person Shooter">TPS - Third Person Shooter</option>
                                <option {{$review->review_type=="RPG - Role Playing review" ? "selected=''" : ""}} value="RTS - Real Time Strategy">RPG - Role Playing review</option>
                                <option {{$review->review_type=="MOBA - Multiplayer Online Battle Arena" ? "selected=''" : ""}} value="MOBA - Multiplayer Online Battle Arena">MOBA - Multiplayer Online Battle Arena</option>
                                <option {{$review->review_type=="H&S – Hack and Slash" ? "selected=''" : ""}} value="H&S – Hack and Slash">H&S – Hack and Slash</option>
                                <option {{$review->review_type=="J-RPG Japanese Role Playing review" ? "selected=''" : ""}} value="J-RPG Japanese Role Playing review">J-RPG Japanese Role Playing review</option>
                                <option {{$review->review_type=="Open World" ? "selected=''" : ""}} value="Open World">Open World</option>
                                <option {{$review->review_type=="Adventure" ? "selected=''" : ""}} value="Adventure">Adventure</option>
                                <option {{$review->review_type=="Simulation" ? "selected=''" : ""}} value="Simulation">Simulation</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">İnceleme'de Görünecek Link</label>
                            <input type="text" class="form-control" name="review_slug"  id="exampleSelectGender" placeholder="Haber'de görünmesini istediğiniz link" value="{{$review->review_slug}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCity1">Yazar</label>
                            <input type="text" class="form-control" name="author" id="exampleSelectGender" placeholder="İçerik Yazarı" value="{{$review->author}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">İnceleme Metni</label>
                            <textarea class="form-control" name="review_content" id="editor1">{{$review->review_content}}</textarea>
                            <script>
                                CKEDITOR.replace('editor1', {
                                    filebrowserUploadUrl: '/ckeditor/ck_upload.php',
                                    filebrowserUploadMethod: 'form'
                                });
                            </script>


                            <br>


                            <div class="form-group">
                                <label for="exampleInputEmail3">İnceleme Değerlendirme(Maks 250 Karakter)</label>
                                <input value="{{$review->short_description}}" required  maxlength="250" type="textarea" name="short_description" class="form-control" id="exampleSelectGender" placeholder="Kısa Değerlendirme Maks 250 Karakter">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tasarım Puanı (Min: 1, Max: 10)</label>
                                <input value="{{$review->design}}" placeholder="1-10 Arası" pattern="\d{2}" required class="form-control" type="number" id="quantity" name="design" min="1" max="10">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Optimizasyon (Min: 1, Max: 10)</label>
                                <input value="{{$review->optimization}}"placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control" type="number" id="quantity" name="optimization" min="1" max="10">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Oyuncu Değerlendirmeleri</label>
                                <input value="{{$review->player_comments}}" placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control"type="number" id="quantity" name="player_comments" min="1" max="10">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Hikaye Akıcılığı (Min: 1, Max: 10)</label>
                                <input value="{{$review->story}}"placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control"type="number" id="quantity" name="story" min="1" max="10">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Fiyat Değerlendirmesi (Min: 1, Max: 10)</label>
                                <input value="{{$review->price}}"placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control"type="number" id="quantity" name="price" min="1" max="10">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Oyun Süresi (Min: 1, Max: 10)</label>
                                <input value="{{$review->game_time}}" placeholder="1-10 Arası"pattern="\d{2}" required  class="form-control"type="number" id="quantity" name="game_time" min="1" max="10">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Oyun Hataları (Min: 1, Max: 10)</label>
                                <input value="{{$review->game_errors}}" placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control"type="number" id="quantity" name="game_errors" min="1" max="10">
                            </div>
























                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">İncelemeyi Düzenle</button>
                        <button type="button" value="Geri" onclick="history.back(-1)" class="btn btn-gradient-primary mr-2">İptal Et</button>

                    </form>
                    <br>
                </div>
            </div>
        </div>
@endsection
@section('js')@endsection
@section('css')@endsection
