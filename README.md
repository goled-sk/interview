## Úloha

Vytvoriť triedy

SimpleCustomer | SimpleOrder
| :---          | :---
method (function) get_full_name() : string | method (function) add_item() : void
method (function) get_billing() : array  | method (function) get_price() : array
method (function) get_shipping() : array | attribute (SimpleCustomer) customer
attribute (string) billing_addr
attribute (string) billing_phone
attribute (string) billing_city
attribute (string) billing_zip
attribute (string) shipping_addr
attribute (string) shipping_phone
attribute (string) shipping_city
attribute (string) shipping_zip

Dúfam, že to je samopopisné ale v prípade že nie. Je potrebné vyplniť súbory [simple-customer.php](simple-customer.php) a [simple-order.php](simple-order.php) podľa vyššie uvedenej tabuľky, tak aby po spustení [test.php](test.php) hlavne kód nepadol :D\
Testujú sa jednotlivé metódy a atribúty tried, či vieš pracovať s objektami hlavne. Ošetrenie chybných vstupov nie je potrebné, keďže to sa v testoch netestuje. Odporúčam si pozrieť testovací file pre lepšie pochopenie. V podstate ide o TDD (Test Driven Development) len s tým rozdielom, že výsledok skontroluje Tibor.

```bash
$ php7.4 test.php > result.txt
```

result.txt poslať Tiborovi.
