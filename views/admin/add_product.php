<?php
ob_start();
require "./models/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="./public/css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>

    <?php include(__DIR__ . '/../layouts/header_admin.php') ?>
    <main class="mb">
        <h2 style="text-align:center">Thêm sản phẩm</h2>

        <form style="width: 400px; margin: auto; text-align:start;" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên hàng hóa</label>
                <input name="ten_hh" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Giá</label>
                <input name="don_gia" type="number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Giảm giá(%)</label>
                <input name="giam_gia" type="number" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ảnh</label>
                <input name="hinh" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Danh mục</label>
                <select name="ma_loai" class="form-select" aria-label="Default select example" required>
                    <!-- <option selected>Chọn danh mục</option> -->
                    <?php
                    $sql = "SELECT * FROM loai";
                    $result = $conn->query($sql);
                    foreach ($result as $key => $row) {
                    ?>
                        <option value="<?php echo $row['ma_loai'] ?>"><?php echo $row['ten_loai'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Đặc biệt</label>
                <select name="dac_biet" class="form-select" aria-label="Default select example" required>
                    <option selected value="Thường">Hàng thường</option>
                    <option value="Đặc Biệt">Hàng đặc biệt</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                <textarea class="form-control" name="mo_ta" id="" cols="30" rows="10" required></textarea>
            </div>

            <button name="themsp" type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>

    </main>
    <?php include(__DIR__ . '/../layouts/footer.php') ?>
</body>

</html>