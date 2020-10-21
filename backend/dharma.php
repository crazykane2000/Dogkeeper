<?php session_start();
    include 'administrator/pdo_class_data.php';
    include 'administrator/add_notification_user.php';
    include 'administrator/function.php';
    include 'administrator/connection.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);
    $pdo_auth = authenticate();
?>    
 
<table  style="color: #333;font-size: 13px;width:100%" class="table table-striped table-hover">
    <thead>
       <tr>
         <th>S.No</th>
         <th>Image</th>
         <th>date</th>
         <th>Action</th>                              
       </tr>
    </thead>
    <tbody>
    <?php 
    try {
          $stmt = $pdo->prepare('SELECT * FROM `uploaded_files` WHERE `uniq_id`="'.$_REQUEST['userName'].'" ORDER BY date DESC');
          //echo 'SELECT * FROM `uploaded_files` WHERE `uniq_id`="'.$_REQUEST['uniq_id'].'" ORDER BY date DESC';
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetchAll();   
      $i=1; 
      foreach($user as $key=>$value){     
      echo '<tr>
              <td>'.$i.'</td>
              <td><img src="uploaded_data/thumb/'.$value['file'].'" style="width:50px;" /></td>
              <td>'.$value['date'].'</td>
              <th><a href="delete_uploaded_file.php?id='.$value['id'].'&uniq_id='.$value['uniq_id'].'" onclick="return confirm(\' Are You Sure You need to Delete this? \');"><button class="btn btn-danger btn-sm">Delete</button></a>  </th>                        
          </tr>';
          $i++;
      }           
    ?>                    
  </tbody>
</table>
                                               