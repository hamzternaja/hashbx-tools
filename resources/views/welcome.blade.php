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
                        <h6 class="my-0">ราคา BTC (บาท):</h6>
                    </div>
                    <span>{{ number_format($btc_last_price,2,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ราคา BCH (บาท):</h6>
                    </div>
                    <span>{{ number_format($bch_last_price,2,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ราคา DOGE (บาท):</h6>
                    </div>
                    <span>{{ number_format($doge_last_price,5,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ราคา XCN (บาท):</h6>
                    </div>
                    <span>{{ number_format($xcn_last_price,5,".", ",") }} บาท</span>
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

<!-- <div class="row" style="margin-top:10px">
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">หมายเหตุ</h4>
            <p>- ราคาที่แสดง เป็นราคาประมาณ Market Price Order ที่อยู่บนสุด กดซื้อขายได้ทันที</p>
            <hr>
            <p>- เป็นราคา Real-time โดยประมาณ โปรดกด F5 เพื่อ Refresh</p>
        </div>
    </div>
</div> -->

<!-- HBX -->
<div class="row" style="margin-top:0px">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            ราคาซื้อ HBX ด้วย Token (<a href="https://hashbx.io/exchange/Token/HBX" target="_blank">Go Trade</a>)
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
                        <h6 class="my-0">ซื้อ HBX ด้วย Token ที่ฝากด้วย BTC (ทันที): </h6>
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
                        <h6 class="my-0">ซื้อ HBX ด้วย Token ที่ฝากด้วย BTC (ตั้งขายเอง): </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_sell_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_btc ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-success">{{ number_format( $token_per_hbx_sell_rate * $sell_token_by_btc,2,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ซื้อ HBX ด้วย Token ที่ฝากด้วย BCH (ทันที): </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_bch ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-success">{{ number_format( $token_per_hbx_sell_rate * $buy_token_by_bch,2,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ซื้อ HBX ด้วย Token ที่ฝากด้วย BCH (ตั้งขายเอง): </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_sell_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_bch ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-success">{{ number_format( $token_per_hbx_sell_rate * $sell_token_by_bch,2,".", ",") }} บาท</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            ราคาขาย HBX เป็น Token (<a href="https://hashbx.io/exchange/Token/HBX" target="_blank">Go Trade</a>)
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
                        <h6 class="my-0">ขาย HBX เป็น Token แล้วถอนด้วย BTC (ทันที): </h6>
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
                        <h6 class="my-0">ขาย HBX เป็น Token แล้วถอนด้วย BTC (ตั้งขายเอง): </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_buy_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_btc ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-danger">{{ number_format( $token_per_hbx_buy_rate * $buy_token_by_btc,2,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ขาย HBX เป็น Token แล้วถอนด้วย BCH (ทันที): </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_bch ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-danger">{{ number_format( $token_per_hbx_buy_rate * $sell_token_by_bch,2,".", ",") }} บาท</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ขาย HBX เป็น Token แล้วถอนด้วย BCH (ตั้งขายเอง): </h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ number_format( $token_per_hbx_buy_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_bch ,2,".", ",") }} = </h6>
                    </div>
                    <span class="text-danger">{{ number_format( $token_per_hbx_buy_rate * $buy_token_by_bch,2,".", ",") }} บาท</span>
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
            ราคาซื้อ Token ด้วย BTC (<a href="https://hashbx.io/exchange/Token/BTC" target="_blank">Go Trade</a>)
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
            ราคาขาย Token เป็น BTC (<a href="https://hashbx.io/exchange/Token/BTC" target="_blank">Go Trade</a>)
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
            ราคาซื้อ Token ด้วย BCH (<a href="https://hashbx.io/exchange/Token/BCH" target="_blank">Go Trade</a>)
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
            ราคาขาย Token เป็น BCH (<a href="https://hashbx.io/exchange/Token/BCH" target="_blank">Go Trade</a>)
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
