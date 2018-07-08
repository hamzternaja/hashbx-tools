@extends('layouts.main')

@section('content')

<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            ข้อมูลพื้นฐานทั่วไป (จาก <a href="http://www.bx.in.th" target="_blank">bx.in.th</a>)
        </div>
        <div class="card-body">
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Update ล่าสุด - เวลา</h6>
                    </div>
                    <span>{{ $time_text }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ราคา BTC :</h6>
                    </div>
                    <span>{{ number_format($btc_last_price,2,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ราคา BCH :</h6>
                    </div>
                    <span>{{ number_format($bch_last_price,2,".", ",") }} บาท</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="row" style="margin-top:30px">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            ข้อมูล (จาก <a href="http://www.hashbx.io" target="_blank">hashbx.io</a>)
        </div>
    </div>
</div>
</div>
<!-- HBX -->
<div class="row" style="margin-top:0px">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            ราคาซื้อ HBX ด้วย Token
        </div>
        <div class="card-body">
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Buy Rate :</h6>
                    </div>
                    <span>{{ number_format($token_per_hbx_sell_rate,2,".", ",") }} Token/HBX</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ซื้อ HBX ด้วย Token ที่ฝากด้วย BTC : </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_btc ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-success">{{ number_format( $token_per_hbx_sell_rate * $buy_token_by_btc,2,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ซื้อ HBX ด้วย Token ที่ฝากด้วย BCH : </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_bch ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-success">{{ number_format( $token_per_hbx_sell_rate * $buy_token_by_bch,2,".", ",") }} บาท</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            ราคาขาย HBX เป็น Token
        </div>
        <div class="card-body">
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Sell Rate :</h6>
                    </div>
                    <span>{{ number_format($token_per_hbx_buy_rate,2,".", ",") }} Token/HBX</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ขาย HBX เป็น Token แล้วถอนด้วย BTC : </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_btc ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-danger">{{ number_format( $token_per_hbx_buy_rate * $sell_token_by_btc,2,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ขาย HBX เป็น Token แล้วถอนด้วย BCH : </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_bch ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-danger">{{ number_format( $token_per_hbx_buy_rate * $sell_token_by_bch,2,".", ",") }} บาท</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

<div class="row" style="margin-top:0px">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            ราคาซื้อ Token ด้วย BTC
        </div>
        <div class="card-body">
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Buy Rate :</h6>
                    </div>
                    <span>{{ number_format($token_per_btc_buy_rate,2,".", ",") }} Token/BTC</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ซื้อ Token ด้วย BTC :</h6>
                    </div>
                    <span>{{ number_format($buy_token_by_btc,2,".", ",") }} บาท</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            ราคาขาย Token เป็น BTC
        </div>
        <div class="card-body">
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Sell Rate :</h6>
                    </div>
                    <span>{{ number_format($token_per_btc_sell_rate,2,".", ",") }} Token/BTC</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ขาย Token เพื่อรับ BTC :</h6>
                    </div>
                    <span>{{ number_format($sell_token_by_btc,2,".", ",") }} บาท</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="row" style="margin-top:30px">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            ราคาซื้อ Token ด้วย BCH
        </div>
        <div class="card-body">
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Buy Rate :</h6>
                    </div>
                    <span>{{ number_format($token_per_bch_buy_rate,2,".", ",") }} Token/BCH</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ซื้อ Token ด้วย BCH :</h6>
                    </div>
                    <span>{{ number_format($buy_token_by_bch,2,".", ",") }} บาท</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            ราคาขาย Token เป็น BCH
        </div>
        <div class="card-body">
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Sell Rate :</h6>
                    </div>
                    <span>{{ number_format($token_per_bch_sell_rate,2,".", ",") }} Token/BCH</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ขาย Token เพื่อรับ BCH :</h6>
                    </div>
                    <span>{{ number_format($sell_token_by_bch,2,".", ",") }} บาท</span>
                </li>
            </ul>
        </div>
    </div>
</div>
    
@endsection
