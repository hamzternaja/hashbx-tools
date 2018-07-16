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
<!-- END HBX -->

<!-- BCHTHs -->
<div class="row" style="margin-top:0px">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาซื้อ BCHTHs ด้วย Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Buy Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_bchths_sell_rate,2,".", ",") }} Token/BCHTHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ BCHTHs ด้วย Token ที่ฝากด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_bchths_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_bchths_sell_rate * $buy_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ BCHTHs ด้วย Token ที่ฝากด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_bchths_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_bchths_sell_rate * $buy_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาขาย BCHTHs เป็น Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sell Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_bchths_buy_rate,2,".", ",") }} Token/BCHTHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย BCHTHs เป็น Token แล้วถอนด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_bchths_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_bchths_buy_rate * $sell_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย BCHTHs เป็น Token แล้วถอนด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_bchths_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_bchths_buy_rate * $sell_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END BCHTHs -->


<!-- XCNMHs -->
<div class="row" style="margin-top:0px">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาซื้อ XCNMHs ด้วย Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Buy Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_xcnmhs_sell_rate,2,".", ",") }} Token/XCNMHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ XCNMHs ด้วย Token ที่ฝากด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_xcnmhs_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_xcnmhs_sell_rate * $buy_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ XCNMHs ด้วย Token ที่ฝากด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_xcnmhs_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_xcnmhs_sell_rate * $buy_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาขาย XCNMHs เป็น Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sell Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_xcnmhs_buy_rate,2,".", ",") }} Token/XCNMHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย XCNMHs เป็น Token แล้วถอนด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_xcnmhs_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_xcnmhs_buy_rate * $sell_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย XCNMHs เป็น Token แล้วถอนด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_xcnmhs_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_xcnmhs_buy_rate * $sell_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END XCNMHs -->


<!-- XMRKHs -->
<div class="row" style="margin-top:0px">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาซื้อ XMRKHs ด้วย Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Buy Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_xmrkhs_sell_rate,2,".", ",") }} Token/XMRKHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ XMRKHs ด้วย Token ที่ฝากด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_xmrkhs_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_xmrkhs_sell_rate * $buy_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ XMRKHs ด้วย Token ที่ฝากด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_xmrkhs_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_xmrkhs_sell_rate * $buy_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาขาย XMRKHs เป็น Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sell Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_xmrkhs_buy_rate,2,".", ",") }} Token/XMRKHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย XMRKHs เป็น Token แล้วถอนด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_xmrkhs_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_xmrkhs_buy_rate * $sell_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย XMRKHs เป็น Token แล้วถอนด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_xmrkhs_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_xmrkhs_buy_rate * $sell_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END XMRKHs -->


<!-- UNITTHs -->
<div class="row" style="margin-top:0px">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาซื้อ UNITTHs ด้วย Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Buy Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_unitths_sell_rate,2,".", ",") }} Token/UNITTHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ UNITTHs ด้วย Token ที่ฝากด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_unitths_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_unitths_sell_rate * $buy_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ UNITTHs ด้วย Token ที่ฝากด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_unitths_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_unitths_sell_rate * $buy_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาขาย UNITTHs เป็น Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sell Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_unitths_buy_rate,2,".", ",") }} Token/UNITTHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย UNITTHs เป็น Token แล้วถอนด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_unitths_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_unitths_buy_rate * $sell_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย UNITTHs เป็น Token แล้วถอนด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_unitths_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_unitths_buy_rate * $sell_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END UNITTHs -->

<!-- DOGEGHs -->
<div class="row" style="margin-top:0px">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาซื้อ DOGEGHs ด้วย Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Buy Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_dogeghs_sell_rate,2,".", ",") }} Token/DOGEGHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ DOGEGHs ด้วย Token ที่ฝากด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_dogeghs_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_dogeghs_sell_rate * $buy_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ DOGEGHs ด้วย Token ที่ฝากด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_dogeghs_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_dogeghs_sell_rate * $buy_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาขาย DOGEGHs เป็น Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sell Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_dogeghs_buy_rate,2,".", ",") }} Token/DOGEGHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย DOGEGHs เป็น Token แล้วถอนด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_dogeghs_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_dogeghs_buy_rate * $sell_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย DOGEGHs เป็น Token แล้วถอนด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_dogeghs_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_dogeghs_buy_rate * $sell_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END DOGEGHs -->



<!-- ETCMHs -->
<div class="row" style="margin-top:0px">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาซื้อ ETCMHs ด้วย Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Buy Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_etcmhs_sell_rate,2,".", ",") }} Token/ETCMHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ ETCMHs ด้วย Token ที่ฝากด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_etcmhs_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_etcmhs_sell_rate * $buy_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ ETCMHs ด้วย Token ที่ฝากด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_etcmhs_sell_rate ,2,".", ",") }} * {{ number_format( $buy_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-success">{{ number_format( $token_per_etcmhs_sell_rate * $buy_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาขาย ETCMHs เป็น Token
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sell Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_etcmhs_buy_rate,2,".", ",") }} Token/ETCMHs</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย ETCMHs เป็น Token แล้วถอนด้วย BTC : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_etcmhs_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_btc ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_etcmhs_buy_rate * $sell_token_by_btc,2,".", ",") }} บาท</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย ETCMHs เป็น Token แล้วถอนด้วย BCH : </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ number_format( $token_per_etcmhs_buy_rate ,2,".", ",") }} * {{ number_format( $sell_token_by_bch ,2,".", ",") }} = </h6>
                        </div>
                        <span class="text-danger">{{ number_format( $token_per_etcmhs_buy_rate * $sell_token_by_bch,2,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END ETCMHs -->


    
@endsection
