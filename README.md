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
این پکیج امکان اتصال RayganSms API به فریم ورک هایی که جهت نصب پکیج ها از composer استفاده نموده و از استاندارد  PSR-4 پشتیبانی می کنند همانند (Laravel,Yii,symfony)   را فراهم می سازد.

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

<div dir="rtl">
 همچنین چنانچه جهت اطمینان از ارسال پیام به شماره کاربر،  از مدل که معمولا مدل User می باشد جهت استخراج شماره تماس کاربر استفاده می نمایید، ابتدا trait زیر را به مدل خود اضافه نمائید :   
</div>

```php
    use Notifiable;
```

<div dir="rtl">
 سپس متد زیر را به مدل اضافه نمائید : 
</div>

```php
    public function routeNotificationForRayganSms()
    {
        return $this->phone_number;
    }
``` 


<div dir="rtl">
    توجه داشته باشید در این مدل ستون حاوی شماره تماس کاربر phone_number  می باشد. در غیر اینصورت this->phone_number$ را مطابق با نام ستون حاوی شماره تماس کاربر تغییر دهید.
</div>
<div dir="rtl">
    
### متدها

`()content`: متن ارسالی به دریافت کننده.


## تولیدکننده

- [Farhad Mirzapour](https://github.com/farhadmirzapour)

## لایسنس

لایسنس این پکیج (MIT) می باشد . جهت اطلاعات در مورد این لایسنس به [License File](LICENSE) مراجعه نمایید. 

</div>

