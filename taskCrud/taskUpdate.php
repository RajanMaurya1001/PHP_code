<?php


$con = mysqli_connect('localhost', 'root', '', 'app25_crud');
// if($con)
// {
//     echo 'connection stablished';
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['fname'])) {
        echo " <script>
          alert('fname is required');
        //   window.location.href=taskUpdate.php;
        </script> ";
    } elseif (empty($_POST['lname'])) {
        echo " <script>
          alert('lname is required');
          window.location.href=taskUpdate.php;
        </script> ";
    } elseif (empty($_POST['phone'])) {
        echo " <script>
          alert('phone is required');
          window.location.href=taskUpdate.php;
        </script> ";
    } elseif (empty($_POST['email'])) {
        echo " <script>
          alert('email is required');
          window.location.href=taskUpdate.php;
        </script> ";
    } elseif (empty($_POST['gender'])) {
        echo " <script>
          alert('gender is required');
          window.location.href=taskUpdate.php;
        </script> ";
    } elseif (empty($_POST['skill'])) {
        echo " <script>
          alert('skill is required');
          window.location.href=taskUpdate.php;
        </script> ";
    } elseif (empty($_POST['state'])) {
        echo " <script>
          alert('state is required');
          window.location.href=taskUpdate.php;
        </script> ";
    } elseif (empty($_POST['message'])) {
        echo " <script>
          alert('message is required');
          window.location.href=taskUpdate.php;
        </script> ";
    } else {
        $id = $_POST['uid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $skill = implode(',', $_POST['skill']);
        $state = $_POST['state'];
        $message = $_POST['message'];


        $sql = "Update  task_tbl set fname='$fname', lname='$lname', phone='$phone', 
        email='$email', gender='$gender', skill='$skill', state='$state', message='$message' where id = $id";

        if (mysqli_query($con, $sql)) {
            echo " <script>
          alert('data updated Succesfully');
          window.location.href='taskread.php';
        </script> ";
        }
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'app25_crud');
    $sql = "Select * from task_tbl where id =$id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $record = mysqli_fetch_assoc($result);
        $skill = explode(',', $record['skill']);


?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registration</title>

            <style>
                * {
                    margin: 0px;
                    padding: 0px;
                }

                body {
                    /* background-color: #6a0dad; */
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 0;

                }

                /*--------------- registration form page start ---------------*/
                .main-container {
                    min-height: 400px;
                    width: 100%;
                    max-width: 800px;
                    background-color: #eeeeee;
                    border-radius: 20px;
                    align-items: center;
                    margin-top: 70px;
                }

                .reg-heading {
                    font-size: 24px;
                    margin-bottom: 20px;
                    text-align: center;
                    font-weight: 800;
                    line-height: 24px;
                    font-weight: 500;
                    letter-spacing: 3px;
                    background-color: #002233;
                    padding-top: 20px;
                    padding-bottom: 20px;
                    color: #ffffff;
                    border-radius: 10px 10px 0px 0px;
                }

                .main-container:hover {
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                }

                /* ------------------------------------------------------- */
                .input-row {
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                    margin-bottom: 5px;
                    margin-right: 30px;
                }

                .input-box {
                    display: flex;
                    flex-direction: column;
                    width: 48%;
                    margin-bottom: 5px;
                }


                /* ------------------------------------------------------------ */

                .reg-label {
                    font-size: 18px;
                    font-weight: 500;
                    padding-left: 20px;
                    color: #002233;
                }


                .reg-input {
                    box-sizing: border-box;
                    padding: 10px 5px;
                    margin-left: 20px;
                    margin-bottom: 5px;
                    font-size: 17px;
                    outline: none;
                    font-weight: 500;
                    border-top: none;
                    border-left: none;
                    border-right: none;
                    background: none;
                }


                .reg-input:hover {
                    transform: translate(3px, 1px);
                }


                .button {
                    text-align: center;
                    margin-top: 40px;
                    margin-bottom: 40px;
                }

                .reg-button {
                    width: 30%;
                    padding: 13px 20px;
                    border-radius: 20px;
                    font-weight: 400;
                    font-size: 16px;
                    background-color: #002233;
                    color: #ffffff;
                    border: none;
                    letter-spacing: 2px;
                }

                .reg-button:hover {
                    cursor: pointer;
                    background-color: #45a049;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                }

                .reg-link {
                    background: #002233;
                    padding-bottom: 20px;
                    border-radius: 0px 0px 10px 10px;
                }

                .reg-h5 {
                    text-align: center;
                    margin-top: 30px;
                    font-size: 17px;
                    font-weight: 400;
                    color: #ffffff;
                    letter-spacing: 2px;
                    padding-top: 20px;
                }

                .reg-link a {
                    color: #ffffff;
                    letter-spacing: 2px;
                }

                @media (max-width: 600px) {
                    .main-container {
                        width: 90%;
                    }

                    .input-row {
                        width: 90%;
                    }



                    .input-box {
                        width: 100%;
                        margin-left: 10px;
                    }

                    .reg-input {
                        margin-left: 10px;
                    }

                    .reg-button {
                        width: 98%;
                        margin-left: 0px;
                        margin-right: 0px;
                    }
                }
            </style>
        </head>

        <body>
            <div class="main-container">
                <form action="" method="post">
                    <h2 class="reg-heading"> REGISTRATION</h2>

                    <div class="input-row">

                        <div class="input-box">
                            <input type="hidden" value="<?= $record['id'] ?>" name="uid">
                            <label for="name" class="reg-label">First Name:</label>
                            <input type="text" class="reg-input" value="<?= $record['fname'] ?>" name="fname">
                        </div>
                        <div class="input-box">
                            <label for="name" class="reg-label">Last Name:</label>
                            <input type="text" class="reg-input" value="<?= $record['lname'] ?>" name="lname">
                        </div>

                    </div>


                    <div class="input-row">

                        <div class="input-box">
                            <label for="name" class="reg-label">Phone:</label>
                            <input type="number" class="reg-input" value="<?= $record['phone'] ?>" name="phone">
                        </div>
                        <div class="input-box">
                            <label for="name" class="reg-label">Email:</label>
                            <input type="email" class="reg-input" value="<?= $record['email'] ?>" name="email">
                        </div>

                    </div>

                    <div class="input-row">

                        <div class="">
                            <label for="name" class="reg-label">Gender</label>
                            <input type="radio" class="reg-input" name="gender" value="Male" <?= $record['gender'] == 'Male' ? 'checked' : '' ?>> Male
                            <input type="radio" class="reg-input" name="gender" value="Female" <?= $record['gender'] == 'Female' ? 'checked' : '' ?>> Female

                        </div>
                        <div class="">
                            <label for="name" class="reg-label">Skill:</label>
                            <input type="checkbox" class="reg-input" name="skill[]" <?= in_array('CSS', $skill) ? 'checked' : '' ?> value="CSS"> CSS
                            <input type="checkbox" class="reg-input" name="skill[]" <?= in_array('HTML', $skill) ? 'checked' : '' ?> value="HTML"> HTML
                            <input type="checkbox" class="reg-input" name="skill[]" <?= in_array('JavaScript', $skill) ? 'checked' : '' ?> value="JavaScript"> JavaScript
                            <input type="checkbox" class="reg-input" name="skill[]" <?= in_array('PHP', $skill) ? 'checked' : '' ?> value="PHP"> PHP
                        </div>

                    </div>

                    <div class="input-row">

                        <div class="input-box" style="padding-top:20px;">
                            <label for="name" class="reg-label">State:</label>
                            <select name="state" class="reg-input">
                                <option value="India" <?= $record['state'] == 'India' ? 'selected' : '' ?>>India</option>
                                <option value="China" <?= $record['state'] == 'China' ? 'selected' : '' ?>>China</option>
                                <option value="Pakistan" <?= $record['state'] == 'Pakistan' ? 'selected' : '' ?>>Pakistan</option>
                            </select>
                        </div>
                        <div class="input-box" style="padding-top:20px;">
                            <label for="name" class="reg-label">Message:</label>
                            <textarea name="message" class="reg-input"><?= $record['message'] ?></textarea>
                        </div>

                    </div>


                    <div class="button">
                        <button type="submit" class="reg-button">CREATE ACCOUNT</button>
                    </div>

                    <div class="reg-link">
                        <h5 class="reg-h5">Already Have a Account? <a href="#">Login</a></h5>
                    </div>
                </form>
            </div>

        </body>

        </html>

<?php
    }
}
?>


