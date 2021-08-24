+--------+----------+----------------------------------+------+------------------------------------------------------------+------------------------------------------+
| Domain | Method   | URI                              | Name | Action                                                     | Middleware                               |
+--------+----------+----------------------------------+------+------------------------------------------------------------+------------------------------------------+
|        | GET|HEAD | /                                |      | Closure                                                    | web                                      |
|        | GET|HEAD | api/user                         |      | Closure                                                    | api                                      |
|        |          |                                  |      |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | GET|HEAD | post/comment/{post}              |      | App\Http\Controllers\PostController@getComment             | web                                      |
|        | GET|HEAD | post/{user}                      |      | App\Http\Controllers\UserController@fetchPosts             | web                                      |
|        | GET|HEAD | sanctum/csrf-cookie              |      | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show | web                                      |
|        | POST     | users/create                     |      | App\Http\Controllers\UserController@createUser             | web                                      |
|        | POST     | users/{user}/post                |      | App\Http\Controllers\PostController@createPost             | web                                      |
|        | POST     | users/{user}/post/{post}/comment |      | App\Http\Controllers\CommentController@createComment       | web                                      |
|        | GET|HEAD | {fallbackPlaceholder}            |      | Closure                                                    | web                                      |
+--------+----------+----------------------------------+------+------------------------------------------------------------+------------------------------------------+
