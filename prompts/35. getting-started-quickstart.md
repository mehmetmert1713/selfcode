# docs/getting-started/quick-start.md

```markdown
# Hızlı Başlangıç Rehberi

## İlk Adımlar

### 1. Site Tipini Seçme

Admin panelinden site tipini seçin:
```bash
http://your-domain.com/admin/site-type
```

Mevcut site tipleri:
- Blog
- E-ticaret
- Haber
- Kurumsal

### 2. Temel Yapılandırma

#### Admin Paneli Üzerinden
1. Admin paneline giriş yapın
2. `Ayarlar > Genel Ayarlar` bölümüne gidin
3. Aşağıdaki alanları doldurun:
   - Site Adı
   - Site Açıklaması
   - İletişim E-posta
   - Zaman Dilimi
   - Varsayılan Dil

#### Tema Seçimi
1. `Görünüm > Temalar` bölümüne gidin
2. Site tipinize uygun bir tema seçin
3. Temayı özelleştirin:
   - Renk şeması
   - Font seçimleri
   - Header/Footer ayarları
   - Menü yapısı

### 3. İçerik Ekleme

Her site tipi için temel içerik ekleme adımları:

#### Blog
```php
// Kategori Ekleme
php artisan make:module-content blog category "Teknoloji"

// Yazı Ekleme
php artisan make:module-content blog post "İlk Blog Yazım"
```

#### E-ticaret
```php
// Ürün Kategorisi Ekleme
php artisan make:module-content ecommerce category "Elektronik"

// Ürün Ekleme
php artisan make:module-content ecommerce product "Akıllı Telefon"
```

#### Haber
```php
// Haber Kategorisi Ekleme
php artisan make:module-content news category "Gündem"

// Haber Ekleme
php artisan make:module-content news article "Son Dakika"
```

#### Kurumsal
```php
// Sayfa Ekleme
php artisan make:module-content corporate page "Hakkımızda"

// Servis Ekleme
php artisan make:module-content corporate service "Danışmanlık"
```

## Modül Yönetimi

### Modül Yükleme
```bash
php artisan module:install module-name
```

### Modül Etkinleştirme
```bash
php artisan module:enable module-name
```

### Modül Güncelleme
```bash
php artisan module:update module-name
```

## Medya Yönetimi

### Medya Yükleme
1. Admin panelinde `Medya > Medya Yöneticisi`ne gidin
2. Dosyaları sürükle-bırak ile yükleyin veya "Dosya Seç" butonunu kullanın
3. Yüklenen medyaları kategorilere ayırın

### Galeri Oluşturma
1. `Medya > Galeriler`e gidin
2. "Yeni Galeri" butonuna tıklayın
3. Galeri ayarlarını yapın:
   - Galeri adı
   - Görüntüleme tipi
   - Sıralama
4. Medya seçin ve kaydedin

## SEO Ayarları

### Meta Etiketleri
1. Her içerik için SEO ayarlarını yapın:
   - Meta başlık
   - Meta açıklama
   - Anahtar kelimeler

### Sitemap Oluşturma
```bash
php artisan seo:generate-sitemap
```

### Robots.txt Düzenleme
```bash
php artisan seo:generate-robots
```

## Cache Yönetimi

### Cache Temizleme
```bash
php artisan cache:clear
```

### View Cache Temizleme
```bash
php artisan view:clear
```

### Route Cache Temizleme
```bash
php artisan route:clear
```

## Örnek API Kullanımı

### Token Alma
```bash
curl -X POST http://your-domain.com/api/auth/login \
  -H "Content-Type: application/json" \
  -d '{"email":"admin@example.com","password":"password"}'
```

### İçerik Listeleme
```bash
curl -X GET http://your-domain.com/api/content \
  -H "Authorization: Bearer {your-token}"
```

### İçerik Ekleme
```bash
curl -X POST http://your-domain.com/api/content \
  -H "Authorization: Bearer {your-token}" \
  -H "Content-Type: application/json" \
  -d '{"title":"Test İçerik","content":"İçerik detayı"}'
```

## Sorun Giderme

### Log Dosyaları
```bash
tail -f storage/logs/laravel.log
```

### Cache Temizleme
```bash
php artisan optimize:clear
```

### Veritabanı Yenileme
```bash
php artisan migrate:fresh --seed
```

## Sonraki Adımlar

- [Temel Kullanım](basic-usage.md)
- [Modül Geliştirme](../modules/creating-modules.md)
- [Tema Geliştirme](../themes/theme-development.md)
```

[basic-usage.md ile devam edeyim mi?]