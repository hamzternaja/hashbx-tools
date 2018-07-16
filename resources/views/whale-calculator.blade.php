@extends('layouts.main_with_vuejs')

@section('content')


<div id="hbx-vue" class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
               Rich Calculator (จาก <a href="http://www.bx.in.th" target="_blank">bx.in.th</a> และ <a href="http://www.hashbx.io" target="_blank">hashbx.io</a>)
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
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">ราคา HBX ปัจจุบัน (ราคาที่มากกที่สุด) :</h6>
                        </div>
                        <span>{{ number_format($hbx_max_last_price,2,".", ",") }} บาท</span>
                    </li>

                </ul>
            </div>

            <h1 class="text-center">Whale Calculator (คำนวณความเป็นวาฬในตัวคุณ)</h1>
            <h4 class="text-center">Credit @Theeranun</h4>

            <a href="https://commons.wikimedia.org/wiki/File:Emojione_1F433.svg"><img style="display:block; margin:0 auto" src="data:image/png;base64,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" /></a>


            <div class="row" style="margin-top:10px">
                <div class="col-md-12">
                    <div class="alert alert-info" role="alert">
                        
                        <h4 class="alert-heading">วิธีใช้ (เปลี่ยนตัวเลขตามใจท่าน โปรแกรมจะคำนวณให้)</h4>
                        <ul>
                            <li>คุณมีกี่ HBX ตอนนี้</li>
                            <li>ตอนถึงเป้าหมายของคุณ คุณว่าราคา HBX จะเท่ากับกี่บาท</li>
                            <li>ติ้กตัวเลือก ให้หารราคาลง 2 เท่าทุกครั้ง กรณีที่ต้องการความสมจริง</li>
                            <li>Max HBX Supply หลังการแตกพาร์ จะมีทั้งสิ้น 800,000,000 HBX</li>
                        </ul>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" v-model="price_div_check">หารราคาแต่ละรอบลงด้วย
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="table-hbx-cal" class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">(หลัง) วันที่</th>
                            <th scope="col" class="text-center">จำนวน HBX</th>
                            <th scope="col" class="text-center">ราคาต่อ HBX (บาท)</th>
                            <th scope="col" class="text-center">รวม (บาท)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">7/7/2018 (ปัจจุบัน)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" v-model="hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" v-model="price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price1"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/8/2018 (2)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 2"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 2.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price2"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/9/2018 (3)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 4"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 4.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price3"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/10/2018 (4)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 8"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 8.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price4"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/11/2018 (5)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 16"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 16.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price5"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/12/2018 (6)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 32"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 32.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price6"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/1/2019 (7)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 64"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 64.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price7"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/2/2019 (8)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 128"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 128.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price8"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/3/2019 (9)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 256"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 256.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price9"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/4/2019 (10)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 512"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 512.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price10"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/5/2019 (11)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 1024"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 1024.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price11"></td>
                        </tr>
                        <tr>
                            <td class="text-center">7/6/2019 (12)</th>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="hbx * 2048"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price_div_check ? price_per_hbx / 2048.00 : price_per_hbx"></td>
                            <td><input type="number" style="min-width:150px" class="form-control text-right" disabled :value="price12"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row" style="margin-top:10px">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">หมายเหตุ</h4>
                        <ul>
                            <li>ทางผู้พัฒนาจะอัพเดต App หลังวันที่ 7 ของทุกเดือน เพื่อลบบรรทัดที่เกิดขึ้นแล้วออก</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    new Vue({
        el: '#hbx-vue',
        data: {
            hbx: 1,
            price_per_hbx: {{ number_format($hbx_max_last_price,2) }},
            price_div_check: false
        },
        computed: {
            price1: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * this.price_per_hbx;
            },
            price2: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 2 * this.price_per_hbx;
            },
            price3: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 4 * this.price_per_hbx;
            },
            price4: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 8 * this.price_per_hbx;
            },
            price5: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 16 * this.price_per_hbx;
            },
            price6: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 32 * this.price_per_hbx;
            },
            price7: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 64 * this.price_per_hbx;
            },
            price8: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 128 * this.price_per_hbx;
            },
            price9: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 256 * this.price_per_hbx;
            },
            price10: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 512 * this.price_per_hbx;
            },
            price11: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 1024 * this.price_per_hbx;
            },
            price12: function () {
                return this.price_div_check ? this.hbx * this.price_per_hbx : this.hbx * 2048 * this.price_per_hbx;
            }
        }
    })
</script>
    
@endsection
