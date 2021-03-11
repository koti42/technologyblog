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
                    <form action="{{route('Sosyalmedya_duzenle.update',$social->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Sosyal Medya Hesapları</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Facebook</label>
                            <input type="text" class="form-control" name="Facebook"  id="exampleSelectGender" placeholder="Haber'de görünmesini istediğiniz link" value="{{$social->Facebook}}">
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputEmail3">Instagram(Lütfen Http://www. Şeklinde Ekleyiniz...) Ekleyeceğiniz Hesap Linki Herkese Açık Olmalıdır Yoksa Instagram Postlarınız Gözükmez</label>
                            <input maxlength="120" type="text" name="Instagram" class="form-control" id="exampleSelectGender" placeholder="Haber'de görünecek Kısa Açıklama" value="{{$social->Instagram}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCity1">Youtube</label>
                            <input type="text" class="form-control" name="Youtube" id="exampleSelectGender" placeholder="İçerik Yazarı" value="{{$social->Youtube}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Twitter</label>
                            <input type="text" class="form-control" name="Twitter" id="exampleSelectGender" placeholder="Twitter" value="{{$social->Twitter}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Mail</label>
                            <input type="text" class="form-control" name="Mail" id="exampleSelectGender" placeholder="Mail" value="{{$social->Mail}}">
                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">Sosyal Medya Hesaplarını Güncelle</button>
                        <button type="button" value="Geri" onclick="history.back(-1)" class="btn btn-gradient-primary mr-2">İptal Et</button>

                    </form>
                    <br>
                </div>
            </div>
        </div>
@endsection
@section('js')@endsection
@section('css')@endsection
