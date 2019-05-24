<?php
include "lib/connectdb.php";
$sql = 'SELECT * FROM tablename';
$sth = $db->prepare ($sql);
$sth->execute();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>%s</title>
</head>
<body>
    <a href="createform.php"><button>Toevoegen</button></a>
    <table>
    <tr>
        <th>ID</th>
        <th>colum</th>
        
    </tr>
    </thead>
    <tbody>
        <?php while($row= $sth->fetch()) {?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><a href="update_form.php?id=<?php echo $row['id']; ?>"><button>Wijzigen</button></a></td>
              
            </tr>
        <?php } ?>
    </tbody>
    </table>
</body>
</html>