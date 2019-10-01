<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassResetController extends Controller
{
  public static function PassResetView()
  {
    $conn = mysqli_connect("localhost","root","","erp");
    $sql = "SELECT email,	token,	created_at from password_resets";
    $result = $conn -> query($sql);
    echo "<table><tr>".
         "<th>email</th>".
         "<th>token</th>".
         "<th>created_at</th>".
         "</tr>";
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()) {
        echo
             "<tr><td>".$row["email"].
             "</td><td>".$row["token"].
             "</td><td>".$row["created_at"].
             "</td></tr>";
      }
      echo "</table>";
      $conn -> close();
    }
  }

}
