Laravel EasySMS
---

[overtrue/easy-sms](https://github.com/overtrue/easy-sms) service provider for Laravel.

[![Sponsor me](https://github.com/overtrue/overtrue/blob/master/sponsor-me-button-s.svg?raw=true)](https://github.com/sponsors/overtrue)

## Installing

```shell
$ composer require overtrue/laravel-easy-sms -vvv
```

## Usage

*config/services.php*

```php
    'easy-sms' => [
        // HTTP 请求的超时时间（秒）
        'timeout' => 5.0,
    
        // 默认发送配置
        'default' => [
            // 网关调用策略，默认：顺序调用
            'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,
    
            // 默认可用的发送网关
            'gateways' => [
                'yunpian', 'aliyun',
            ],
        ],
        // 可用的网关配置
        'gateways' => [
            'errorlog' => [
                'file' => '/tmp/easy-sms.log',
            ],
            'yunpian' => [
                'api_key' => env('EASY_SMS_YUNPIAN_API_KEY'),
            ],
            'aliyun' => [
                'access_key_id' => env('EASY_SMS_ALIYUN_KEY_ID'),
                'access_key_secret' =>  env('EASY_SMS_ALIYUN_API_KEY'),
                'sign_name' => '',
            ],
            //...
        ],
    ],
```

Send a message:

```php
app('easy-sms')->send(13188888888, [
    'content'  => '您的验证码为: 6379',
    'template' => 'SMS_001',
    'data' => [
        'code' => 6379
    ],
]);
```

[More...](https://github.com/overtrue/easy-sms)

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/overtrue/laravel-easy-sms/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/overtrue/laravel-easy-sms/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

[![Sponsor me](https://github.com/overtrue/overtrue/blob/master/sponsor-me.svg?raw=true)](https://github.com/sponsors/overtrue)

## Project supported by JetBrains

Many thanks to Jetbrains for kindly providing a license for me to work on this and other open-source projects.

[![](https://resources.jetbrains.com/storage/products/company/brand/logos/jb_beam.svg)](https://www.jetbrains.com/?from=https://github.com/overtrue)


## PHP 扩展包开发

> 想知道如何从零开始构建 PHP 扩展包？
>
> 请关注我的实战课程，我会在此课程中分享一些扩展开发经验 —— [《PHP 扩展包实战教程 - 从入门到发布》](https://learnku.com/courses/creating-package)

## License

MIT
