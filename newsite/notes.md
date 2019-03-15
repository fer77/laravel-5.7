To turn off blade templating scaping data use `!`.
 `{{!! <stuff-to-scape/> !!}}`
 Laravel uses magic methods to strip _Tasks_ from `->withTasks`:
 ```php
 return view('welcome')->withTasks($tasks)->withFoo('foo');
 ```
---
Routes like those in `web.php` are handled through _closures_.

---

**migrations** are like version control for database.
_all_ `php artisan make:*` commands generate new files and classes.

**collections** are like arrays.