<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrController extends Controller
{
  public static function HrView()
  {
    $conn = mysqli_connect("localhost","root","","erp");
    $sql = "SELECT idhr,	name,	pos,	access_lv,	gmail,	Address,	pass,	provider_id from hr";
    $result = $conn -> query($sql);
    echo "<table><tr>".
         "<th>Idhr</th>".
         "<th>Name</th>".
         "<th>Pos</th>".
         "<th>AccessLV</th>".
         "<th>Gmail</th>".
         "<th>Address</th>".
         "<th>pass</th>".
         "<th>provider_id</th>".
         "</tr>";
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()) {
        echo
             "<tr><td>".$row["idhr"].
             "</td><td>".$row["name"].
             "</td><td>".$row["pos"].
             "</td><td>".$row["access_lv"].
             "</td><td>".$row["gmail"].
             "</td><td>".$row["Address"].
             "</td><td>".$row["pass"].
             "</td><td>".$row["provider_id"].
             "</td></tr>";
      }
      echo "</table>";
      $conn -> close();
    }
  }

}
