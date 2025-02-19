# API Documentation
## 🤖 HTTP Request
- GET : GET data from API
- POST : send POST request to API (create data)
- PUT : send PUT request to API (update data)
- DELETE : delete data on API
## 📖 Books Attributes
- id `BIGINT` (Primary Key)
- title `varchar`
- description `text`
- author `varchar`
## GET Method Example
### Getting all data
#### Book URL : 
```
http://localhost:8000/api/books
```
#### Result Examples :
```json
[
    {
    "success": true,
    "message": "Detail Data Post!",
    "data": {
        "id": 1,
        "title": "The Night Circus",
        "description": "Mysterious, magical competition between illusionists.",
        "author": "Erin Morgenstern",
        "created_at": "2025-02-18T02:37:45.000000Z",
        "updated_at": "2025-02-18T02:37:45.000000Z"
    },
    {
        "id": 2,
        "title": "The Shadow of the Wind",
        "description": "Hidden library, lost book, dark secrets..",
        "author": "Carlos Ruiz Zafón",
        "created_at": "2025-02-18T02:37:45.000000Z",
        "updated_at": "2025-02-18T02:37:45.000000Z"
    }
]

```
### Getting a specific book data based on ID
#### Book URL : 
```
http://localhost:8000/api/books/(id)
```
#### Result Examples :
```json
    {
    "success": true,
    "message": "Detail Data Post!",
    "data": {
        "id": 1,
        "title": "The Night Circus",
        "description": "Mysterious, magical competition between illusionists.",
        "author": "Erin Morgenstern",
        "created_at": "2025-02-18T02:37:45.000000Z",
        "updated_at": "2025-02-18T02:37:45.000000Z"
    }
```
## POST Method Example
### Book Example
#### URL :
```
http://localhost:8000/api/books
```
#### Body :
```json
{
    "title": "test",
    "description": "lorem",
    "author": "test"
}
```
## PUT Method Example
### Book Example
#### URL :
```
http://localhost:8000/api/books/(id)
```
#### Body :
```json
{
    "title": "test",
    "description": "lorem",
    "author": "test"
}
```
## DELETE Method Example
### Book Example
#### URL :
```
http://localhost:8000/api/books/(id)
```
