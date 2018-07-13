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

            <div class="row" style="margin-top:10px">
                <div class="col-md-12">
                    <div class="alert alert-info" role="alert">
                        
                        <h4 class="alert-heading">วิธีใช้ (เปลี่ยนตัวเลขตามใจท่าน โปรแกรมจะคำนวณให้)</h4>
                        <ul>
                            <li>คุณมีกี่ HBX ตอนนี้</li>
                            <li>ตอนถึงเป้าหมาของคุณ คุณว่าราคา HBX จะเท่ากับกี่บาท</li>
                            <li>ติ้กตัวเลือก ให้หารราคาลง 2 เท่าทุกครั้ง กรณีที่ต้องการความสมจริง</li>
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
