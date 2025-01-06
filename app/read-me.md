Modüler CMS Sistemi
Genel Bakış
Modern, ölçeklenebilir ve tamamen modüler bir CMS sistemi. Sistemi farklı türlerde (blog, e-ticaret, haber sitesi, kurumsal site vb.) kullanabilir ve ihtiyaçlarınıza göre özelleştirebilirsiniz.
Temel Özellikler

🚀 Yüksek performanslı modüler yapı
🛡️ Gelişmiş güvenlik sistemi
🎨 Tema sistemi
🔌 Modül sistemi
📱 Responsive tasarım
🌐 Çoklu dil desteği
🔍 SEO optimizasyonu
📊 Analytics entegrasyonu
💾 Cache sistemi
🔄 API desteği

Sistem Gereksinimleri

PHP >= 8.2
MySQL >= 8.0
Redis >= 6.0
Node.js >= 16.0
Composer
NPM

Hızlı Kurulum
bashCopy# Repository'yi klonlayın
git clone https://github.com/username/modular-cms.git

# Bağımlılıkları yükleyin
composer install
npm install

# Ortam dosyasını hazırlayın
cp .env.example .env
php artisan key:generate

# Veritabanını hazırlayın
php artisan migrate
php artisan db:seed

# Frontend varlıklarını derleyin
npm run build

# Sistemi başlatın
php artisan serve
Dokümantasyon
Detaylı dokümantasyon için docs/ dizinine bakın:

Başlangıç Rehberi
Mimari Yapı
Modül Geliştirme
Tema Geliştirme
API Referansı

Site Tipleri
Sistem aşağıdaki site tiplerini destekler:
Blog Sistemi

Yazı yönetimi
Kategori sistemi
Etiketleme
Yorum sistemi
SEO optimizasyonu

E-ticaret Sistemi

Ürün yönetimi
Sipariş sistemi
Ödeme entegrasyonu
Stok takibi
Raporlama

Haber Sitesi

Haber yönetimi
Kategori sistemi
Medya galerisi
Canlı yayın desteği
Abone sistemi

Kurumsal Site

Sayfa yönetimi
Form yönetimi
İletişim sistemi
Servis tanıtımları
Ekip yönetimi

Katkıda Bulunma
Projeye katkıda bulunmak için lütfen CONTRIBUTING.md dosyasını inceleyin.
Güvenlik
Güvenlik açıkları için lütfen SECURITY.md dosyasını inceleyin.
Lisans
Bu proje MIT lisansı altında lisanslanmıştır. Detaylar için LICENSE dosyasını inceleyin.
