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

.container 
{
    background-color: grey;
}

.formfeedback 
{
    width: 392px;
    height: 505px;
    background-color: white;
    margin: 0 auto;
    margin-top: 55px;
    border-radius: 10px;
}

.card 
{
    width: 325px;
    height: 410px;
    color: white;
    background-color: white;
    margin: 0 auto;
    padding-top: 10px;
}

.top 
{
    float: left;
    color: black;
}

#top 
{
    float: left;
    color: black;
    font-size: 20px;
}

#feedbackmatters
{
    width: 200px;
    height: 200px;
}

#feedbackcartoon 
{
    width: 100px;
    height: 100px;
    margin-bottom: 50px; 
}

#question
{
    float: left;
    color: black;
    font-size: 14px;
    margin-bottom: 5px;
}

.textbox 
{
    margin-top: 150px; 
    color: black;
}

#textareas 
{
    padding: 10px;
    border: 2px solid black;
}

#textareas:hover
{
    padding: 10px;
    border: 2px solid blue;
}

#question2 
{
    margin-top: 30px;
    color: black;
}

#radioyes
{
    margin-top: 20px;
    color: black;
}

#radiono 
{
    margin-top: 20px;
    margin-left: 20px;
    color: black;
}

#yesandno
{
    color: black;
}

#sendandcancel 
{
    margin-top: 30px;
    color: black; 
}

#send 
{
    width: 155px;
    height: 40px;
    color: white;
    background-color: lightblue;
    border: 1px solid grey;
    border-radius: 4px;
}

#send:hover
{
    width: 155px;
    height: 40px;
    color: white;
    background-color: blue;
    border: 1px solid grey;
}

#cancel 
{
    width: 155px;
    height: 40px;
    color: black;
    background-color: white;
    border: 1px solid grey;
    margin-left: 11px;
}

#cancel:hover
{
    width: 155px;
    height: 40px;
    color: black;
    background-color: lightgrey;
    border: 1px solid grey;
    margin-left: 11px;
}

.crossmark
{
    color: black;
    margin-top: 5px;
    margin-right: 17px;
    float: right;
    text-decoration: none;
    padding: 5px;
}

.crossmark:hover
{
    color: black;
    margin-top: 5px;
    margin-right: 17px;
    float: right;
    padding: 5px;
    text-decoration: none;
    background-color: lightgrey;
    border-radius: 50%;
}

</style>

<body class="container">
    
    <form action="" method="post" class="formfeedback"> <a href="index.php" class="crossmark">&#x2716</a><br><br>

   

    <div class="card">

    <div class="top">

        <b id="top">Give feedback</b>
        <br><b id="question">What do you think of our sales?</b><br>
        <img src="photo/002.jpg" id="feedbackmatters" alt="" srcset="" title="Feedback Matters">
        <img src="photo/001.png" id="feedbackcartoon" alt="" srcset="" title="Hi!!, user">
        
    </div>


    <div class="textbox">

        <b id="question">Do you have any thoughts you'd like to share?</b>
        <br><textarea name="feedbacktext" id="textareas" cols="39" rows="4" placeholder="Please type your feedback here!!"></textarea>

    </div>

    <div id="sendandcancel">

        <button type="submit" name="send" id="send">Send</button>
        <button type="submit" name="cancel" id="cancel">Cancel</button>

    </div>

    </div>
    

    </form>

</body>
</html>

<?php 

    global $conn;


    if(isset($_POST['send']))
    {

        $feedbacktext = $_POST['feedbacktext'];
        //$username = $_POST['username'];
        
        if(empty($feedbacktext))
        {
            echo "<script>window.alert('Please type your Feedback!!')</script>";
        }

        else if($feedbacktext)
        {
            $query="insert into feedback(feedback)values('$feedbacktext')"; 
            $go_query=mysqli_query($conn,$query); 

        if(!$go_query) 

        { 

            die("QUERY FAILED".mysqli_error($conn)); 

        } 

        else 

        { 

            echo "<script>window.alert('Feedback Successfully Sent, Thanks For Your Feedback!!')</script>"; 

        } 

        }

    }

    else if(isset($_POST['cancel']))
    {
        header ("location: index.php");
    }
    


?>