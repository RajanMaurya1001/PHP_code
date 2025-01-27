 <?php
    $conn = mysqli_connect('localhost', 'root', '', 'app25_crud');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['validate'])) {
            if (empty($_POST['checkbox'])) {
                echo "<script>
            alert('please select some one');
            window.location.href='radio.php';
            </script>";
            } elseif (empty($_POST['radio'])) {
                echo "<script>
            alert('please choose any subject');
        </script>";
            }
        }
    } else {
        $checkbox = $_POST['checkbox'];
        $radio = $_POST['radio'];
        $sql = "insert into radio_tbl(radio,checkbox) values('$radio','$checkbox')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('data inserted successfully');
            window.location.href='radioread.php';
        </script>";
        }
    }

    ?>

 <form action="" method="POST">
     <select name="checkbox" id="">
         <option value="">select</option>
         <option value="lion">lion</option>
         <option value="tiger">tiger</option>
         <option value="elephant">elephant</option>
         <option value="horse">horse</option>
     </select><br><br>
     <label for="gen">Gender :</label>
     <input type="radio" name="radio" id="gen" value="male">male
     <input type="radio" name="radio" id="gen" value="female">Female<br><br>
     <input type="submit" name="validate">

 </form>