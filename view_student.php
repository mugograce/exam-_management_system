
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
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Student Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control" value="<?php echo $id?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" value="<?php echo $Name?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">English</label>
                                                <input type="text" class="form-control" value="<?php echo $English?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kiswahili</label>
                                                <input type="text" class="form-control" value="<?php echo $Kiswahili?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>History</label>
                                                <input type="text" class="form-control" value="<?php echo $History?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Physics</label>
                                                <input type="text" class="form-control" value="<?php echo $Physics?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mathematics</label>
                                                <input type="text" class="form-control" value="<?php echo $Mathematics?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Total</label>
                                                <input type="text" class="form-control" value="<?php echo $Total?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Grade</label>
                                                <input type="text" class="form-control" value="<?php echo $Grade?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
<?php //include('footer.php')?>