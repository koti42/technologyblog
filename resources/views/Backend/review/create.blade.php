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
                    <p class="card-description"> İçerik Ekleme </p>


                    <form action="{{route('inceleme_ekle.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleSelectGender">Plartform</label>
                            <select class="form-control" name="review_plartform" id="exampleSelectGender">
                                <option value="PLAYSTATION 5">PLAYSTATION 5</option>
                                <option VALUE="XBOX ONE">XBOX ONE</option>
                                <option VALUE="PC">PC</option>
                                <option VALUE="NINTENDO">NINTENDO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">İnceleme Başlığı</label>
                            <input type="text" class="form-control" name="review_title" id="exampleSelectGender" placeholder="Başlık">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Oyun Türü</label>
                            <select class="form-control" id="exampleSelectGender" name="review_type">
                                <option VALUE="FPS - First Person Shooter">FPS - First Person Shooter</option>
                                <option VALUE="RTS - Real Time Strategy">RTS - Real Time Strategy</option>
                                <option VALUE="TPS - Third Person Shooter">TPS - Third Person Shooter</option>
                                <option VALUE="RPG - Role Playing Game">RPG - Role Playing Game</option>
                                <option VALUE="MOBA - Multiplayer Online Battle Arena">MOBA - Multiplayer Online Battle Arena</option>
                                <option VALUE="H&S – Hack and Slash">H&S – Hack and Slash</option>
                                <option VALUE="J-RPG Japanese Role Playing Game">J-RPG Japanese Role Playing Game</option>
                                <option value="Open World">Open World</option>
                                <option VALUE="Adventure">Adventure</option>
                                <option VALUE="Simulation">Simulation</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">İnceleme'de Görünecek Link</label>
                            <input type="text" name="review_slug" class="form-control" id="exampleSelectGender" placeholder="Haber'de görünmesini istediğiniz link">
                        </div>

                        <div class="form-group">
                            <label>Resim Seç</label>
                            <div class="row">
                                    <input class="form-control file-upload-info" placeholder="Upload Image"name="review_file" required type="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCity1">Yazar</label>
                            <input maxlength="50" type="text" class="form-control" name="author" id="exampleSelectGender" placeholder="İçerik Yazarı">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">İnceleme Metni</label>
                            <textarea class="form-control" name="review_content" id="editor1"></textarea>
                            <script>
                                CKEDITOR.replace('editor1', {
                                    filebrowserUploadUrl: '/ckeditor/ck_upload.php',
                                    filebrowserUploadMethod: 'form'
                                });
                            </script>
                        </div>




                        <div class="form-group">
                            <label for="exampleInputEmail3">İnceleme Değerlendirme(Maks 250 Karakter)</label>
                            <input required  maxlength="250" type="textarea" name="short_description" class="form-control" id="exampleSelectGender" placeholder="Kısa Değerlendirme Maks 250 Karakter">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Tasarım Puanı (Min: 1, Max: 10)</label>
                            <input placeholder="1-10 Arası" pattern="\d{2}" required class="form-control" type="number" id="sayi1" name="design" min="1" max="10">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Optimizasyon (Min: 1, Max: 10)</label>
                            <input placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control" type="number" id="sayi2" name="optimization" min="1" max="10">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Oyuncu Değerlendirmeleri</label>
                            <input placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control"type="number" id="sayi3" name="player_comments" min="1" max="10">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Hikaye Akıcılığı (Min: 1, Max: 10)</label>
                            <input placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control"type="number" id="sayi4" name="story" min="1" max="10">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Fiyat Değerlendirmesi (Min: 1, Max: 10)</label>
                            <input placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control"type="number" id="sayi5" name="price" min="1" max="10">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Oyun Süresi (Min: 1, Max: 10)</label>
                            <input placeholder="1-10 Arası"pattern="\d{2}" required  class="form-control"type="number" id="sayi6" name="game_time" min="1" max="10">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Oyun Hataları (Min: 1, Max: 10)</label>
                            <input placeholder="1-10 Arası" pattern="\d{2}" required  class="form-control"type="number" id="sayi7" name="game_errors" min="1" max="10">
                        </div>


                        <button type="submit" class="btn btn-gradient-primary mr-2">İncelemeyi Yükle</button>
                        <button type="button" value="Geri" onclick="history.back(-1)" class="btn btn-gradient-primary mr-2">İptal Et</button>

                    </form>

                </div>
            </div>

        </div>

@endsection
@section('js')@endsection
@section('css')@endsection
