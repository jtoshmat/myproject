
Using modern PHP (think PHP7, composer, autoloading, PSR-4, and best practices) please create a "Routing Class" as defined below.

A routing class is designed to take a url segment and automatically invoke a controller class. It does this by breaking up the url segments that come
in a predictable pattern and invoking the correct class and method and inserting parameters into the method invoked. We will be following
a REST-ful convention and be using common http methods. Your Routing class will be aware of the http method and the actual url segment.

Here is the complete requirement. These tables represents all possible routing logic.

## Unnested routes 

| Method | Segment      | Controller class name | Controller method name | Parameters                                                      |
| ------ | ------------ | --------------------- | ---------------------- | --------------------------------------------------------------- |
| GET    | /patients    | PatientsController    | index                  | none                                                            |
| GET    | /patients/2  | PatientsController    | get                    | this should invoke `get($patientId)` where $patientId = 2       |
| POST   | /patients    | PatientsController    | create                 | none (extra credit for handling the request body)               |
| PATCH  | /patients/2  | PatientsController    | update                 | `update($patientId)`                                            |       
| DELETE | /patients/2  | PatientsController    | delete                 | `delete($patientId)`                                            |


## Nested routes

| Method | Segment                    | Controller class name         | Controller method name | Parameters                                  |
|------- | -------------------------- | ----------------------------- | ---------------------- | ------------------------------------------- |
| GET    | /patients/2/metrics        | PatientsMetricsController     | index                  | `index($patientId)`                         |
| GET    | /patients/2/metrics/abc    | PatientsMetricsController     | get                    | `get($patientId, $metricId)`                |
| POST   | /patients/2/metrics        | PatientsMetricsController     | create                 | `create($patientId)`                        |
| PATCH  | /patients/2/metrics/abc    | PatientsMetricsController     | update                 | `update($patientId, $metricId)`             |       
| DELETE | /patients/2/metrics/abc    | PatientsMetricsController     | delete                 | `delete($patientId, $metricId)`             |




To invoke the Routing class we'll be calling it statically. For example we'll be defining a `routes.php` that looks like this


```
Route::resource('patients');
Route::resource('patients.metrics');
```

## Jon Toshmatov's response

```
There is a Laravel recommended way to create routes by using resources
and another way is to create individual routes.
I hope you I understood what is being asked but if you need me to write any more code, please let me know.
Thanks,

Jon Toshmatov
04/14/2019 9:26 AM EST.
```