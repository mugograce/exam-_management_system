<?php
include("process_login.php");
$conn=mysqli_connect("localhost","root","","student2")or die(mysqli_error($conn));
$db_records=mysqli_query($conn,"select * from grade_students")or die(mysqli_error($conn)); 

?>
<html>
    <head>
        <title>Database records</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
         <div class="container">
                <div class="row"></div>
                <div class="row">
                <div class="col-sm-2">
                    
                    <a href="logout.php" class="btn btn-info">logout</a>
                </div>
                <div class="col-sm-8">
                      <table class="table table-bordered">
                            <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">English</th>
                                      <th scope="col">Kiswahili</th>
                                      <th scope="col">History</th>
                                      <th scope="col">Physics</th>
                                      <th scope="col">Mathematics</th>
                                      <th scope="col">Total</th>
                                      <th scope="col">Grade</th>
                                  </tr>
                            </thead>
                            <tbody>
                                <?php foreach($db_records as $record){?>
                                   <tr>
                                      <td><?php echo $record['id'];?></td>
                                      <td><?php echo $record['Name'];?></td>
                                      <td><?php echo $record['English'];?></td>
                                      <td><?php echo $record['Kiswahili'];?></td>
                                      <td><?php echo $record['History'];?></td>
                                      <td><?php echo $record['Physics'];?></td>
                                      <td><?php echo $record['Mathematics'];?></td>
                                      <td><?php echo $record['Total'];?></td>
                                      <td><?php echo $record['Grade'];?></td>
                                      <td>
                                           <a href="view_student.php?id=<?php echo $record['id'];?>"class="btn btn-primary">view</a>
                                           <a href="update_student.php?id=<?php echo $record['id'];?>"class="btn btn-info">update</a>
                                           <a href="delete_student.php?id=<?php echo $record['id'];?>"class="btn btn-danger">delete</a>
                                      </td>
                                   </tr>
                                   
                                <?php }?> 
                            </tbody>
                            
                      </table>
                </div>
                <div class="col-sm-2"></div>
                </div>
         </div>

    </body>


</html>