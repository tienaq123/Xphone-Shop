<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>


</head>

<body>

    <main class="mb">
        <h2 style="text-align:center">Thêm Danh Mục</h2>

        <form action="" style="width: 400px; margin: auto; text-align:start;" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên Loại</label>
                <input name="ten_loai" type="text" required>
            </div>

            <button name="themloai" type="submit" class="btn btn-primary">Thêm Danh Mục</button>
        </form>


    </main>

</body>

</html>