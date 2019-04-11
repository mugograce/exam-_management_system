
<?php
$conn=mysqli_connect("localhost","root","","student2")or die(mysqli_error($conn));
$id=$_GET['id'];
echo $id;
$select_query=mysqli_query($conn,"select * from grade_students where id=$id")or die(mysqli_error($conn));
foreach($select_query as $record){
    $id=$record['id'];
    $Name=$record['Name'];
    $English=$record['English'];
    $Kiswahili=$record['Kiswahili'];
    $History=$record['History'];
    $Physics=$record['Physics'];
    $Mathematics=$record['Mathematics'];
    $Total=$record['Total'];
    $Grade=$record['Grade'];
}

?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <form name='update-form' action='' method='POST'>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" name="id" class="form-control" value="<?php echo $id?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" value="<?php echo $Name?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>English</label>
                                                <input input type="text" name="adm" class="form-control" value="<?php echo $English?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Kiswahili</label>
                                                <input type="text" name="age" class="form-control" value="<?php echo $Kiswahili?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>History</label>
                                                <input type="text" name="age" class="form-control" value="<?php echo $History?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Physics</label>
                                                <input type="text" name="class" class="form-control" value="<?php echo $Physics?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mathematics</label>
                                                <input type="text" name="age" class="form-control" value="<?php echo $Mathematics?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Total</label>
                                                <input type="text" name="age" class="form-control" value="<?php echo $Total?>">
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Grade</label>
                                                <input type="text" name="gender" class="form-control" value="<?php echo $Grade?>">
                                            </div>
                                        </div>
                                    </div>
                                    <button input type="submit" class="btn btn-info btn-fill pull-right" name="submit" value="Update profile">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <?php
            if(isset($_POST['submit'])){
                
                $id=$record['id'];
                $Name=$record['Name'];
                $English=$record['English'];
                $Kiswahili=$record['Kiswahili'];
                $History=$record['History'];
                $Physics=$record['Physics'];
                $Mathematics=$record['Mathematics'];
                $Total=$record['Total'];
                $Grade=$record['Grade'];
                $update_query=mysqli_query($conn,"update grade_students set Name='$Name',English='$English',Kiswahili='$Kiswahili',History='$History',Physics='$Physics',Mathematics='$Mathematics',Total='$Total',Grade='$Grade' where id='$id'")or die(mysqli_error($conn));
                if($update_query){
                    ?>
                    <script>
                        window.alert('success');
                        window.location.href='grade_table.php'
                    </script>
                    <?php
                    }else{
                        echo"<script>window.alert('failed')</script>";
                    header('refresh:0;url=update_student.php');

                    }
                }
?>
<?php //include('footer.php')?>