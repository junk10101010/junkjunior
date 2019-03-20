<?php include('connect.php'); ?>
<html>
    <head><title>List</title></head>
    <body>
        <table border='1'>
            <tr>
                <th>#</th>
                <th>Words</th>
                <th>Numbers</th>
                <th>Date</th>
            </tr>
            
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['wordtxt']; ?></td>
                <td><?php echo $row['numberstxt']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
            <?php
            $i++;
            }
            ?>
        </table>
    </body>
</html>
