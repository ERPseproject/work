<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  public static function UsersView()
  {
    $conn = mysqli_connect("localhost","root","","erp");
    $sql = "SELECT id	,provider_name	,provider_id	,name	,email	,email_verified_at	,password	,remember_token	,created_at	,updated_at	,avatar from users";
    $result = $conn -> query($sql);
    echo "<table><tr>".
         "<th>id</th>".
         "<th>provider_name</th>".
         "<th>provider_id</th>".
         "<th>name</th>".
         "<th>email</th>".
         "<th>email_verified_at</th>".
         "<th>password</th>".
         "<th>remember_token</th>".
         "<th>created_at</th>".
         "<th>updated_at</th>".
         "<th>avatar</th>".
         "</tr>";
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()) {
        echo "<tr><td>".$row["id"].
             "</td><td>".$row["provider_name"].
             "</td><td>".$row["provider_id"].
             "</td><td>".$row["name"].
             "</td><td>".$row["email"].
             "</td><td>".$row["email_verified_at"].
             "</td><td>".$row["password"].
             "</td><td>".$row["remember_token"].
             "</td><td>".$row["created_at"].
             "</td><td>".$row["updated_at"].
             "</td><td>".$row["avatar"].
             "</td></tr></table>";
      }
      $conn -> close();
    }
  }

}
