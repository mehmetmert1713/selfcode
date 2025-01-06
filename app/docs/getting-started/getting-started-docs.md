# docs/getting-started/installation.md

```markdown
# Kurulum Rehberi

## Sistem Gereksinimleri

### Temel Gereksinimler
- PHP >= 8.2
- MySQL >= 8.0
- Redis >= 6.0
- Node.js >= 16.0
- Composer
- NPM

### PHP Eklentileri
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Redis PHP Extension
- GD PHP Extension

## Kurulum Adımları

### 1. Repository'yi Klonlama
```bash
git clone https://github.com/username/modular-cms.git
cd modular-cms
```

### 2. Composer Bağımlılıklarını Yükleme
```bash
composer install
```

### 3. NPM Bağımlılıklarını Yükleme
```bash
npm install
```

### 4. Ortam Dosyasını Hazırlama
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Veritabanı Yapılandırması
`.env` dosyasını düzenleyin:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Redis Yapılandırması
`.env` dosyasında Redis ayarlarını yapın:
```env
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

### 7. Veritabanı Migrasyonları
```bash
php artisan migrate
php artisan db:seed
```

### 8. Storage Linkini Oluşturma
```bash
php artisan storage:link
```

### 9. Frontend Varlıklarını Derleme
```bash
npm run build
```

### 10. Sistemin Çalıştırılması
```bash
php artisan serve
```

## Doğrulama

Kurulumun başarılı olduğunu doğrulamak için:

1. Tarayıcınızda `http://localhost:8000` adresini açın
2. Admin paneline `http://localhost:8000/admin` adresinden erişin
   - Varsayılan kullanıcı adı: `admin@example.com`
   - Varsayılan şifre: `password`

## Sorun Giderme

### Sık Karşılaşılan Sorunlar

1. **Composer Hataları**
```bash
composer clear-cache
composer update
```

2. **NPM Hataları**
```bash
rm -rf node_modules
npm cache clean --force
npm install
```

3. **Veritabanı Bağlantı Hatası**
- `.env` dosyasındaki veritabanı bilgilerini kontrol edin
- MySQL servisinin çalıştığından emin olun
- Veritabanı kullanıcı izinlerini kontrol edin

4. **Redis Bağlantı Hatası**
- Redis servisinin çalıştığından emin olun
- Redis bağlantı bilgilerini kontrol edin

5. **Storage İzinleri**
```bash
chmod -R 775 storage bootstrap/cache
chown -R $USER:www-data storage bootstrap/cache
```

## Güvenlik Notları

1. **Dosya İzinleri**
- `storage/` ve `bootstrap/cache/` dizinleri web sunucusu tarafından yazılabilir olmalı
- Diğer tüm dosyalar için sadece okuma izni yeterli

2. **Ortam Değişkenleri**
- Hassas bilgileri `.env` dosyasında tutun
- `.env` dosyasını asla versiyon kontrolüne eklemeyin
- Production ortamında debug modunu kapatın

3. **API Anahtarları**
- Güçlü API anahtarları kullanın
- Anahtarları düzenli olarak yenileyin
- Rate limiting uygulayın

## İleri Seviye Yapılandırma

### 1. Queue Sistemi
```env
QUEUE_CONNECTION=redis
```

### 2. Mail Sistemi
```env
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
```

### 3. Cache Sistemi
```env
CACHE_DRIVER=redis
```

### 4. Session Yönetimi
```env
SESSION_DRIVER=redis
SESSION_LIFETIME=120
```

## Sonraki Adımlar

- [Temel Yapılandırma](configuration.md)
- [Hızlı Başlangıç Rehberi](quick-start.md)
- [Modül Sistemi](../modules/creating-modules.md)
- [Tema Geliştirme](../themes/theme-development.md)
```

[Diğer Getting Started MD dosyaları ile devam edeyim mi?]