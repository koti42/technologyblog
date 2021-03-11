@extends('backend.layout')
@section('title','Anasayfa')
@section('content')
<div class="row">

    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="/Backend/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                <h4 class="font-weight-normal mb-3">Toplam Atılan Yorum Sayısı <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">{{$comments}} Adet Yorum Atılmış</h2>
                <h6 class="card-text">Decreased by 10%</h6>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="/Backend/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                <h4 class="font-weight-normal mb-3">Sitede ki Toplam Haber <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">{{$game}} Adet Haber Mevcut</h2>

                <h6 class="card-text">Increased by 60%</h6>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
                <img src="/Backend/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                <h4 class="font-weight-normal mb-3">Cevap Verilen Yorum Sayısı <i class="mdi mdi-diamond mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">{{$reply_comments}} Yoruma Cevap Verilmiş</h2>
                <h6 class="card-text">Decreased by 10%</h6>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')@endsection
@section('css')@endsection
