# Laravel Features Playground 🚀

This repository is a **learning-focused Laravel project** built using the **latest Laravel version**.  
The goal is to **implement and understand Laravel core & advanced features one by one** with clean, production-ready examples.

---

## 📌 Project Goals

- Setup latest Laravel properly
- Learn Laravel internals through real implementations
- Implement async & event-driven architecture
- Follow best practices (SOLID, clean architecture)
- Use features commonly required in real-world projects

---

## 🧰 Tech Stack

- **Laravel (Latest)**
- **PHP 8.2+**
- MySQL / PostgreSQL / SQLite
- Redis (Queues & Cache)
- Laravel Horizon (optional)
- Laravel Sanctum (API Auth)
- Composer & NPM

---

## 📂 Project Setup

1️⃣ Clone Repository
```bash
git clone <your-repo-url>
cd laravel-features

2️⃣ Install Dependencies

composer install
npm install && npm run build

3️⃣ Environment Setup
cp .env.example .env
php artisan key:generate

Configure database in .env:

DB_CONNECTION=mysql
DB_DATABASE=laravel_features
DB_USERNAME=root
DB_PASSWORD=

4️⃣ Run Migrations
php artisan migrate

5️⃣ Start Server
php artisan serve

✅ Implemented / Planned Features

🔹 Phase 1: Core Laravel Basics

Routing

Controllers

Request Validation

Service Layer

Eloquent ORM

Database Relationships

🔹 Phase 2: Jobs & Queues (Async Processing)

Queue configuration (Database / Redis)

Job creation & dispatching

Background processing

Failed jobs handling

Retry & timeout configuration

php artisan queue:work

🔹 Phase 3: Events & Listeners

Custom events

Event listeners

Decoupled business logic

Domain-driven approach

Example:

UserRegistered event

SendWelcomeEmail listener

🔹 Phase 4: Queued Listeners

Async event handling

Queue-based listeners

Performance optimization

🔹 Phase 5: Notifications

Mail notifications

Database notifications

Queueable notifications

Notification channels

🔹 Phase 6: Task Scheduling

Custom Artisan commands

Scheduled jobs

Cron-based execution

php artisan schedule:work

🔹 Phase 7: Caching & Performance

Cache drivers

Query caching

Redis integration

Cache invalidation strategies

🔹 Phase 8: API Development

RESTful APIs

API Resources

Request validation

API versioning

🔹 Phase 9: Authentication & Authorization

Laravel Sanctum

API token authentication

Policies & Gates

Role-based access control (RBAC)

🔹 Phase 10: Advanced Features

Laravel Horizon

Broadcasting & WebSockets

Logging & monitoring

Error handling

Rate limiting

🧪 Example Mini Project

A User Registration System demonstrating:

User signup

Event dispatch on registration

Queued email job

Notification delivery

Scheduled cleanup command

This covers real-world Laravel workflows.

🗂 Project Structure (Simplified)

app/
├── Events/
├── Jobs/
├── Listeners/
├── Notifications/
├── Services/
├── Http/
│   ├── Controllers/
│   ├── Requests/
routes/
├── web.php
├── api.php

Happy Coding! 🚀
