To turn off blade templating scaping data use `!`.
 `{{!! <stuff-to-scape/> !!}}`
 Laravel uses magic methods to strip _Tasks_ from `->withTasks`:
```php
 return view('welcome')->withTasks($tasks)->withFoo('foo');
```
---
Routes like those in `web.php` are handled through _closures._
---

**migrations** are like version control for database.
_all_ `php artisan make:*` commands generate new files and classes.

**collections** are like arrays.

---

**CSRF** stands for "Cross-Site Request Forgery".

---
7 possible behaviors for interacting with a project:

GET `/projects` _represents all of the resources. The naming convention for this controller is_ (index).<br />
GET `/projects/create` (create).<br />
GET `/projects/1` (show).<br />
POST `/projects` _To persost a new project make a_ `POST` _request. The naming convention for this controller is_ (store).<br />
GET `/projects/1/edit` (edit).<br />
PATCH `/projects/1` (update).<br />
DELETE `/projects/1` (destroy).<br />

`php artisan route:list` to list all routes in an app.
`php artisan make:controller <controllerName> -r` the `-r` flag will make the necessary method steps (create, show, edit, delete...)