# docs/getting-started/basic-usage.md

```markdown
# Temel Kullanım Kılavuzu

## Admin Panel Kullanımı

### Dashboard
Admin paneline giriş yaptığınızda karşınıza çıkan dashboard'da:

- Site istatistikleri
- Son aktiviteler
- Sistem durumu
- Hızlı işlem menüleri
- Bildirimler

bulunur.

### Temel İşlemler

#### 1. İçerik Yönetimi
```php
// İçerik ekranına erişim
Admin > İçerik > Tüm İçerikler

// Temel işlemler
- Yeni İçerik Ekleme: "Yeni Ekle" butonu
- İçerik Düzenleme: İçerik satırındaki "Düzenle" butonu
- İçerik Silme: İçerik satırındaki "Sil" butonu
- Toplu İşlemler: Checkbox ile seçim yapıp üst menüden işlem seçme
```

#### 2. Medya Yönetimi
```php
// Medya kütüphanesine erişim
Admin > Medya > Medya Kütüphanesi

// Temel işlemler
- Dosya Yükleme: Sürükle-bırak veya "Yükle" butonu
- Dosya Düzenleme: Dosya üzerine tıklayıp "Düzenle"
- Dosya Organizasyonu: Klasörleme ve etiketleme
- Toplu İşlemler: Çoklu seçim ve toplu işlem menüsü
```

#### 3. Menü Yönetimi
```php
// Menü yönetimine erişim
Admin > Görünüm > Menüler

// Temel işlemler
- Yeni Menü: "Yeni Menü" butonu
- Menü Düzenleme: Sürükle-bırak ile sıralama
- Öğe Ekleme: Sol panelden öğe seçip "Ekle"
- Öğe Düzenleme: Öğe üzerine tıklayıp ayarları düzenleme
```

## Site Tipi Özellikleri

### Blog Sistemi
```php
// Yazı İşlemleri
Admin > Blog > Yazılar
- Yeni yazı ekleme
- Kategori yönetimi
- Etiket yönetimi
- Yorum yönetimi

// Blog Ayarları
Admin > Blog > Ayarlar
- Sayfalama ayarları
- Yorum ayarları
- SEO ayarları
```

### E-ticaret Sistemi
```php
// Ürün İşlemleri
Admin > Ürünler > Tüm Ürünler
- Ürün ekleme/düzenleme
- Kategori yönetimi
- Stok yönetimi
- Fiyat yönetimi

// Sipariş İşlemleri
Admin > Siparişler
- Sipariş listesi
- Sipariş detayları
- Sipariş durumu güncelleme
```

### Haber Sistemi
```php
// Haber İşlemleri
Admin > Haberler > Tüm Haberler
- Haber ekleme/düzenleme
- Kategori yönetimi
- Manşet yönetimi
- Medya galerisi

// Haber Ayarları
Admin > Haberler > Ayarlar
- Haber görüntüleme ayarları
- SEO ayarları
- Sosyal medya entegrasyonu
```

## Modül Kullanımı

### Modül Yönetimi
```php
// Modül işlemleri
Admin > Sistem > Modüller
- Modül yükleme
- Modül etkinleştirme/devre dışı bırakma
- Modül ayarları
- Modül güncelleme

// Modül yükleme örneği
php artisan module:install forum
php artisan module:enable forum
```

### Tema Yönetimi
```php
// Tema işlemleri
Admin > Görünüm > Temalar
- Tema yükleme
- Tema etkinleştirme
- Tema özelleştirme
- Tema ayarları

// Tema yükleme örneği
php artisan theme:install modern
php artisan theme:activate modern
```

## Medya İşlemleri

### Video İşlemleri
```php
// Video yükleme ve yönetim
Admin > Medya > Videolar
- Video yükleme
- Video düzenleme
- Thumbnail oluşturma
- Playlist yönetimi

// Video optimizasyonu
- Format dönüşümü
- Kalite ayarları
- Streaming ayarları
```

### Galeri İşlemleri
```php
// Galeri yönetimi
Admin > Medya > Galeriler
- Galeri oluşturma
- Görsel ekleme
- Sıralama
- Görüntüleme ayarları
```

## SEO Yönetimi

### Meta Etiketleri
```php
// SEO ayarları
Admin > SEO > Meta Etiketleri
- Sayfa meta etiketleri
- Open Graph etiketleri
- Twitter Cards
- Schema.org işaretlemeleri
```

### Sitemap Yönetimi
```php
// Sitemap işlemleri
Admin > SEO > Sitemap
- Sitemap oluşturma
- Öncelik ayarları
- Güncelleme sıklığı
- Otomatik güncelleme
```

## Cache Yönetimi

### Cache İşlemleri
```php
// Cache temizleme
Admin > Sistem > Cache
- Tüm cache temizleme
- Seçili cache temizleme
- Cache ayarları

// Cache komutları
php artisan cache:clear     # Tüm cache
php artisan view:clear     # View cache
php artisan config:clear   # Config cache
```

## Raporlama

### Sistem Raporları
```php
// Sistem raporları
Admin > Raporlar > Sistem
- Performans raporu
- Hata raporu
- Güvenlik raporu
- Log raporu
```

### Analytics Raporları
```php
// Analytics raporları
Admin > Raporlar > Analytics
- Ziyaretçi raporu
- Sayfa görüntüleme raporu
- Davranış raporu
- Dönüşüm raporu
```

## API Kullanımı

### API İşlemleri
```php
// API token alma
POST /api/auth/login
{
    "email": "admin@example.com",
    "password": "password"
}

// İçerik listesi alma
GET /api/content
Headers: Authorization: Bearer {token}

// İçerik ekleme
POST /api/content
Headers: Authorization: Bearer {token}
{
    "title": "Başlık",
    "content": "İçerik"
}
```

## Sonraki Adımlar

- [Modül Geliştirme](../modules/creating-modules.md)
- [Tema Geliştirme](../themes/theme-development.md)
- [API Kullanımı](../api/rest-api.md)
```

[Architecture bölümünün dokümantasyonu ile devam edelim mi?]