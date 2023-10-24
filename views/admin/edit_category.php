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
        <h2 style="text-align:center">Sửa Danh Mục</h2>

        <form style="width: 400px; margin: auto; text-align:start;" method="POST">
            <div class="mb-3">
                <!-- $category_data lấy bên controllers gán vào $category để dùng -->
                <?php foreach ($category_data as $category) : ?>
                    <label for="exampleInputEmail1" class="form-label">Tên Loại</label>
                    <input name="ma_loai" type="hidden" value="<?php echo $category['ma_loai'] ?>">
                    <input name="ten_loai" type="text" value="<?php echo $category['ten_loai'] ?>" required>
                <?php endforeach ?>
            </div>

            <button name="sualoai" type="submit" class="btn btn-primary">Sửa Danh Mục</button>
        </form>


    </main>

</body>

</html>