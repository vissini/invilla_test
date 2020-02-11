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
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_6f8235206bf696aede4714c5ad0c0822 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/people" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/people"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "name": "Name 1",
            "created_at": "2020-02-10 02:15:20",
            "updated_at": "2020-02-10 02:29:09"
        },
        {
            "id": 2,
            "name": "Name 2",
            "created_at": "2020-02-10 02:15:20",
            "updated_at": "2020-02-10 02:29:09"
        },
        {
            "id": 3,
            "name": "Name 3",
            "created_at": "2020-02-10 02:15:20",
            "updated_at": "2020-02-10 02:29:09"
        },
        {
            "id": 12,
            "name": "WebApi",
            "created_at": "2020-02-11 02:14:48",
            "updated_at": "2020-02-11 02:14:48"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/people?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/people?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/people",
    "per_page": 5,
    "prev_page_url": null,
    "to": 4,
    "total": 4
}
```

### HTTP Request
`GET api/people`


<!-- END_6f8235206bf696aede4714c5ad0c0822 -->

<!-- START_2ac3b6a12743cbf228edc7a67e71aaf6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/people" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/people"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/people`


<!-- END_2ac3b6a12743cbf228edc7a67e71aaf6 -->

<!-- START_867f9f3d5f28523e7da35728c208d7ff -->
## api/people/{person}
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/people/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Name 1",
    "created_at": "2020-02-10 02:15:20",
    "updated_at": "2020-02-10 02:29:09",
    "phones": [
        {
            "id": 1,
            "people_id": 1,
            "phone": "2345678",
            "created_at": "2020-02-10 02:27:41",
            "updated_at": "2020-02-10 02:27:41"
        },
        {
            "id": 12,
            "people_id": 1,
            "phone": "1234567",
            "created_at": "2020-02-10 02:28:57",
            "updated_at": "2020-02-10 02:28:57"
        }
    ],
    "orders": [
        {
            "id": 1,
            "people_id": 1,
            "created_at": "2020-02-11 00:40:39",
            "updated_at": "2020-02-11 00:40:39"
        }
    ]
}
```

### HTTP Request
`GET api/people/{person}`


<!-- END_867f9f3d5f28523e7da35728c208d7ff -->

<!-- START_3df3f9edf60160b08d6a08a0d3327b68 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/people/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/people/{person}`

`PATCH api/people/{person}`


<!-- END_3df3f9edf60160b08d6a08a0d3327b68 -->

<!-- START_75ceed8a7ee796292017d2c2ba4588df -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/people/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/people/{person}`


<!-- END_75ceed8a7ee796292017d2c2ba4588df -->

<!-- START_f9301c03a9281c0847565f96e6f723de -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "people_id": 1,
            "created_at": "2020-02-11 00:40:39",
            "updated_at": "2020-02-11 00:40:39"
        },
        {
            "id": 2,
            "people_id": 2,
            "created_at": "2020-02-11 00:40:39",
            "updated_at": "2020-02-11 00:40:39"
        },
        {
            "id": 3,
            "people_id": 3,
            "created_at": "2020-02-11 00:40:39",
            "updated_at": "2020-02-11 00:40:39"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/orders?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/orders?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/orders",
    "per_page": 5,
    "prev_page_url": null,
    "to": 3,
    "total": 3
}
```

### HTTP Request
`GET api/orders`


<!-- END_f9301c03a9281c0847565f96e6f723de -->

<!-- START_285c87403b6cfdebe26bc357f22e870f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/orders`


<!-- END_285c87403b6cfdebe26bc357f22e870f -->

<!-- START_7e6be1b9dd04564a7b1298dd260f3183 -->
## api/orders/{order}
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "people_id": 1,
    "created_at": "2020-02-11 00:40:39",
    "updated_at": "2020-02-11 00:40:39",
    "ship": {
        "id": 1,
        "order_id": 1,
        "name": "Name 1",
        "address": "Address 1",
        "city": "City 1",
        "country": "Country 1",
        "created_at": "2020-02-11 00:40:39",
        "updated_at": "2020-02-11 00:40:39"
    },
    "order_item": [
        {
            "id": 1,
            "order_id": 1,
            "title": "Title 1",
            "note": "Note 1",
            "quantity": 745,
            "price": 123.45,
            "created_at": "2020-02-11 00:40:39",
            "updated_at": "2020-02-11 00:40:39"
        }
    ],
    "people": {
        "id": 1,
        "name": "Name 1",
        "created_at": "2020-02-10 02:15:20",
        "updated_at": "2020-02-10 02:29:09"
    }
}
```

### HTTP Request
`GET api/orders/{order}`


<!-- END_7e6be1b9dd04564a7b1298dd260f3183 -->

<!-- START_37f7b8cec13991c44b134bb2186e9d1e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/orders/{order}`

`PATCH api/orders/{order}`


<!-- END_37f7b8cec13991c44b134bb2186e9d1e -->

<!-- START_c280b55cf267ef09fc12c6b09ac78ede -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/orders/{order}`


<!-- END_c280b55cf267ef09fc12c6b09ac78ede -->

<!-- START_b6dc9bd2a11d2b529076b47975834b4c -->
## api/people/phones/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/people/phones/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/people/phones/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "people_id": 1,
    "phone": "2345678",
    "created_at": "2020-02-10 02:27:41",
    "updated_at": "2020-02-10 02:27:41"
}
```

### HTTP Request
`GET api/people/phones/{id}`


<!-- END_b6dc9bd2a11d2b529076b47975834b4c -->

<!-- START_5ec684f469b0e4e708df24801081e3e1 -->
## api/people/orders/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/people/orders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/people/orders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "people_id": 1,
    "created_at": "2020-02-11 00:40:39",
    "updated_at": "2020-02-11 00:40:39"
}
```

### HTTP Request
`GET api/people/orders/{id}`


<!-- END_5ec684f469b0e4e708df24801081e3e1 -->

<!-- START_79350de4f3c3af90e3c84f431d17b3f2 -->
## api/orders/orderItems/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/orders/orderItems/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/orders/orderItems/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "order_id": 1,
    "title": "Title 1",
    "note": "Note 1",
    "quantity": 745,
    "price": 123.45,
    "created_at": "2020-02-11 00:40:39",
    "updated_at": "2020-02-11 00:40:39"
}
```

### HTTP Request
`GET api/orders/orderItems/{id}`


<!-- END_79350de4f3c3af90e3c84f431d17b3f2 -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_a296f8877e09cf90eb293b06b950f3c4 -->
## upload
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
`GET upload`


<!-- END_a296f8877e09cf90eb293b06b950f3c4 -->

<!-- START_701e018284e3e0d84b239067423247e0 -->
## upload/store
> Example request:

```bash
curl -X POST \
    "http://localhost:8000/upload/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/upload/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST upload/store`


<!-- END_701e018284e3e0d84b239067423247e0 -->

<!-- START_98f8e34d45d9eb7772e4183985acf62c -->
## xml/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost:8000/xml/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/xml/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST xml/{id}`


<!-- END_98f8e34d45d9eb7772e4183985acf62c -->

<!-- START_0c9a6398dd41a9a88fd7002a73171c49 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/people" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/people"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
`GET people`


<!-- END_0c9a6398dd41a9a88fd7002a73171c49 -->

<!-- START_96cebc16c2d8b39f0471935131939240 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/people/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/people/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
`GET people/create`


<!-- END_96cebc16c2d8b39f0471935131939240 -->

<!-- START_7d6a5b283dd36aeed06d26c0a609db86 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/people" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/people"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST people`


<!-- END_7d6a5b283dd36aeed06d26c0a609db86 -->

<!-- START_a250ffe05c70038262566afb10dfa325 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/people/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/people/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
`GET people/{person}/edit`


<!-- END_a250ffe05c70038262566afb10dfa325 -->

<!-- START_b986dcf2d42342edbbce94a9e39af9c0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/people/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT people/{person}`

`PATCH people/{person}`


<!-- END_b986dcf2d42342edbbce94a9e39af9c0 -->

<!-- START_5952166144af9d11618506a744670398 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/people/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE people/{person}`


<!-- END_5952166144af9d11618506a744670398 -->


