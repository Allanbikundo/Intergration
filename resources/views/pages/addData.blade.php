<?php $nav_addData = 'nav-item active';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["ihris"]))  
      {  
           $error = "<label class='text-danger'>Enter Ihris relation</label>";  
      }  
      else if(empty($_POST["dhis2"]))  
      {  
           $error = "<label class='text-danger'>Enter Dhis2 relation</label>";  
      }
      else  
      {  
           if(file_exists('files/map.json'))  
           {  
                $current_data = file_get_contents('files/map.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'ihris'               =>     $_POST['ihris'],  
                     'dhis2'          =>     $_POST["dhis2"],
                     'dhis2id'  =>  $_POST["DHIS2ID"],
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('files/map.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>   
@extends('layouts.app')
 
           
@section('content')    
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data to JSON File</h3>               
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Ihris</label>  
                     <input type="text" name="ihris" class="form-control" /><br />  
                     <label>DHIS2</label>  
                     <input type="text" name="dhis2" class="form-control" /><br />
                     <label>DHIS2ID</label>  
                     <input type="text" name="DHIS2ID" class="form-control" /><br />     
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
@endsection