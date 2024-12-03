<?php 

session_start();
include 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

#body 
{
    background-color: grey; 
}

#hiadmin 
{
    width: 1000px;
    height: 60px;
    margin: 0 auto;
    padding-top: 15px;
    margin-top: 20px;
    color: black;
    border: 2px solid black;
    border-radius: 5px;
    background-color: lightblue;
}

#admintext
{
    color: black;
    margin-left: 40px;
}

/*
#picture 
{
    width: 100px;
    height: 100px;
}*/

#feedbacktable 
{
    width: 260px;
    height: 60px;
    float: right;
    margin-right: 10px;
}

/*#header 
{
    width: 100px;
    height: 100px;
}*/

#table
{
    width: 1000px;
    height: 100%;
    margin: 0 auto; 
    border: 2px solid black;
    border-radius: 5px;
}

.avatar 
{
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

#title 
{
    color: white;
    background-color: black;
}

#username 
{
    margin-left: 10px;
    font-size: 20px;
}

.username 
{
    color: white;
    background-color: navy;
}

.userid
{
    color: white; 
    background-color: green;
}

.dateandtime 
{
    color: white;
    background-color: purple;
}

.formfeedbacklist
{
    width: 300px;
    height: 100%;
    color: black;
    background-color: lightblue;
    font-size: 20px;
    border-radius: 5px;
    padding: 5px;
}

.dateandtime 
{
    height: 20px;
    padding: 10px;
    color: dark;
}

#tdspace
{
    padding: 10px;
}

#dataspace
{
    padding: 10px;
}

#deletecoloumn
{
    background-color: black;
}

#delete
{
    color: black;
    background-color: salmon;
    text-decoration: none;
    border: 2px solid black;
    border-radius: 3px;
    padding: 10px;
}

#delete:hover
{
    color: black;
    background-color: red;
    text-decoration: none;
    border-radius: 30%;
}

</style>

<body id="body">

    <h1 id="hiadmin"><b id="admintext">Hi, Admin</b><b id="feedbacktable">Feedback Table</b></h1>

    <table id="table">

    <tr id="title">
        
    <td id="tdspace" class="titleusername">Username</td>
    <td id="tdspace" class="titlefeedback">Feedback</td>
    <td id="tdspace" class="titlefeedback">Feedback ID</td>
    <th id="tdspace" class="titleaction">Action</th>


    </tr>

        <?php  
        
        global $conn;

        $query="Select username,userid,feedback,feedbackdate from feedback where userid order by user";
        $query.="Select username.*,feedback.* from user,feedback where user.username=feedback.feedbackid";
        $query="Select feedback,feedbackid from feedback order by feedbackid desc";
        $go_query=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($go_query))
        {
              
                $feedback =$row['feedback'];
                $feedbackid =$row['feedbackid'];
              
              

                echo "<td id='dataspace' class='username'>Unknown</td>";  
                   
        
        ?></b>

        


    <form action="" method="post" class="formfeedbacklist" title="User's Feedback">

        <div class="card">
            
            <?php 

            echo "<td class='formfeedbacklist' id='dataspace'>{$feedback}</td>";                     
            echo "<td class='formfeedbacklist' id='dataspace'>{$feedbackid}</td>";                                 

            ?>

        </div>    

    </form>

    <div id="dateandtime" title="Date And Time">

        <?php 
        
        global $conn;
        
        
        echo "<th id='deletecoloumn'><a href='feedbacklist.php?action=delete&feedbackid={$feedbackid}' class='btn btn-danger' id='delete' onclick='return confirm('Are you sure?')'>Delete</a></th>";
        echo "</tr>";

    }

        ?>

    </div>
    </table>
    
</body>
</html>

<?php 

if(isset($_GET['action'])&& $_GET['action']=='delete')
{
    global $conn;
    $feedbackid=$_GET['feedbackid'];
    $query="Delete from feedback where feedbackid='$feedbackid' ";
    $go_query=mysqli_query($conn,$query);
}

?>