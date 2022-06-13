
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm nhân viên</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">  

                <div class="form-group">
                    <label for="">Ho Va Ten</label>
                    <input type="text" name="hoten" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Gioi Tinh</label>
                    <input type="text" name="gioitinh" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Điện Thoại</label>
                    <input type="text" name="sdt" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Dia Chi</label>
                    <input type="text" name="diachi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>

                <button type="submit" value="Add" name="submit" class= "btn-primary">Add</button>

            </form>
        </div>
    </div>

</div>
    </body>
    </html>