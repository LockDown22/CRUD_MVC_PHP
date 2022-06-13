<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="index.php?controller=nhansu&action=add" class="btn btn-primary">Add</a>

        <table class="table">
            <thead>
                <th>HoTen</th>
                <th>Gioi Tinh</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                
                foreach($data as $nhansu){
                    ?>
                 
                    <tr>
                        <td><?=$nhansu['hoten']?></td>
                        <td><?=$nhansu['gioitinh']?></td>
                        <td><?=$nhansu['sdt']?></td>
                        <td><?=$nhansu['diachi']?></td>
                        <td><?=$nhansu['email']?></td>  
                        <td>
                            <a href="index.php?controller=nhansu&action=edit&id=<?=$nhansu['mans']?>" class="btn btn-danger">Edit</a>
                            <a href="index.php?controller=nhansu&action=delete&id=<?=$nhansu['mans']?>" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>