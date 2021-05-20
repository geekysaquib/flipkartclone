<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Lists</title>
    </head>
    <style>
            body{
                padding:0px;
                margin:0px;
            }
            form{
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
            button{
                background-color: #7dcfff4a;
                border-radius: 4px;
                padding: 4px 7px;
            }
            table{
                    height:auto;
            }
            @media (max-width: 440px) {
                table{
                    display:block;
                    width:100%;
                    max-width:440px !important;
                    overflow:scroll;
               }
           }
        </style>
    <body>
        <div class="container">
            <center><img src="https://krishworks.com/wp-content/uploads/2019/08/krishworks_79b551e3aa016df25e13e89e1f703ac8.png" alt="Krishworks" ></center>
        <center><h3 style="color:white;">Search student by Phone Number</h3></center>
        <form action="" method="POST">
            <center><input type="text" name="phone_number" placeholder="Enter phone number"></center><br>
            <center><button type="submit" name="search">Search</button></center><br>
        </form>
        </div><br>
        <div style="padding-left:20px;padding-right:20px;">
<?php
    require("config.php");
    if(isset($_POST['search']))
    {
        $query="select * from student_database where phone='".$_POST['phone_number']."'";
        $result=mysqli_query($link,$query);
        $count=mysqli_num_rows($result);
        if($count>0){
            while($row=mysqli_fetch_assoc($result)){
                echo '<div>
                        <h3>Student Details</h3>
                        <p><label>Student Name :</label> '.$row['name'].'</p>
                        <p><label>Phone Number :</label> '.$row['phone'].'</p>
                        <p><label>Email ID :</label> '.$row['email_id'].'</p>
                        <table border="1">
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
            echo '<script>alert("No records found")</script>';
        }
    }
?>
</div>
</body>
</html>