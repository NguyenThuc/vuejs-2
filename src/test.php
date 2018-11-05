
HOST: https://pcc-test.stringee.com

1.
Login:

POST /v1/account
{
"email": "huy@stringee.com",
"password": "123456"
}


Res:
{
"portals": [{
"id": "stringee",
"domain": "stringee",
"created": 1,
"join_time": 1,
"pa_id": "stringee_huy",
"account_id": "huy",
"auth_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhY2NvdW50X2lkIjoiaHV5IiwicG9ydGFsX2lkIjoic3RyaW5nZWUiLCJhY2NvdW50X3BvcnRhbF9pZCI6InN0cmluZ2VlX2h1eSIsImV4cCI6MTUzNzY5NDQ1Mywia2V5X2lkIjoiQTJoM1VWWjFiakMifQ.EOYtE75lPBgTSpcdcQ6_xKFAJvi6Qx3c6lbZShcTfLo"
}, {
"id": "vht",
"domain": "vht",
"created": 0,
"join_time": 5,
"pa_id": "vht_huy",
"account_id": "huy"
}],
"r": 0,
"msg": "Success"
}


2. Contact:

Header 'X-STRINGEE-AUTH' có giá trị bằng auth_token ở bước login

a. Create

POST /v1/contact
{
"name": "Dau Ngoc Huy",
"job_title": "CEO",
"company": null,
"avatar": null,
"about": "mo ta ve huy"
}

Res:
{
"id": "ac_dzwwtspdv1ycig7v",
"r": 0,
"msg": "Success"
}

b. List
GET /v1/contact?limit=2&page=1&name=minh&id=&company=company_1&sort_by=created&sort_order=desc


yeu cau



A. Giao diện:

1. Màn hình Login
/theme/mmenu/html/pages/login-v3.html


2. Màn hình Add contact
/theme/mmenu/html/contact-add.php


3. Màn hình Contact list
/theme/mmenu/html/contact-list.php
Lưu ý:

1. Bắt buộc dùng giao diện này, không được tự build giao diện khác

2. Theme này có nhiều JavaScript, cần bỏ hết JS đó và dùng HTML+CSS của theme thôi



B.
Nghiệp vụ yêu cầu:

+ Login:
email=huy@stringee.com, pass=123456 ==> đăng nhập thành công
=> nhập khác thì báo sai

+ Khi login thành công thì vào màn hình: Contact list

+ Cho phép thêm 1 Contact, thêm thành công thì chuyển sang màn hình: Contact list

+ Chi tiết API đọc file: pcc_api.txt


C. Công nghệ:

Sử dụng Vue.js


d. Tài liệu:

+ https://vi.vuejs.org/v2/guide/
+ https://vuejs-templates.github.io/webpack/
+ Code mẫu: https://github.com/gothinkster/vue-realworld-example-app








