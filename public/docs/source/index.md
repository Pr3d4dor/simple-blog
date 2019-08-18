---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://simple_blog.test/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_a925a8d22b3615f12fca79456d286859 -->
## api/auth/login
> Example request:

```bash
curl -X POST "http://simple_blog.test/api/auth/login" 
```

```javascript
const url = new URL("http://simple_blog.test/api/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/login`


<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
## api/auth/logout
> Example request:

```bash
curl -X POST "http://simple_blog.test/api/auth/logout" 
```

```javascript
const url = new URL("http://simple_blog.test/api/auth/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/logout`


<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->

<!-- START_994af8f47e3039ba6d6d67c09dd9e415 -->
## api/auth/refresh
> Example request:

```bash
curl -X POST "http://simple_blog.test/api/auth/refresh" 
```

```javascript
const url = new URL("http://simple_blog.test/api/auth/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/refresh`


<!-- END_994af8f47e3039ba6d6d67c09dd9e415 -->

<!-- START_a47210337df3b4ba0df697c115ba0c1e -->
## api/auth/me
> Example request:

```bash
curl -X POST "http://simple_blog.test/api/auth/me" 
```

```javascript
const url = new URL("http://simple_blog.test/api/auth/me");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

<!-- START_da50450f1df5336c2a14a7a368c5fb9c -->
## api/posts
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/api/posts" 
```

```javascript
const url = new URL("http://simple_blog.test/api/posts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/posts`


<!-- END_da50450f1df5336c2a14a7a368c5fb9c -->

<!-- START_ea8d166c68ec035668ea724e12cafa45 -->
## api/posts
> Example request:

```bash
curl -X POST "http://simple_blog.test/api/posts" 
```

```javascript
const url = new URL("http://simple_blog.test/api/posts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/posts`


<!-- END_ea8d166c68ec035668ea724e12cafa45 -->

<!-- START_726b7bf93b3209836a1cbcda5b3b6703 -->
## api/posts/{post}
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/api/posts/1" 
```

```javascript
const url = new URL("http://simple_blog.test/api/posts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/posts/{post}`


<!-- END_726b7bf93b3209836a1cbcda5b3b6703 -->

<!-- START_6d1dfaf5fa710725519375063e4e9db0 -->
## api/posts/{post}
> Example request:

```bash
curl -X PUT "http://simple_blog.test/api/posts/1" 
```

```javascript
const url = new URL("http://simple_blog.test/api/posts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/posts/{post}`

`PATCH api/posts/{post}`


<!-- END_6d1dfaf5fa710725519375063e4e9db0 -->

<!-- START_790d23dbb8c799c36c70f7133a51e7a5 -->
## api/posts/{post}
> Example request:

```bash
curl -X DELETE "http://simple_blog.test/api/posts/1" 
```

```javascript
const url = new URL("http://simple_blog.test/api/posts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/posts/{post}`


<!-- END_790d23dbb8c799c36c70f7133a51e7a5 -->

<!-- START_109013899e0bc43247b0f00b67f889cf -->
## api/categories
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/api/categories" 
```

```javascript
const url = new URL("http://simple_blog.test/api/categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/categories`


<!-- END_109013899e0bc43247b0f00b67f889cf -->

<!-- START_2335abbed7f782ea7d7dd6df9c738d74 -->
## api/categories
> Example request:

```bash
curl -X POST "http://simple_blog.test/api/categories" 
```

```javascript
const url = new URL("http://simple_blog.test/api/categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/categories`


<!-- END_2335abbed7f782ea7d7dd6df9c738d74 -->

<!-- START_34925c1e31e7ecc53f8f52c8b1e91d44 -->
## api/categories/{category}
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/api/categories/1" 
```

```javascript
const url = new URL("http://simple_blog.test/api/categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/categories/{category}`


<!-- END_34925c1e31e7ecc53f8f52c8b1e91d44 -->

<!-- START_549109b98c9f25ebff47fb4dc23423b6 -->
## api/categories/{category}
> Example request:

```bash
curl -X PUT "http://simple_blog.test/api/categories/1" 
```

```javascript
const url = new URL("http://simple_blog.test/api/categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/categories/{category}`

`PATCH api/categories/{category}`


<!-- END_549109b98c9f25ebff47fb4dc23423b6 -->

<!-- START_7513823f87b59040507bd5ab26f9ceb5 -->
## api/categories/{category}
> Example request:

```bash
curl -X DELETE "http://simple_blog.test/api/categories/1" 
```

```javascript
const url = new URL("http://simple_blog.test/api/categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/categories/{category}`


<!-- END_7513823f87b59040507bd5ab26f9ceb5 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET -G "http://simple_blog.test/login" 
```

```javascript
const url = new URL("http://simple_blog.test/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "http://simple_blog.test/login" 
```

```javascript
const url = new URL("http://simple_blog.test/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://simple_blog.test/logout" 
```

```javascript
const url = new URL("http://simple_blog.test/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_6a107a131f853e92450ac742beba0e7f -->
## categories
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/categories" 
```

```javascript
const url = new URL("http://simple_blog.test/categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET categories`


<!-- END_6a107a131f853e92450ac742beba0e7f -->

<!-- START_6a2ad9b453d77d03400b055f92e9426f -->
## categories/create
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/categories/create" 
```

```javascript
const url = new URL("http://simple_blog.test/categories/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET categories/create`


<!-- END_6a2ad9b453d77d03400b055f92e9426f -->

<!-- START_cb37a009c57f6e054e721aada4d9664b -->
## categories
> Example request:

```bash
curl -X POST "http://simple_blog.test/categories" 
```

```javascript
const url = new URL("http://simple_blog.test/categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST categories`


<!-- END_cb37a009c57f6e054e721aada4d9664b -->

<!-- START_1038e1f50fce16240ff593d39167770f -->
## categories/{category}
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/categories/1" 
```

```javascript
const url = new URL("http://simple_blog.test/categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET categories/{category}`


<!-- END_1038e1f50fce16240ff593d39167770f -->

<!-- START_bd3c894d3ea5ccd46778dcf41ef0ff3c -->
## categories/{category}/edit
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/categories/1/edit" 
```

```javascript
const url = new URL("http://simple_blog.test/categories/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET categories/{category}/edit`


<!-- END_bd3c894d3ea5ccd46778dcf41ef0ff3c -->

<!-- START_5c7692955c3e2542b25146f0d77e3767 -->
## categories/{category}
> Example request:

```bash
curl -X PUT "http://simple_blog.test/categories/1" 
```

```javascript
const url = new URL("http://simple_blog.test/categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT categories/{category}`

`PATCH categories/{category}`


<!-- END_5c7692955c3e2542b25146f0d77e3767 -->

<!-- START_c595e22ac497b4ace0ad442feffe7712 -->
## categories/{category}
> Example request:

```bash
curl -X DELETE "http://simple_blog.test/categories/1" 
```

```javascript
const url = new URL("http://simple_blog.test/categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE categories/{category}`


<!-- END_c595e22ac497b4ace0ad442feffe7712 -->

<!-- START_b50fbd1dc666341a0aba5436344a60d9 -->
## posts
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/posts" 
```

```javascript
const url = new URL("http://simple_blog.test/posts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET posts`


<!-- END_b50fbd1dc666341a0aba5436344a60d9 -->

<!-- START_8df744d99542ae7ec5b8c2831eeaa597 -->
## posts/create
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/posts/create" 
```

```javascript
const url = new URL("http://simple_blog.test/posts/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET posts/create`


<!-- END_8df744d99542ae7ec5b8c2831eeaa597 -->

<!-- START_7a7f674c347aaf46c9a4d9ea95713236 -->
## posts
> Example request:

```bash
curl -X POST "http://simple_blog.test/posts" 
```

```javascript
const url = new URL("http://simple_blog.test/posts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST posts`


<!-- END_7a7f674c347aaf46c9a4d9ea95713236 -->

<!-- START_e448059c27b44e4d6f45041c75927d6b -->
## posts/{post}
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/posts/1" 
```

```javascript
const url = new URL("http://simple_blog.test/posts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET posts/{post}`


<!-- END_e448059c27b44e4d6f45041c75927d6b -->

<!-- START_3569c66168c0ee1877c1864c11244eaf -->
## posts/{post}/edit
> Example request:

```bash
curl -X GET -G "http://simple_blog.test/posts/1/edit" 
```

```javascript
const url = new URL("http://simple_blog.test/posts/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET posts/{post}/edit`


<!-- END_3569c66168c0ee1877c1864c11244eaf -->

<!-- START_b463ab373596dddd1f814b07d928685b -->
## posts/{post}
> Example request:

```bash
curl -X PUT "http://simple_blog.test/posts/1" 
```

```javascript
const url = new URL("http://simple_blog.test/posts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT posts/{post}`

`PATCH posts/{post}`


<!-- END_b463ab373596dddd1f814b07d928685b -->

<!-- START_6b213ea5e7e7267e9ef7edf07150415c -->
## posts/{post}
> Example request:

```bash
curl -X DELETE "http://simple_blog.test/posts/1" 
```

```javascript
const url = new URL("http://simple_blog.test/posts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE posts/{post}`


<!-- END_6b213ea5e7e7267e9ef7edf07150415c -->

<!-- START_3340c681e1d077cb3238cfcd9aad8f90 -->
## Invoke the controller method.

> Example request:

```bash
curl -X GET -G "http://simple_blog.test/" 
```

```javascript
const url = new URL("http://simple_blog.test/");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (301):

```json
null
```

### HTTP Request
`GET /`

`POST /`

`PUT /`

`PATCH /`

`DELETE /`

`OPTIONS /`


<!-- END_3340c681e1d077cb3238cfcd9aad8f90 -->


