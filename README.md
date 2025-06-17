# 🚗 RideAndSavor

**RideAndSavor** is a multi-service web platform that integrates food delivery, e-commerce, and ride-hailing services into a single application. It provides a seamless experience for customers, vendors, and drivers to interact in real-time.

---

## 📂 Project Structure

* **Frontend:** HTML5, CSS3, Bootstrap, JavaScript, Vue.js
* **Backend:** PHP (Laravel Framework)
* **Database:** MySQL
* **APIs:** RESTful APIs, Laravel Sanctum, OAuth2 (Social Login)
* **Real-Time Features:** WebSocket-like updates for driver tracking and order notifications
* **Payment Integration:** Stripe, KPay, WavePay, PayPal
* **Version Control:** Git, GitHub

---

## 🚀 Key Features

* ✅ Multi-vendor food delivery system
* ✅ E-commerce product ordering
* ✅ Real-time taxi booking with driver notifications
* ✅ User authentication: Email/Phone OTP and Google Social Login
* ✅ Role-based access: Admin, Vendor, Driver, Customer
* ✅ Stripe, KPay, WavePay, and PayPal payment support
* ✅ Real-time driver location tracking and ride bidding system
* ✅ Inventory, order, and payment management for vendors
* ✅ Admin dashboard for managing users, orders, and payments

---

## 🛠️ Installation

### Prerequisites

* PHP 8.0 or higher
* MySQL
* Composer
* Node.js & NPM

### Clone the Repository

```bash
git clone https://github.com/kayzinkhaing/Daily-Fair-Deal.git
cd rideAndSavor 
```

### Backend Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
```

* Configure your `.env` file with your database and mail settings.

```bash
php artisan migrate
php artisan db:seed
php artisan serve
```

### Frontend Setup

```bash
npm install
npm run dev
```

---

## 📦 API Documentation

* RESTful API built with Laravel
* Authentication via Laravel Sanctum and OAuth2
* API tested with Postman

---

## 🌐 Live Demo

* [GitHub Repo](https://github.com/kayzinkhaing/Daily-Fair-Deal)

---

## 👥 Team & Contributors

* **Kay Zin Khaing** – Backend Developer
* Team Size: 4+ Developers

---
