<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachController extends Controller
{
  public static function MachView()
  {
    $conn = mysqli_connect("localhost","root","","erp");
    $sql = "SELECT idmachine,	Name,	serial_id,	state_of_buy,	buy_date,	price,	supervisor,	sell_date,	Img
 from machine";
    $result = $conn -> query($sql);
    echo "<table><tr>".
         "<th>idmachine</th>".
         "<th>Name</th>".
         "<th>serial_id</th>".
         "<th>state_of_buy</th>".
         "<th>buy_date</th>".
         "<th>price</th>".
         "<th>supervisor</th>".
         "<th>sell_date</th>".
         "<th>Img</th>".
         "</tr>";
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()) {
        echo "<tr><td>".$row["idmachine"].
             "</td><td>".$row["Name"].
             "</td><td>".$row["serial_id"].
             "</td><td>".$row["state_of_buy"].
             "</td><td>".$row["buy_date"].
             "</td><td>".$row["price"].
             "</td><td>".$row["supervisor"].
             "</td><td>".$row["sell_date"].
             "</td><td>".$row["Img"].
             "</td></tr></table>";
      }
      $conn -> close();
    }
  }

}
