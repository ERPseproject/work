<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public static function ProjectView()
  {
    $conn = mysqli_connect("localhost","root","","erp");
    $sql = "SELECT idproject,	leader,	member1,	member2,	member3,	type,	budget,	doc_file,	start_date,	finish_date,	year_income
 from project";
    $result = $conn -> query($sql);
    echo "<table><tr>".
         "<th>idproject</th>".
         "<th>leader</th>".
         "<th>member1</th>".
         "<th>member2</th>".
         "<th>member3</th>".
         "<th>type</th>".
         "<th>budget</th>".
         "<th>doc_file</th>".
         "<th>start_date</th>".
         "<th>finish_date</th>".
         "<th>year_income</th>".
         "</tr>";
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()) {
        echo
             "<tr><td>".$row["idproject"].
             "</td><td>".$row["leader"].
             "</td><td>".$row["member1"].
             "</td><td>".$row["member2"].
             "</td><td>".$row["member3"].
             "</td><td>".$row["type"].
             "</td><td>".$row["budget"].
             "</td><td>".$row["doc_file"].
             "</td><td>".$row["start_date"].
             "</td><td>".$row["finish_date"].
             "</td><td>".$row["year_income"].
             "</td></tr></table>";
      }
      $conn -> close();
    }
  }

}
