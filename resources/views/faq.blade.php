@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h3 class="text-center">คำถามที่พบบ่อย</h3>
        <div id="accordion" class="mt-4">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ทำไมบริษัทไม่ใช้ เงินบาทในการเทรดใน HashBx.io โดยตรง
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ol>
                            <li>เพราะเรื่องของกฏหมาย ต้องดำเนินการเรื่อง Exchange ให้เสร็จก่อน</li>
                            <li>เราจะให้ต่างชาติสามารถเข้ามาเทรดในระยะ ICO เริ่มต้นได้</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Token คืออะไร
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p>Token คือตัวกลางแลกเปลี่ยน ตอนนี้บริษัทพยายามผลักดันเป็น USDT แต่เพื่อความเข้าใจในโปรแกรมนี้เราจะใช้ Token ไปก่อน ต้องรอให้สมาชิกช่วยกันดันราคาให้เท่ากับ USDT จากนั้นบริษัทจะเปิดระบบ Wallet ของ USDT ให้ออกไปเว็บภายนอกได้ (และ แน่นอนควรโอนเข้ามาได้ด้วย)</p>
                        <p>ทางผมจะปรับโปรแกรมทีหลัง หรือ อาจไม่จำเป็นต้องใช้อีกแล้วก็เป็นได้</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            เราจะซื้อ HBX ได้อย่างไร
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        ณ ขณะนี้ เลือกได้สองทางคือ
                        <ol>
                            <li>โอน BCH หรือ ฺBCH เข้าสู่ระบบ Hashbx.io แล้วทำการเทรดในระบบ วิธีนี้ จะค่อนข้างปลอดภัย เพราะผ่าน Blockchain และระบบ Web Application ของ Hashbx แต่จะเสียค่าธรรมเนียมการเทรด และ การถอนเพื่อเข้าสู่กระเป๋า Hashbx ด้วย (เมื่อผมมีโอกาส จะสร้างโปรแกรม คำนวณค่า Fee ให้ถัดไป)</li>
                            <li>ซื้อขายกันเอง ระหว่างบุคคล (ทางเทคนิคเรียก OTC หรือ Over Counter Trade) เช่น ซื้อขายกับเพื่อน หรือ คนรู้จัก ที่นิยมก็คือ ผ่าน Group Line ห้องซื้อขาย ของ Community บริษัท
                                ข้อดี คือ บริษัทให้เป็นตัวเลือกให้สมาชิก สามารถทำกำไรได้ และ ให้เกิดการหมุนเวียน แต่ข้อเสียคือ ต้องหาคนที่ไว้ใจได้ในการทำการซื้อขาย ยิ่งการซื้อขายกับคนไม่รู้จัก ที่ไม่เคยเห็นหน้า มีการโอนเงิน กับ HBX กันโดยตรงแล้ว ความเสี่ยงก็เท่ากับการซื้อขาย Online ทั่วๆ ไปนั่นเอง
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            ณ ขณะนี้ โอนอะไรหากันเองได้ในระบบ Hashbx.io
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        ฺHBX 
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            บริษัท Focus อะไรอยู่
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        ฺHBX 
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            โอน Token หากันเองในระบบเหมือนเดิมได้ไหม
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        ไม่ได้ <br/><br/>เพิ่มเติมคือ เพราะบริษัท Focus ที่ HBX แล้ว ต้องการให้เหรียญนี้เป็น Utilily Coin ตามที่ กลต. กำหนด 
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            เหรียญอะไรที่เอาเข้า หรือ โอนออกระบบผ่าน Blockhain ได้บ้าง
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        BTC BCH โอนเข้าและออกได้ <br/>
                        DOGE XCN โอนออกได้อย่างเดียว
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
