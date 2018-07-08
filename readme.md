# บทนำ #

ระบบ HASHBX.IO Analysis Tools เขียนด้วย Laravel 5.5

Web App : [http://hashbx.porrapat.com](http://hashbx.porrapat.com)

## เป้าหมายการพัฒนา ##

* เพิ่มส่งเสริมการลงทุนในบริษัท HASHBX ทุกผลิตภัณฑ์ที่เกี่ยวข้องกับบริษัทเช่น ICO และ แรงขุดต่างๆ กับ วงการคริปโต Currency ที่เกี่ยวข้อง
* พัฒนาเป็นระบบให้ความรู้แนะนำการลงทุน และ Arbitrate System โดยมีต้นตอจาก HASHBX เป็นหลัก
* เพื่อฝึกเขียนโปรแกรมเป็น Open Source นักพัฒนาท่านอื่นๆ สามารถ Fork Code ผ่าน Github และใช้ได้ ไม่จำกัด ท่านอาจตั้ง Server แล้วใช้ส่วนตัวของท่านเองได้
* สร้าง Community นักลงทุน HASHBX และพันธมิตรให้แข็งแกร่งยิ่งขึ้น

## ที่มาของข้อมูล ##
* [HASHBX.IO](http://www.hashbx.io)
* [BX.IN.TH](http://bx.in.th)

## แรงบันดาลใจ ##
* [Arbitrate Bot CryptoVationX](https://arbot.cryptovation.co/)
* [Github CryptoVationX](https://arbot.cryptovation.co/)

## ข้อควรระวัง ##
เว็บนี้เพียงแค่ดึงข้อมูลจากต้นทาง และ ให้คำแนะนำ โปรดเช็คข้อมูลราคาที่แท้จริง และ ตรวจสอบการคำนวณค่าเงินต่างๆ ด้วยตัวท่านเองอีกรอบ ก่อนลงทุน หรือ เทรดทุกครั้ง ถ้ามีข้อผิดพลาด หรือ คำแนะนำเพิ่มเติม โปรดติดต่อมา เราจะปรับปรุงแก้ไขให้ดีที่สุดครับ

## หากท่านต้องการสนับสนุน ##
ณ เวลานี้ เราต้องการกระจาย เครื่องมือนี้ไปยังผู้ใช้ให้ได้มากที่สุด เพื่อให้ทุนท่านได้ใช้งานกัน และ มั่นใจในการลงทุนกับ HASHBX มากยิ่งขึ้น เพราะที่สุดแล้ว ทุกคนมีส่วนร่วมในการพัฒนาบริษัท และ วงการคริปโต Currency

สรุปง่ายๆ ถ้าคนเข้าใช้เยอะๆ หุ้นที่ผมถืออยู่ก็ MOON นั่นเอง ไม่ต้องคิดไรครับ ตอนนี้ สบายๆ

## เกี่ยวกับระบบ ##

พัฒนามาจาก Laravel Template Version 5.5 อ้างอิง [ที่นี่](https://github.com/laravel/laravel/tree/5.5)

### ความต้องการของระบบพื้นฐาน ###
* ถ้าพัฒนาบน Windows ใช้ XAMPP 7.1.9
* PHP 7+ เท่านั้น
* PHP curl extension (จำเป็นต้องติดตั้ง เพราะมีการดึงข้อมูลโดยใช้ Library php_curl)
* Database MariaDB (MySQL) (ยังไม่มีการเชื่อมฐานข้อมูล แต่จะจัดทำในอนาคต)
* ตัวติดตั้ง Composer

### วิธีการติดตั้ง ###

* ติดตั้ง Web Server (Apache), PHP, MySQL ก่อน

```
git clone <git-url> hashbx-tools
cd 
composer install # หรือ composer_update
```

```
php artisan key:generate # สร้าง key
```

รัน Server ทดสอบ (กรณีไม่ Set Virtual Host)
```
php artisan serve

หรือ

php artisan serve --port=8080
```

* หรือทำ Virtual Host Web Server สำหรับ Apache บน Windows (ระบบปฏิบัติการอื่น ก็ปรับเปลี่ยนไปตามความเหมาะสม)

สร้างไฟล์ .env หรือ Copy มาจาก .evn.example


# การไปติดตั้งบน Production

อย่าลืม เปลี่ยน APP_DEBUG=false ด้วยครับ เพราะจะทำให้ประสิทธิภาพโปรแกรมเพิ่มขึ้น

```
APP_NAME=HASHBX_TOOLS
APP_DEBUG=false
```

ที่ไฟล์ C:\Windows\System32\drivers\etc\hosts

```
127.0.0.1 hashbx-tools.local
```

ที่ไฟล์ httpd-vhosts.conf

```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/hashbx-tools/public"
    ServerName hashbx-tools.local
</VirtualHost>
```

* สำหรับการใช้งานบน NGINX ให้ติดตั้ง Package php-fpm เวอร์ชั่น 5.5 ขึ้นไป พร้อมเปิดพอร์ตที่ 9000 และตั้งค่าไฟล์ server block ตามนี้
```
server {
  server_name your_name;
  index index.php;
  root /path/to/your/hashbx-tools/public;
  
  location / {
    try_files $uri $uri/ /index.php?$query_string;
  }
  error_page 404 /index.php;

  location ~ \.php$ {
    fastcgi_split_path_info ^(.+\.php)(/.+)$;
    fastcgi_pass 127.0.0.1:9000;
    fastcgi_index index.php;
    include fastcgi_params;
  }
}
```
