## Cara menjalankan
Sebastian Belmero Sitorus
191402113
Kom B

Jalankan file api.php dengan server bawaan php dengan cara mengetikkan

```
php -S localhost:8000
```
(jika ingin dijalankan di port 8000)

kemudian buka di postman

```
localhost:8000/api.php
```


kirim request body contoh :
```
{
  "Pbangunan": 3,
  "Lbangunan": 3,
  "Pkeramik": 7,
  "Lkeramik": 7,
  "Isi": 9
}
```
maka akan menghasilkan
```
{
    "JumlahDusKeramik": 204
}
```

