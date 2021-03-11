@extends('Backend.layout')
@section('title','Anasayfa')
@section('content')
    <head>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>
    </head>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Oyun Haberlerleri</h4>
                    <p class="card-description"> İçerik Ekleme </p>


                    <form action="{{route('haber_ekle.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleSelectGender">Plartform</label>
                            <select class="form-control" name="game_plartform" id="exampleSelectGender">
                                <option value="PLAYSTATION 5">PLAYSTATION 5</option>
                                <option VALUE="XBOX ONE">XBOX ONE</option>
                                <option VALUE="PC">PC</option>
                                <option VALUE="NINTENDO">NINTENDO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Haber Başlığı</label>
                            <input type="text" class="form-control" name="game_title" id="exampleSelectGender" placeholder="Başlık">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Oyun Türü</label>
                            <select class="form-control" id="exampleSelectGender" name="game_type">
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
                            <label for="exampleInputEmail3">Haber'de Görünecek Link</label>
                            <input type="text" name="game_slug" class="form-control" id="exampleSelectGender" placeholder="Haber'de görünmesini istediğiniz link">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Kısa Açıklama Maks(120 Karakter)</label>
                            <input maxlength="120" type="text" name="short_description" class="form-control" id="exampleSelectGender" placeholder="Haber'de görünecek Kısa Açıklama">
                        </div>

                        <div class="form-group">
                            <label>Resim Seç</label>
                            <div class="row">
                                    <input class="form-control file-upload-info" placeholder="Upload Image"name="game_file" required type="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCity1">Yazar</label>
                            <input type="text" class="form-control" name="author" id="exampleSelectGender" placeholder="İçerik Yazarı">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Haber Metni</label>
                            <textarea class="form-control" name="game_content" id="editor1"></textarea>
                            <script>
                                CKEDITOR.replace('editor1', {
                                    filebrowserUploadUrl: '/ckeditor/ck_upload.php',
                                    filebrowserUploadMethod: 'form'
                                });
                            </script>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Haberi Yükle</button>
                        <button type="button" value="Geri" onclick="history.back(-1)" class="btn btn-gradient-primary mr-2">İptal Et</button>

                    </form>

                </div>
            </div>

        </div>

@endsection
@section('js')@endsection
@section('css')@endsection
