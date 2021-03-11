@extends('Backend.layout')
@section('title','Anasayfa')
@section('content')

    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">

                <!--bu kısımda ekle butonu tanımlandı ve a'nın href özelliği ile blog.create metoduna gönderme yapıldı
                web.php de kullanmış olduğumuz prefix yapısının içinde birden fazla hazır sınıf mevcut -->
                <div align="right">
                    <a href="{{route('inceleme_ekle.create')}}">
                        <button class="btn btn-gradient-primary mr-2">İnceleme Ekle</button>
                    </a>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Aktif İncelemeler</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th> Incelenen Oyunun Resim</th>
                                        <th> Inceleme Başlığı</th>
                                        <th> Plartform</th>
                                        <th> Oyun Türü</th>
                                        <th> Son Güncelleme</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data['reviews'] as $review)
                                        <tr id="sid{{$review->id}}">
                                            <td class="">{{$review->id}}</td>
                                            <td>
                                                <img src="/images/inceleme/{{$review['review_file']}}" class="mr-2"
                                                     alt="image">
                                            </td>
                                            <td>{{$review['review_title']}}</td>

                                            <td>{{$review['review_plartform']}}</td>
                                            <td> {{$review['review_type']}}</td>
                                            <td> {{$review['updated_at']}}</td>


                                            <td width="5">
                                                <a href="{{route('inceleme_duzenle.edit',$review->id)}}"><i
                                                        id="@php echo $review->id @endphp"
                                                        class="mdi mdi-grease-pencil"></i></a>
                                            </td>

                                            <td width="5">
                                                <form action="{{route('company2.destroy',$review->id)}}" method="POST">
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

                        {{ $data['reviews']->links('vendor.pagination.custom') }}
                    </div>

                </div>
            </div>



@endsection
@section('js')@endsection
@section('css')@endsection
