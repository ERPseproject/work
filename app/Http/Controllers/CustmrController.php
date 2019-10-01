<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustmrController extends Controller
{
  public static function CustmrView()
  {
    $conn = mysqli_connect("localhost","root","","erp");
    $sql = "SELECT idcustomer	,name	,address	,tax_id	,status from customer";
    $result = $conn -> query($sql);
    echo "<table><tr>".
         "<th>IdCustomer</th>".
         "<th>Name</th>".
         "<th>Address</th>".
         "<th>TaxId</th>".
         "<th>Status</th>".
         "</tr>";
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()) {
        echo
             "<tr><td>".$row["idcustomer"].
             "</td><td>".$row["name"].
             "</td><td>".$row["address"].
             "</td><td>".$row["tax_id"].
             "</td><td>".$row["status"].
             "</td></tr>";
      }
      
      echo "</table>";
      $conn -> close();
    }
    
  }

}
