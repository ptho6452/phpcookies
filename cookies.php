<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php 
        session_start();
        $flag=0;
        if(!empty($_POST['name']&& !empty($_POST['email']) && !empty($_POST['dia_chi']))){
            $name=$_POST['name'];
            $nameDN=$_POST['dia_chi'];
            $flag=1;
            $inform="Tên:".$_POST['name']." , Email: ". $_POST['email']." , dia chi: ". $_POST['dia_chi'];
            setcookie('khach_hang',$infrom,time() +3600);
        };
    ?>
    <center>
    <div>THÔNG TIN ĐĂNG NHẬP</div>
    <form action="" method="post">
        <table id="tb1">
        <tr>
            <td>Họ và tên:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>dia chi:</td>
            <td><input type="text" name="dia_chi"></td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit"></td>
        </tr>
        </table>
       
    </form>
    <div>
        <font color="#1E50C4">
        <?php 
            if($flag==1){
        ?>
            <table id="tho">
                <tr>
                    <td>Thông tin khách hàng</td>
                </tr>
                <tr> <td><?php echo $_COOKIE['khach_hang'] ?></td> <br></tr>
                <tr><td><a href="cookies_doc.php">Click here!</td></tr>
            </table>
        <?php
        }
        ?>
        </font>
        
    </div>
    </center>
    
</body>
</html>
