# viewer

FastD View Service Provider

### 使用

注册服务提供器。

```php
#file: config/app.php
<?php

return [
    // code...
    'services' => [
        \FastD\Viewer\Viewer::class,
    ],
    // code...    
];
```

添加试图配置信息:

```php
#file: config/config.php

<?php

return [
    // code...
    'viewer' => [
        'path' => [],
        'options' => [],
    ],
    // code...    
];
```

具体配置请查看: [twig](http://twig.sensiolabs.org/documentation)

### 联系

如果你在使用中遇到问题，请联系: [bboyjanhuang@gmail.com](mailto:bboyjanhuang@gmail.com). 微博: [编码侠](http://weibo.com/ecbboyjan)

## License MIT