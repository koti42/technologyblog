@extends('Backend.layout')
@section('title','Anasayfa')
@section('content')

    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">

                <!--bu kısımda ekle butonu tanımlandı ve a'nın href özelliği ile blog.create metoduna gönderme yapıldı
                web.php de kullanmış olduğumuz prefix yapısının içinde birden fazla hazır sınıf mevcut -->
                <div align="right">
                    <a href="{{route('haber_ekle.create')}}">
                        <button class="btn btn-gradient-primary mr-2">Haber Ekle</button>
                    </a>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Aktif Haberler</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th> Haber Resim</th>
                                        <th> Haber Başlığı</th>
                                        <th> Plartform</th>
                                        <th> Oyun Türü</th>
                                        <th> Son Güncelleme</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data['Game'] as $game)
                                        <tr id="sid{{$game->id}}">
                                            <td class="">{{$game->id}}</td>
                                            <td>
                                                <img src="/images/haberler/{{$game['game_file']}}" class="mr-2"
                                                     alt="image">
                                            </td>
                                            <td>{{$game['game_title']}}</td>

                                            <td>{{$game['game_plartform']}}</td>
                                            <td> {{$game['game_type']}}</td>
                                            <td> {{$game['updated_at']}}</td>


                                            <td width="5">
                                                <a href="{{route('haber_duzenle.edit',$game->id)}}"><i
                                                        id="@php echo $game->id @endphp"
                                                        class="mdi mdi-grease-pencil"></i></a>
                                            </td>

                                            <td width="5">
                                                <form action="{{route('company.destroy',$game->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn-danger" type="submit">Sil</button>
                                                </form>


                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>


                        </div>

                        {{ $data['Game']->links('vendor.pagination.custom') }}
                    </div>

                </div>
            </div>



@endsection
@section('js')@endsection
@section('css')@endsection
