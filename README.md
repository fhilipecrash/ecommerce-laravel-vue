# e-Commerce

The goal is to make an e-commerce using a monolithic application with technologies that interested me.

# Technologies

- [Laravel](https://laravel.com/)
- [Vue.js](https://vuejs.org/)
- [Inertia](https://inertiajs.com/)
- [Tailwind CSS](https://tailwindcss.com/)

Here Inertia bridges the gap between Vue and Laravel, creating a robust and performant monolith with a SPA and no need for an API.

# Usage

Start Sail container, install Composer dependencies and run migrations
  
```bash
./vendor/bin/sail up -d
./vendor/bin/sail composer install
./vendor/bin/sail artisan migrate
```

Install the Node dependencies then start the development server.
```bash
yarn # or npm install
yarn dev # or npm run dev
```
