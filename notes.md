To turn off blade templating scaping data use `!`.
`{{!! <stuff-to-scape/> !!}}`
Laravel uses magic methods to strip _Tasks_ from `->withTasks`:

```php
 return view('welcome')->withTasks($tasks)->withFoo('foo');
```

---

## Routes like those in `web.php` are handled through _closures._

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

---

Because there is no way of telling the browser about a `PATCH` request laravel provides `{{ method_field('PATCH') }}`, which creates an `<input type="hidden" name="_method" value="PATCH">` that laravel understands as an _edit_ to our database.

---

`$fillable` fields that are ok to mass assign are declared here.
`$guarded` the opposite of `$fillable` accept everything except the field declared here.

`::create` method does the same as:

```php
    $project = new Project(); // instanciate a new project

    // set necessary fields
    $project->title = request('title');
    $project->description = request('description');

    $project->save(); // persist the newly created project
```
request method can be used in a couple of ways:
```php
    dd(request('title')); // returns the string name for the key 'title'.
    dd(request(['title'])); // returns the key/value pair.
    dd(request()->all()); // returns everything that is in a project array.
```

---
_Client side browser validation_ comes in the form of `required` in HTML5, but it is not dependable.
_Server side validation_ can be done using `request()->validate()` method. `request()->validate()` redirects the page with a jSON object that can be referenced.
[Laravel validation rules](https://laravel.com/docs/5.8/validation#available-validation-rules)

---

**encapsulation** hide internal state and values inside a class.

**models** encapsulate what it means to add a "task"

**controllers** house the models, doesn't need to be aware of the DB, only need to know what it is we want the model to do.

