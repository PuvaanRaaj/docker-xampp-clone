# 🐳 Docker-XAMPP-Clone (PHP + Apache + MariaDB + phpMyAdmin)

This is a Dockerized development stack inspired by XAMPP, built for 2025 devs who want a fast, portable, and multi-platform PHP environment.

## 🚀 Features

* PHP 8.4 + Apache
* MariaDB 11.x
* phpMyAdmin
* Simulated host API on `host.docker.internal:3000`
* Hot-reload PHP projects via `htdocs/`

## 🛠️ Getting Started

```bash
git clone https://github.com/yourname/docker-xampp-clone.git
cd docker-xampp-clone
docker compose up --build
```

Then open:

* [http://localhost:8080](http://localhost:8080) → your PHP projects (`htdocs/`)
* [http://localhost:8081](http://localhost:8081) → phpMyAdmin

  * Server: `db`, Username: `root`, Password: `root`
* [http://localhost:3000](http://localhost:3000) → simulated host service

## 📂 Project Layout

```
htdocs/               → Your PHP projects go here
apache-php/           → Custom PHP + Apache Dockerfile
testhost-content/     → Static HTML served at :3000 as mock API
```

## ✅ Sample Project

```bash
mkdir -p htdocs/my-app
echo "<?php echo 'Hello World!';" > htdocs/my-app/index.php
```

Then open: [http://localhost:8080/my-app](http://localhost:8080/my-app)

---

Happy containerized hacking! 🐳🔥
