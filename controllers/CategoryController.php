<?php
require_once 'models/Category.php';
// require_once 'models/db.php';

function listCategory()
{
    $categorys = getAllCategory();
    // var_dump($categorys);
    include 'views/admin/list_category.php';
}

function addCategory()
{
    include_once "views/admin/add_category.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ten_loai = $_POST['ten_loai'];

        if (!empty($ten_loai)) {
            insertCategory($ten_loai);
            header("location: ?url=list-category");
        }
    }
}

// Hàm sửa danh mục
function editCategory()
{
    //Kiểm tra có lấy đc id trên url không
    if (isset($_GET['id'])) {
        // gán id trên url vào biến $id_category
        $id_category = $_GET['id'];
        //Tạo biến $category_data để hứng dữ liệu từ hàm getCategoryById đã được truyền $id_category vào
        $category_data = getCategoryById($id_category);
        //kiểm tra xem $category_data có dữ liệu không
        if (isset($category_data)) {
            //gọi form để nhập dữ liệu
            include 'views/admin/edit_category.php';
            //Kiểm tra sever có trả về dữ liệu không
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //Tạo biến để gán dữ liệu bên form
                $ma_loai = $_POST['ma_loai'];
                $ten_loai = $_POST['ten_loai'];
            }
            //kiểm tra biến có dữ liệu không và gọi đến hàm updateCategory bên models đã được truyền dữ liệu tạo biến bên trên
            if (isset($ma_loai) && isset($ten_loai)) {
                updateCategory($ma_loai, $ten_loai);
                header("location: ?url=list-category");
            }
        }
    }
}

function deleteCategory()
{
    //Kiểm tra có lấy đc id trên url không
    if (isset($_GET['id'])) {
        // gán id trên url vào biến $id_category
        $id_category = $_GET['id'];
        //gọi hàm xóa
        removeCategory($id_category);
        header("location: ?url=list-category");
    }
}

function hiddenCategory()
{
    global $conn;

    if (isset($_POST['btn'])) {
        $ma_loai = $_POST['ma_loai'];

        try {
            $query_select_deleted = "SELECT deleted FROM loai WHERE ma_loai = :ma_loai";
            $stmt = $conn->prepare($query_select_deleted);
            $stmt->bindParam(':ma_loai', $ma_loai);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $currentDeleted = $row['deleted'];


            $newDeleted = ($currentDeleted == 1) ? 0 : 1;

            $query_update_deleted = "UPDATE loai SET deleted = :new_deleted WHERE ma_loai = :ma_loai";
            $stmt = $conn->prepare($query_update_deleted);
            $stmt->bindParam(':new_deleted', $newDeleted);
            $stmt->bindParam(':ma_loai', $ma_loai);

            if ($stmt->execute()) {
                // Cập nhật thành công
                header("Location: ?url=list-category");
                // echo 'done';
            } else {
                echo "Lỗi khi cập nhật.";
            }
        } catch (PDOException $e) {
            echo "Lỗi truy vấn hoặc kết nối CSDL: " . $e->getMessage();
        }
    }
}
