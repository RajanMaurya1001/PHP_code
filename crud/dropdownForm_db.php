<?php
$con = mysqli_connect('localhost','root','','app25_crud');
// if($con)
// {
//   echo "conection stablished";
// }
// else{
//     echo "error";
// }
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate'])){
    if(empty($_POST['selectbox'])){
        echo "<script>
           alert('Please select data');
           window.location.href='dropdownForm.php';
        </script>";
    }elseif (empty($_POST['subject']))
     {
        echo "<script>
           alert('Please select atLeast one data');
           window.location.href='dropdownForm.php';
        </script>";
    }
    else{
        $select = $_POST['selectbox'];
        $check = implode($_POST['subject']);
        $sql = "Insert into drop_tbl(selectbox, checkbox) values('$select','$check')";
        if(mysqli_query($con, $sql))
        {
                echo " <script>
                alert('Data Iserted Succesfully');
                window.location.href='dropdownForm.php';
                </script>";
        }
    }
    }
}

?>