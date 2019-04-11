<div class="content">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add new Student</h4>
                            </div>
                            <div class="content">
                                <form name='update-form' action='' method='POST'>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="Name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>English</label>
                                                <input input type="text" name="English" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kiswahili</label>
                                                <input type="text" name="Kiswahili" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>History</label>
                                                <input type="text" name="History" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Physics</label>
                                                <input type="text" name="Physics" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mathematics</label>
                                                <input type="text" name="Mathematics" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Total</label>
                                                <input type="text" name="Total" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Grade</label>
                                                <input type="text" name="Grade" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <button input type="submit" class="btn btn-primary" name="submit" value="SUBMIT">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                    </div>

                </div>
            </div>
        </div>
        <?php
            if(isset($_POST['submit'])){
                $conn=mysqli_connect("localhost","root","","student2")or die(mysqli_error($conn));
                $id=$_POST['id'];
                $Name=$_POST['Name'];
                $English=$_POST['English'];
                $Kiswahili=$_POST['Kiswahili'];
                $History=$_POST['History'];
                $Physics=$_POST['Physics'];
                $Mathematics=$_POST['Mathematics'];
                $Total=$_POST['Total'];
                $Grade=$_POST['Grade'];
                echo $Name;
                echo $English;
                echo $Kiswahili;
                echo $History;
                echo $Physics;
                echo $Mathematics;
                echo $Total;
                echo $Grade;
                $insert=mysqli_query($conn,"INSERT INTO grade_students(Name,English,Kiswahili,History,Physics,Mathematics,Total,Grade)VALUE('".$Name."','".$English."','".$Kiswahili."','".$History."','".$Physics."','".$Mathematics."','".$Total."','".$Grade."')")
    or die(mysqli_error($conn));
    if($insert){
        ?>
           <script>
                window.alert('success');
                window.location.href='home_page.php';
           </script>
        <?php
    }else{
        ?>
           <script>
               window.alert('failed');
               window.location.href='home_page.php';
           </script>
        <?php

    }
                }
?>