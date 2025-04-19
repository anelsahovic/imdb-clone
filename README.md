# 🎬 IMDb Clone - Laravel Movie Library

A full-featured **Laravel-based IMDb clone** that serves as an online movie library. The app provides a clean and user-friendly interface built with **Blade** templates, supporting user authentication, admin features, reviews, favorites, and full CRUD capabilities for movies, genres, actors, and directors.

![Screenshot](/public/cover-image.png)

---

## 🚀 Features

-   🔐 **Authentication**

    -   User registration and login
    -   Role-based access control: `Admin` and `Customer`

-   🎥 **Movie Library**

    -   Browse movies with detailed pages
    -   View genres, actors, and directors
    -   Leave reviews and mark favorites

-   🛠️ **Admin Dashboard**

    -   Manage Movies, Genres, Actors, Directors, and Reviews
    -   Add, update, or delete content
    -   Only users with the `Admin` role can perform write actions

-   🙍‍♂️ **User Profile (My Profile)**
    -   View favorite movies
    -   See all submitted reviews
    -   Update personal information

---

## 🛠️ Tech Stack

-   **Framework:** Laravel 11
-   **Frontend:** Blade (Laravel templating)
-   **Authentication:** Laravel Breeze (or custom if applicable)
-   **Database:** MySQL / SQLite
-   **Testing:** Pest PHP
-   **Styling:** Tailwind CSS (assumed based on Laravel default)
-   **Dev Tools:** Vite, Laravel Pint

---

## 📦 Installation

```bash
#Clone the repository**
git clone https://github.com/yourusername/imdb-clone.git
cd imdb-clone

#Install PHP dependencies
 composer install

 #Install Node dependencies
 npm install

 #Setup environment
 cp .env.example .env
php artisan key:generate

#Configure database Update .env with your DB credentials, then run:
php artisan migrate --seed

#Start the development server
php artisan serve

#Or open .test in browser if using HERD

#run npm server
npm run dev
```

### 👥 User Roles

-   Admin | Full CRUD access to all models, manage users
-   Customer | Browse, review, favorite, and update own profile

## 🧠 Author

Anel Šahović
🌍 Based in Europe
📧 anel.sahovic.bsc@gmail.com
🔗 anelsahovic.com
