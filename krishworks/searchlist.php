<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Lists</title>
        <style>
            body{
                padding:0px;
                margin:0px;
            }
            .form{
                width:300px;
                margin:20px auto; 
                background:white;
                padding:20px;
                border-radius:5px;
            }
            .container{
                width:100%;
                background:#0e0e3e;
                padding-bottom:20px;
                padding-top:5px;
            }
            input{
                width:90%;
                margin:5px auto;
                height:20px;
                border:none;
                border-bottom:1px solid black;
            }
            .button{
                background-color: #7dcfff4a;
                border-radius: 4px;
                padding: 4px 7px;
            }
            .table{
                    height:auto;
            }
            @media (max-width: 440px) {
                .table{
                    display:block;
                    width:100%;
                    max-width:440px !important;
                    overflow:scroll;
               }
           }
        </style>
    </head>
    <body>
        <div class="container">
        <center><img src="https://krishworks.com/wp-content/uploads/2019/08/krishworks_79b551e3aa016df25e13e89e1f703ac8.png" alt="Krishworks" ></center>
        <center><h3 style="color:white;">Search student having marks greater than X</h3></center>
        <form class="form" action="searchlist.php" method="POST">
            <center><input type="text" name="total_marks" placeholder="Enter value of X"></center><br>
            <center><button class="button" type="submit" name="searchlist">Search</button></center><br>
        </form>
        </div><br>
        <div style="padding-left:20px;padding-right:20px;">
 <?php
    require('config.php');
    if(isset($_POST['searchlist']))
    {
        $marks = $_POST['total_marks'];
        $query="select name from student_database WHERE Total_Marks>'".$marks."'";
        $result=mysqli_query($link,$query);
        $count=mysqli_num_rows($result);
        if($count>0){
            echo '<div>
                        <h3>List of students</h3>
                        <table border="1">
                            <tr>
                                <th>Name of Students</th>
                            </tr>';
            while($row=mysqli_fetch_assoc($result)){
                echo '
                            <tr>
                                <td><form action="searchlist.php" method="POST">
                                <input type="hidden" name="student_name" value="'.$row['name'].'">
                                <button type="submit" name="search" style="border:none;outline:none;background:none;">'.$row['name'].'</button>
                                </form></td>
                            </tr>';
            }
            echo '</table>
                      </div>';
        }
        else{
            echo '<script>alert("No record found")</script>';
        }
    }
    if(isset($_POST['search']))
    {
        $query="select * from student_database where name='".$_POST['student_name']."'";
        $result=mysqli_query($link,$query);
        $count=mysqli_num_rows($result);
        if($count>0){
            while($row=mysqli_fetch_assoc($result)){
                echo '<div>
                        <h3>Student Details</h3>
                        <p><label>Student Name :</label> '.$row['name'].'</p>
                        <p><label>Phone Number :</label> '.$row['phone'].'</p>
                        <p><label>Email ID :</label> '.$row['email_id'].'</p>
                        <form align="left" action="generate.php" method="POST">
                            <input type="hidden" name="email" value="'.$row['email_id'].'">
                            <input type="submit" name="generatepdf" value="Generate PDF">
                        </form>
                        
                        <table class="table" border="1">
                            <tr>
                                <th>Subject1</th>
                                <th>Subject2</th>
                                <th>Subject3</th>
                                <th>Subject4</th>
                                <th>Subject5</th>
                                <th>Total Marks</th>
                            </tr>
                            <tr>
                                <td>'.$row['subject1'].'</td>
                                <td>'.$row['subject2'].'</td>
                                <td>'.$row['subject3'].'</td>
                                <td>'.$row['subject4'].'</td>
                                <td>'.$row['subject5'].'</td>
                                <td>'.$row['Total_Marks'].'</td>
                            </tr>
                        </table>
                      </div>';
            }
        }
        else{
            echo '<script>alert("No record found")</script>';
        }
    }
?>
</div>
</body>
</html>