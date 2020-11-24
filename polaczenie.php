<?php
/**
 * BIBLIOTEKA MySQLi
 * Skrypt otwierający połączenie z bazą danych
 * 
 * @param host
 * @param user
 * @param passwd
 * @param db
 * 
 * @return connection_id
 */

 $host = 'localhost'; //127.0.0.1
 $user = 'root';
 $passwd = 'zaq1@WSX'; //xampp - hasło puste!
 $db = 'firma';

//  procedura tworząca połączenie
$conn = mysqli_connect($host, $user, $passwd, $db);

// sprawdzenie poprawności połączenia
if(mysqli_connect_errno()) {
   exit('Błąd połączenia z serwerem MySQL'. mysqli_connect_errno());
} else {
   // połączenie udane
}

// ustawienie kodowania polskich znaków
mysqli_set_charset($conn, 'utf8');