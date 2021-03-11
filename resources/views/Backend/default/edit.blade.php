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
                    <p class="card-description"> İçerik Düzenleme </p>
                    <form action="{{route('haber_duzenle.update',$games->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Haber Başlığı Resmi</label>
                            @isset($games->game_file)

                                    <div class="" style="margin-right: 1000px">
                                            <img width="100" src="/images/haberler/{{$games->game_file}}" alt="">

                                </div>
                            @endisset

                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Plartform</label>
                            <select class="form-control" id="exampleSelectGender" name="game_plartform">
                                <option {{$games->game_plartform=="PLAYSTATION 5" ? "selected=''" : ""}} value="PLAYSTATION 5">PLAYSTATION 5</option>
                                <option {{$games->game_plartform=="XBOX ONE" ? "selected=''" : ""}} value="XBOX ONE">XBOX ONE</option>
                                <option {{$games->game_plartform=="PC" ? "selected=''" : ""}} value="PC">PC</option>
                                <option {{$games->game_plartform=="NINTENDO" ? "selected=''" : ""}} value="NINTENDO">NINTENDO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Haber Başlığı</label>
                            <input type="text" class="form-control" name="game_title" id="exampleSelectGender" placeholder="Başlık" value="{{$games->game_title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Oyun Türü</label>
                            <select class="form-control" id="exampleSelectGender" name="game_type">
                                <option {{$games->game_type=="FPS - First Person Shooter" ? "selected=''" : ""}} value="FPS - First Person Shooter">FPS - First Person Shooter</option>
                                <option {{$games->game_type=="RTS - Real Time Strategy" ? "selected=''" : ""}} value="RTS - Real Time Strategy">RTS - Real Time Strategy</option>
                                <option {{$games->game_type=="TPS - Third Person Shooter" ? "selected=''" : ""}} value="TPS - Third Person Shooter">TPS - Third Person Shooter</option>
                                <option {{$games->game_type=="RPG - Role Playing Game" ? "selected=''" : ""}} value="RTS - Real Time Strategy">RPG - Role Playing Game</option>
                                <option {{$games->game_type=="MOBA - Multiplayer Online Battle Arena" ? "selected=''" : ""}} value="MOBA - Multiplayer Online Battle Arena">MOBA - Multiplayer Online Battle Arena</option>
                                <option {{$games->game_type=="H&S – Hack and Slash" ? "selected=''" : ""}} value="H&S – Hack and Slash">H&S – Hack and Slash</option>
                                <option {{$games->game_type=="J-RPG Japanese Role Playing Game" ? "selected=''" : ""}} value="J-RPG Japanese Role Playing Game">J-RPG Japanese Role Playing Game</option>
                                <option {{$games->game_type=="Open World" ? "selected=''" : ""}} value="Open World">Open World</option>
                                <option {{$games->game_type=="Adventure" ? "selected=''" : ""}} value="Adventure">Adventure</option>
                                <option {{$games->game_type=="Simulation" ? "selected=''" : ""}} value="Simulation">Simulation</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Haber'de Görünecek Link</label>
                            <input type="text" class="form-control" name="game_slug"  id="exampleSelectGender" placeholder="Haber'de görünmesini istediğiniz link" value="{{$games->game_slug}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Kısa Açıklama Maks(120 Karakter)</label>
                            <input maxlength="120" type="text" name="short_description" class="form-control" id="exampleSelectGender" placeholder="Haber'de görünecek Kısa Açıklama" value="{{$games->short_description}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCity1">Yazar</label>
                            <input type="text" class="form-control" name="author" id="exampleSelectGender" placeholder="İçerik Yazarı" value="{{$games->author}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Haber Metni</label>
                            <textarea class="form-control" name="game_content" id="editor1">{{$games->game_content}}</textarea>
                            <script>
                                CKEDITOR.replace('editor1', {
                                    filebrowserUploadUrl: '/ckeditor/ck_upload.php',
                                    filebrowserUploadMethod: 'form'
                                });
                            </script>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Haberi Düzenle</button>
                        <button type="button" value="Geri" onclick="history.back(-1)" class="btn btn-gradient-primary mr-2">İptal Et</button>

                    </form>
                    <br>
                </div>
            </div>
        </div>
@endsection
@section('js')@endsection
@section('css')@endsection
