<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Firma</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Witaj w firmie</h1>
   <h3>Oto nasi pracownicy:</h3>
   <!-- lista pracowników -->
   <?php
      // utworzenie połączenia z db
      include_once('polaczenie.php');

      // przygotowanie zapytania do bazy danych
      $sql = "SELECT * FROM pracownik";
      // wysłanie zapytania do bazy danych i otrzymanie wyników
      $result = mysqli_query($conn, $sql);
      // mysqli_num_rows -> liczba wierszy w wyniku
      if(mysqli_num_rows($result) != 0) {
         echo '<table>
                  <tr>
                     <th>Imie</th>
                     <th>Nazwisko</th>
                     <th>PESEL</th>
                     <th>email</th>
                  </tr>
               ';
         while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                     <td>'.$row['imie'].'</td>
                     <td>'.$row['nazwisko'].'</td>
                     <td>'.$row['pesel'].'</td>
                     <td>'.$row['email'].'</td>
                  </tr>
            ';
            // echo $row['imie'] . " " . $row['nazwisko'] . "<br>";
         }
         echo '</table>';
      } else {
         echo "<p style='color: red'>Brak danych!</p>";
      }
      // zamknięcie połączenia z db
      mysqli_close($conn);
   ?>
</body>
</html>