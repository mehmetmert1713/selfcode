# docs/getting-started/configuration.md

```markdown
# Sistem Yapılandırması

## Temel Yapılandırma

### Core Yapılandırması

`config/core.php` dosyasındaki temel sistem ayarları:

```php
return [
    // Site tipi yapılandırması
    'site_type' => [
        'default' => 'blog',
        'available' => [
            'blog',
            'ecommerce',
            'news',
            'corporate'
        ]
    ],

    // Modül ayarları
    'modules' => [
        'autoload' => true,
        'cache' => true,
        'path' => base_path('modules')
    ],

    // Tema ayarları
    'themes' => [
        'default' => 'default',
        'admin' => 'admin',
        'path' => base_path('themes')
    ],

    // Cache ayarları
    'cache' => [
        'enabled' => true,
        'ttl' => 3600,
        'prefix' => 'cms_'
    ],

    // Güvenlik ayarları
    'security' => [
        'api_rate_limit' => 60,
        '2fa_enabled' => false,
        'password_expiry' => 90
    ]
];
```

### Ortam Değişkenleri

`.env` dosyasında yapılandırılması gereken önemli ayarlar:

```env
# Uygulama Ayarları
APP_NAME=ModularCMS
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

# Veritabanı Ayarları
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=modular_cms
DB_USERNAME=root
DB_PASSWORD=

# Cache & Session
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis

# Mail Ayarları
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

# AWS Ayarları (Opsiyonel)
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=
AWS_BUCKET=
```

## Modül Yapılandırması

Her modül için `module.json` dosyası:

```json
{
    "name": "Blog",
    "alias": "blog",
    "description": "Blog modülü",
    "version": "1.0.0",
    "keywords": [
        "blog",
        "content",
        "articles"
    ],
    "active": 1,
    "order": 1,
    "providers": [
        "Modules\\Blog\\Providers\\BlogServiceProvider"
    ],
    "aliases": {},
    "files": [],
    "requires": []
}
```

## Tema Yapılandırması

Her tema için `theme.json` dosyası:

```json
{
    "name": "Default Theme",
    "alias": "default",
    "description": "Default CMS theme",
    "version": "1.0.0",
    "author": "Your Name",
    "screenshots": [
        "screenshot.png"
    ],
    "menus": [
        "main",
        "footer"
    ],
    "widgets": [
        "sidebar",
        "footer"
    ],
    "compatible_with": [
        "blog",
        "corporate"
    ]
}
```

## Güvenlik Yapılandırması

### API Güvenliği

`config/auth.php`:
```php
return [
    'guards' => [
        'api' => [
            'driver' => 'sanctum',
            'provider' => 'users',
        ],
    ],
    
    'api_rate_limits' => [
        'default' => [
            'limit' => 60,
            'decay' => 1,
        ],
        'high_traffic' => [
            'limit' => 1000,
            'decay' => 1,
        ],
    ],
];
```

### CORS Yapılandırması

`config/cors.php`:
```php
return [
    'paths' => ['api/*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
```

## Cache Yapılandırması

`config/cache.php`:
```php
return [
    'default' => env('CACHE_DRIVER', 'redis'),
    
    'stores' => [
        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
            'lock_connection' => 'default',
        ],
    ],
    
    'prefix' => env('CACHE_PREFIX', 'modular_cms'),
];
```

## Medya Yapılandırması

`config/media.php`:
```php
return [
    'disk' => 'public',
    
    'allowed_types' => [
        'image' => ['jpg', 'jpeg', 'png', 'gif', 'webp'],
        'video' => ['mp4', 'avi', 'mov'],
        'audio' => ['mp3', 'wav'],
        'document' => ['pdf', 'doc', 'docx']
    ],
    
    'max_file_size' => 10240, // KB
    
    'image_sizes' => [
        'thumbnail' => [150, 150],
        'medium' => [300, 300],
        'large' => [800, 800]
    ],
    
    'optimization' => [
        'jpeg_quality' => 85,
        'png_compression' => 9
    ]
];
```

## SEO Yapılandırması

`config/seo.php`:
```php
return [
    'meta' => [
        'robots' => 'index,follow',
        'viewport' => 'width=device-width, initial-scale=1',
        'author' => env('APP_NAME'),
    ],
    
    'sitemap' => [
        'enabled' => true,
        'cache' => true,
        'cache_duration' => 3600
    ],
    
    'analytics' => [
        'google' => [
            'enabled' => true,
            'id' => env('GOOGLE_ANALYTICS_ID')
        ]
    ]
];
```

## Sonraki Adımlar

- [Hızlı Başlangıç Rehberi](quick-start.md)
- [Temel Kullanım](basic-usage.md)
- [Modül Geliştirme](../modules/creating-modules.md)
```

[quick-start.md ve basic-usage.md dosyaları ile devam edeyim mi?]