## About REST API

REST API ini dibangun menggunakan PHP Native yang berfungsi untuk mengelola data pengguna dalam sebuah aplikasi. API ini menyediakan beberapa endpoint yang memungkinkan untuk melakukan operasi CRUD (`Create`, `Read`, `Update`, `Delete`) pada data user. Setiap user yang disimpan memiliki beberapa atribut, yaitu `user_id`, `nama`, `email`, dan `image`. Kolom image bersifat opsional (nullable), sehingga user bisa saja tidak memiliki gambar profil.

Endpoint yang tersedia meliputi penambahan user baru dengan metode `HTTP POST`, pengambilan data seluruh user atau user tertentu dengan metode `HTTP GET`, pembaruan data user dengan metode `HTTP PUT`, dan penghapusan user dengan metode `HTTP DELETE`. API ini diimplementasikan secara efisien dan mudah digunakan, sehingga memudahkan integrasi dengan aplikasi frontend atau mobile. Selain itu, penggunaan PHP Native memungkinkan API ini berjalan cepat dan ringan tanpa memerlukan framework tambahan.

## Instructions for use

### Database Configuration

- Atur konnfigurasi database pada file `script/config.php`.
- Jika ingin membuat database, Anda bisa jalankan file `database/create-db.php`. Secara default akan membuat database `belajar_php`, silahkan atur nama database sesuai preferensi Anda.
- Jika ingin membuat tabel, Anda bisa jalankan file `database/create-table.php`. Secara default akan membuat tabel `user`. Tabel ini akan nantinya yang kita gunakan di REST API ini.

### API Platform

- Jalankan API Platform favorit Anda, contohnya [Postman](https://www.postman.com/), [Thunder Client](https://www.thunderclient.com/), dan platform lainnya.
- Karena REST API ini menggunkan PHP, jangan lupa jalankan juga Web Server-nya dan taruh folder di `htdocs` untuk pengguna XAMPP atau `www` untuk pengguna Laragon.
- Jika Anda menjalankannya di Local, maka url endpoint yang dituju adalah `http://localhost/nama-folder/`.

### Tools Web Server

- [XAMPP](https://www.apachefriends.org/)
- [Laragon](https://laragon.org/)
- [MAMP](https://www.mamp.info/en/mamp/windows/)
- [EasyPHP](https://www.easyphp.org/)
- [Winginx](https://winginx.com/en/)
- [WAMPServer](https://sourceforge.net/projects/wampserver/files/)

## API Reference

### # Get all users

```bash
GET /folder-name/
```

### # Add user

```bash
POST /folder-name/
```

| Parameter  | Type        | Description   |
| :--------- | :-------    | :------------ |
| `nama`     | `string`    | **Required**. |
| `email`    | `string`    | **Required**. |
| `image`    | `files`     | _Optional._   |

### # Update user

```bash
PUT /folder-name/
```

| Parameter  | Type        | Description   |
| :--------- | :-------    | :------------ |
| `user_id`  | `string`    | **Required**. |
| `nama`     | `string`    | **Required**. |
| `email`    | `string`    | **Required**. |

### # Delete user

```bash
DELETE /folder-name/
```

| Parameter  | Type        | Description   |
| :--------- | :-------    | :------------ |
| `user_id`  | `string`    | **Required**. |

---
- Image files allowed types are: `jpg`, `jpeg`, `png`, `gif`.
- For `PUT` and `DELETE` methods, it is recommended to use `form-encoded` parameters to send data.
- Because by default, native PHP does not provide superglobal arrays for the `PUT` and `DELETE` methods like it does for `GET` and `POST`.