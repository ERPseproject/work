<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchController extends Controller
{
  public static function ResearchView()
  {
    $conn = mysqli_connect("localhost","root","","erp");
    $sql = "SELECT idresearch,	owner,	year,	name,	volume,	no,	page,	img from research";
    $result = $conn -> query($sql);
    echo "<table><tr>".
         "<th>idresearch</th>".
         "<th>owner</th>".
         "<th>year</th>".
         "<th>name</th>".
         "<th>volume</th>".
         "<th>no</th>".
         "<th>page</th>".
         "<th>img</th>".
         "</tr>";
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()) {
        echo
             "<tr><td>".$row["idresearch"].
             "</td><td>".$row["owner"].
             "</td><td>".$row["year"].
             "</td><td>".$row["name"].
             "</td><td>".$row["volume"].
             "</td><td>".$row["no"].
             "</td><td>".$row["page"].
             "</td><td>".$row["img"].
             "</td></tr></table>";
      }
      $conn -> close();
    }
  }

}
