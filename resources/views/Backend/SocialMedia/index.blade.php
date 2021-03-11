@extends('Backend.layout')
@section('title','Anasayfa')
@section('content')

    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <br>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sosyal Medya Hesaplarınız</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th> Facebook</th>
                                        <th> Twitter</th>
                                        <th> Youtube</th>
                                        <th> Instagram</th>
                                        <th> Mail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($social['social_medias'] as $social)
                                        <tr id="sid">
                                            <td class="">{{$social->id}}</td>

                                            <td>{{$social->Facebook}}</td>
                                            <td>{{$social->Twitter}}</td>
                                            <td>{{$social->Youtube}}</td>
                                            <td>{{$social->Instagram}}</td>
                                            <td>{{$social->Mail}}</td>
                                            <td width="5">
                                                <a href="{{route('Sosyalmedya_duzenle.edit',$social->id)}}">
                                                    <i
                                                        id="@php echo $social->id @endphp"
                                                        class="mdi mdi-grease-pencil"></i></a>
                                            </td>

                                            <td width="5">


                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>

                </div>
            </div>



@endsection
@section('js')@endsection
@section('css')@endsection
