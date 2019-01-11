# RayganSms
RayganSms API for send text messages

[![Latest Version on Packagist](https://img.shields.io/packagist/v/trez/raygan-sms.svg?style=flat-square)](https://packagist.org/packages/trez/raygan-sms)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![StyleCI](https://github.styleci.io/repos/164846699/shield?branch=master)](https://github.styleci.io/repos/164846699)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/farhadmirzapour/RayganSms/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/farhadmirzapour/RayganSms/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/farhadmirzapour/RayganSms/badges/build.png?b=master)](https://scrutinizer-ci.com/g/farhadmirzapour/RayganSms/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/farhadmirzapour/RayganSms/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![Quality Score](https://img.shields.io/scrutinizer/g/farhadmirzapour/RayganSms.svg?style=flat-square)](https://scrutinizer-ci.com/g/farhadmirzapour/RayganSms)
[![Total Downloads](https://img.shields.io/packagist/dt/trez/raygan-sms.svg?style=flat-square)](https://packagist.org/packages/trez/raygan-sms)


<div dir="rtl" align="justify">
    این پکیج امکان اتصال <a href="https://raygansms.com/" target="_blank" >RayganSms API</a> به فریم ورک هایی که جهت نصب پکیج ها از <a href="http://farhadnote.ir/articles/2017/10/29/composer.html" target="_blank" >composer</a> و از استاندارد  <a href="http://farhadnote.ir/articles/2017/10/20/psr.html" target=_blank" >PSR-4</a> جهت <a href="http://farhadnote.ir/articles/2017/11/09/composer-autoloading.html#%D8%B1%D9%88%D8%B4-psr-4-based-autoloading" target="_blank">autoload</a>  نمودن کلاس ها استفاده می نمایند همانند (Laravel,Yii,symfony)   را فراهم می سازد.

## محتوا

- [نصب](#نصب)
- [استفاده](#استفاده)
- [متدها](#متدها)
- [تولیدکننده](#تولیدکننده)
- [لایسنس](#لایسنس)


## نصب  

با استفاده از composer  قادر به نصب این سرویس می باشید:
</div>

```bash
composer require trez/raygan-sms
```

<div dir="rtl">
    
## استفاده

مطابق کد زیر تنظیمات شناسه، رمزعبور و شماره تماس ارسال کننده را وارد نمائید:
</div>

```php
$user_name = '*******';
$password = '*******';
$phone_number = '*******';;
$sms = new \Trez\RayganSms\Sms($user_name,$password,$phone_number);
```
    
### متدها

#### 1- متد ارسال پیامک
`sendMessage($reciver_number, $text_message)`

<div dir="rtl" >
 مثال :
</div>

```php
$sms->sendAuthCode('0936*******','Test Message');
```

#### 2- (Two Factor Authentication) 2FA متد ارسال کد
`sendAuthCode($reciver_number, $sender_text)`

<div dir="rtl" >
 مثال :
</div>

```php
$sms->sendAuthCode('0936*******','Welcome ...');
```

#### 3-  ارسال شده توسط کاربر (Two Factor Authentication) 2FA بررسی صحت کد
`sendAuthCode($reciver_number, $sender_text)`

<div dir="rtl" >
 مثال :
</div>

```php
$result = $sms->checkAuthCode('09366386160','922387');
if($result){
    ///
}else{
    ///
}
```

## تولیدکننده

- [Farhad Mirzapour](https://github.com/farhadmirzapour)

## لایسنس

لایسنس این پکیج (MIT) می باشد . جهت اطلاعات در مورد این لایسنس به [License File](LICENSE) مراجعه نمایید. 

</div>

