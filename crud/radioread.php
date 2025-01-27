<table style="border:5px solid black">
    <thead>
        <tr>
            <th style="border:1px solid black">id</th>
            <th style="border:1px solid black">selectbox</th>
            <th style="border:1px solid black">gender</th>
            <th style="border:1px solid black" collspan="2">action</th>
            <!-- <th style="border:1px solid black">gender</th> -->
        </tr>
    </thead>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'app25_crud');
    $sql = "select * from radio_tbl";
    $record = mysqli_query($conn, $sql);
    if (mysqli_num_rows($record) > 0) {
        while ($result = mysqli_fetch_assoc($record)) {
            //   print_r($result);
    ?>
            <tbody>
                <tr>
                    <td style="border:1px solid black"><?= $result['id'] ?></td>
                    <td style="border:1px solid black"><?= $result['checkbox'] ?></td>
                    <td style="border:1px solid black"><?= $result['radio'] ?></td>
                    <td style="border:1px solid black"><a href="taskupdate.php?id=<?= $result['id'] ?>">edit</a></td>
                    <td style="border:1px solid black"><a href="taskdelete.php?id=<?= $result['id'] ?>">delete</a></td>
                </tr>
            </tbody>


    <?php
        }
    } else {
        echo "Bye bye";
    }
    ?>
</table>