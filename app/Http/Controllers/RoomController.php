<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
  public static function RoomView()
  {
    $conn = mysqli_connect("localhost","root","","erp");
    $sql = "SELECT idroom,	No,	building from room";
    $result = $conn -> query($sql);
    echo "<table><tr>".
         "<th>idroom</th>".
         "<th>No</th>".
         "<th>building</th>".
         "</tr>";
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()) {
        echo
             "<tr><td>".$row["idroom"].
             "</td><td>".$row["No"].
             "</td><td>".$row["building"].
             "</td></tr></table>";
      }
      $conn -> close();
    }
  }

}
