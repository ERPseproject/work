<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
  public static function BillView()
  {
    $conn = mysqli_connect("localhost","root","","erp");
    $sql = "SELECT idbill,	proj_id,	img,	date,	amount,	year_income from bill";
    $result = $conn -> query($sql);
    echo "<table><tr>".
         "<th>IdBill</th>".
         "<th>ProjId</th>".
         "<th>img</th>".
         "<th>date</th>".
         "<th>amount</th>".
         "<th>yearIncome</th></tr>";
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()) {
        echo "<tr><td>".$row["idbill"].
             "</td><td>".$row["proj_id"].
             "</td><td>".$row["img"].
             "</td><td>".$row["date"].
             "</td><td>".$row["amount"].
             "</td><td>".$row["year_income"].
             "</td></tr></table>";
      }
      $conn -> close();
    }
  }

}
