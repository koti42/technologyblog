@extends('Backend.layout')
@section('title','Anasayfa')
@section('content')

    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">

                <!--bu kısımda ekle butonu tanımlandı ve a'nın href özelliği ile blog.create metoduna gönderme yapıldı
                web.php de kullanmış olduğumuz prefix yapısının içinde birden fazla hazır sınıf mevcut -->
                <div align="right">
                    <a href="">
                        <button class="btn btn-gradient-primary mr-2">Bütün Yorumları Onayla</button>
                    </a>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Onay Bekleyen Yorumlar</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Kullanıcı Resmi</th>
                                        <th>Ad</th>
                                        <th>Yorum</th>
                                        <th>Mail Adresi</th>
                                        <th>Ip Adresi</th>
                                        <th>Onay Durumu</th>
                                        <th>Sil</th>
                                        <th>Onay</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $comments)
                                        <tr id="sid">
                                            <td>
                                                <img src="/Frontend/img/details/comment/comment-1.jpg" class="mr-2"
                                                     alt="image">
                                            </td>
                                            <td>{{$comments->Ad}}</td>
                                            <td>{{substr($comments->content,0,80)}}</td>

                                            <td>{{$comments->email}}</td>
                                            <td>{{$comments->ip_address}}</td>
                                            <td>
                                                <b>
                                                <script>
                                                    var onay_durumu =
                                                    {{$comments->approval_status}}
                                                    if (onay_durumu == 0) {
                                                        document.write('Onaylanmadı');
                                                    } else {
                                                        document.write('Onaylandı');
                                                    }

                                                </script>
                                                </b>
                                            </td>
                                            <td width="5">
                                                <form action="{{route('company3.destroy',$comments->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn-danger" type="submit">Sil</button>
                                                </form>


                                            </td>

                              <td width="5">
                                                @if($comments->approval_status==0)
                                                    <form action="{{route('approve.okey',$comments->id)}}" method="POST">
                                                        @csrf
                                                        <button class="btn-danger" type="submit">Onayla</button>
                                                    </form>
                                                @endif


                                            </td>

                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        {{ $data->links('vendor.pagination.custom') }}
                    </div>

                </div>
            </div>



@endsection
@section('js')@endsection
@section('css')@endsection
