<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- link css -->
    <link rel="stylesheet" href="./public/css/style.css">

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="form sign_in">
                <h3>Đăng nhập</h3>


                <form id="form_input" method="post">
                    <div class="type">
                        <input type="user" placeholder="User Name" name="ho_ten" id="user">

                    </div>
                    <div class="type">
                        <input type="password" placeholder="Password" name="mat_khau" id="password">

                    </div>

                    <div class="forgot">
                        <a href="quenmatkhau.php" class="quenmk">Quên mật khẩu?</a>
                    </div>

                    <button class="btn bkg" name="login">Đăng nhập</button>

                </form>
            </div>

            <!-- Form Đăng Ký -->
            <div class="form sign_up">
                <h3>Đăng kí</h3>

                <form id="form_input" method="POST">
                    <div class="type">

                        <input type="text" name="ho_ten" placeholder="User name" id="name">
                    </div>
                    <div class="type">

                        <input type="email" name="email" placeholder="Email" id="email">
                    </div>
                    <div class="type">

                        <input type="password" name="mat_khau" placeholder="Password" id="password">
                    </div>

                    <div class="type">

                        <input type="password" name="confirm_mat_khau" placeholder="Confirm password" id="password">
                    </div>

                    <div class="type">

                        <input type="text" name="hinh" placeholder="Link avatar" id="password">
                    </div>


                    <br> <button class="btn bkg" type="submit" name="dangky">Đăng kí</button></br>
                </form>
            </div>
        </div>

        <div class="overlay">
            <div class="page page_signIn">
                <h3>Chào mừng trở lại! </h3>
                <p>Hãy nhập tài khoản và mật khẩu của bạn</p>

                <button class="btn btnSign-in">Chưa có Tài khoản , Nhấn để đăng kí<i class="bi bi-arrow-right"></i></button>
            </div>

            <div class="page page_signUp">
                <h3>Chào bạn!</h3>
                <p>Nhập thông tin cá nhân của bạn để đăng kí</p>

                <button class="btn btnSign-up">
                    <i class="bi bi-arrow-left"></i> Đăng nhập</button>
            </div>
        </div>
    </div>


    <!-- link script -->
    <script src="./public/js/main1.js"></script>


</body>

</html>