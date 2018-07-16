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

<!-- BTC -->
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
<!-- END BTC -->

<!-- BCH -->
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
</div>
<!-- END BCH -->


<div class="row" style="margin-top:10px">
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">หมายเหตุ</h4>
            <p>- DOGE กับ XCN บริษัทมีนโยบายให้ถอนออกได้อย่างเดียวอยู่ ยังไม่สามารถฝากเข้าระบบได้</p>
            <hr>
            <p>- อนาคตถ้ามีเหรียญชนิดใหม่มา จะทำการ Update โปรแกรมเพิ่ม</p>
        </div>
    </div>
</div>

<!-- DOGE -->
<div class="row" style="margin-top:ๅ0px">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาซื้อ Token ด้วย DOGE (<a href="https://hashbx.io/exchange/Token/DOGE" target="_blank">Go Trade</a>)
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Buy Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_doge_buy_rate,5,".", ",") }} Token/DOGE</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ Token ด้วย DOGE : </h6>
                        </div>
                        <span>{{ number_format($buy_token_by_doge,5,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาขาย Token เป็น DOGE (<a href="https://hashbx.io/exchange/Token/DOGE" target="_blank">Go Trade</a>)
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sell Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_doge_sell_rate,5,".", ",") }} Token/DOGE</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย Token เพื่อรับ DOGE : </h6>
                        </div>
                        <span>{{ number_format($sell_token_by_doge,5,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END DOGE -->

<!-- XCN -->
<div class="row" style="margin-top:30px">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาซื้อ Token ด้วย XCN (<a href="https://hashbx.io/exchange/Token/XCN" target="_blank">Go Trade</a>)
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Buy Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_xcn_buy_rate,5,".", ",") }} Token/XCN</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ซื้อ Token ด้วย XCN : </h6>
                        </div>
                        <span>{{ number_format($buy_token_by_xcn,5,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                ราคาขาย Token เป็น XCN (<a href="https://hashbx.io/exchange/Token/XCN" target="_blank">Go Trade</a>)
            </div>
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Sell Rate :</h6>
                        </div>
                        <span>{{ number_format($token_per_xcn_sell_rate,5,".", ",") }} Token/XCN</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ขาย Token เพื่อรับ XCN : </h6>
                        </div>
                        <span>{{ number_format($sell_token_by_xcn,5,".", ",") }} บาท</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END XCN -->

@endsection
