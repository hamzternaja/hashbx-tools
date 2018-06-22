<!DOCTYPE html>
<html lang="en">

<head>
    <title>HashBx.com Tools beta 1.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">HashBx Tools beta 1.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{--  <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
            </ul>
        </div>  --}}
    </nav>

    <div class="container" style="margin-top:30px">
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

        <div class="row" style="margin-top:0px">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        ราคาซื้อ Token (BTC)
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
                        ราคาขาย Token (BTC)
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
                        ราคาซื้อ Token (BCH)
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
                        ราคาขาย Token (BCH)
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
    </div>

</body>

</html>