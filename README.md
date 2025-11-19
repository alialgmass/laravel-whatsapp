# Laravel WhatsApp Package (ali-algmass/laravel-whatsapp)

A lightweight, clean, and extensible Laravel package for sending **WhatsApp text messages** using multiple WhatsApp integrations. This package supports **sending simple text messages only**, with an extendable architecture that lets you plug in any WhatsApp provider (Green API, Meta WhatsApp Cloud API, UltraMsg, etc.).

---

# 🇬🇧 English Documentation

## 📦 Overview

`ali-algmass/laravel-whatsapp` is a Laravel package that provides a unified API for sending WhatsApp messages using different WhatsApp providers.

✔ Supports **multiple drivers**
✔ Clean **Strategy Pattern** architecture
✔ Simple **Facade** for sending messages
✔ Easy configuration and auto-discovery
✔ Focused on **sending text messages only**

---

## 🚀 Installation

### 1. Require the package

```bash
composer require ali-algmass/laravel-whatsapp
```

---

## ⚙️ Configuration

Publish the configuration file:

```bash
php artisan vendor:publish --tag=whatsapp-config
```

This creates:

```
config/whatsapp.php
```

### `.env` Example

```
WHATSAPP_DEFAULT_DRIVER=greenapi
GREENAPI_INSTANCE_ID=your_instance
GREENAPI_TOKEN=your_token
```

---

## 🔧 Usage

### Send a simple WhatsApp text message

```php
use WhatsApp;

WhatsApp::send('20123456789', 'Hello from my Laravel WhatsApp package!');
```

---

## 🧠 Architecture

```
src/
├── Contracts/        # Driver interface
├── Drivers/          # All WhatsApp providers
├── Services/         # Manager + Services
├── Facades/          # WhatsApp facade
└── Providers/        # ServiceProvider
```

### Design Patterns Used

* **Strategy Pattern** → for drivers
* **Facade Pattern** → for clean API
* **Service Container Bindings**
* **Config-based driver resolution**

---

## 🧪 Testing

```php
WhatsApp::shouldReceive('send')
    ->once()
    ->with('20123456789', 'test message');
```

---

## 📄 License

MIT License.

---

---

# 🇸🇦 الوثائق العربية

## 📦 نظرة عامة

باكدج `ali-algmass/laravel-whatsapp` هو حل بسيط ونظيف لدمج إرسال رسائل واتس آب في Laravel.

✔ يدعم **أكثر من مزود WhatsApp**
✔ مبني باستخدام **استراتيجية Drivers**
✔ واجهة استخدام بسيطة جدًا عبر **Facade**
✔ الإرسال يدعم **نص فقط**
✔ جاهز لإضافة أي Driver جديد بسهولة

---

## 🚀 التثبيت

```bash
composer require ali-algmass/laravel-whatsapp
```

---

## ⚙️ الإعداد

لنشر ملف الإعدادات:

```bash
php artisan vendor:publish --tag=whatsapp-config
```

سيتم إنشاء ملف:

```
config/whatsapp.php
```

### إعدادات ملف `.env`

```
WHATSAPP_DEFAULT_DRIVER=greenapi
GREENAPI_INSTANCE_ID=your_instance
GREENAPI_TOKEN=your_token
```

---

## 🔧 الاستخدام

### إرسال رسالة نصية عبر واتس آب

```php
use WhatsApp;

WhatsApp::send('20123456789', 'رسالة من باكدج Laravel WhatsApp!');
```

---

## 🧠 الهيكل المعماري

```
src/
├── Contracts/        # واجهة Drivers
├── Drivers/          # جميع مزودي الواتس آب
├── Services/         # الـ Manager + الخدمات
├── Facades/          # الـ Facade
└── Providers/        # مزود الخدمة
```

### الأنماط البرمجية المستخدمة

* **Strategy Pattern** لإدارة الـ Drivers
* **Facade Pattern** لتبسيط الاستخدام
* **Service Container**
* التحميل عبر **config**

---

## 📄 الترخيص

الباكدج تحت رخصة MIT ومتاح للاستخدام الحر.
