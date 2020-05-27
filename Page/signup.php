<div class="content">
	<legend> Đăng ký thành viên</legend>
	 <div class="form-dk">
        
        <?php
            if ((isset($MESSAGE))){
                if ($success==true) {
                echo "<h6 class='alert alert-success'>$MESSAGE</h6>";
            }else {
                echo "<h6 class='alert alert-danger'>$MESSAGE</h6>";
                } 
            }
        ?>
        <form action="index.php?page=dangky" method="post" enctype="multipart/form-data">
        	<table>
            <div class='item-dangky'>
                <tr> <td><label>Tên đăng nhập</label></td>
                <td><input class='input-dk' name="name" > </td> </tr>
            </div>
            <div class='item-dangky'>
               <tr> <td> <label>Mật khẩu</label></td>
                <td>
                <input class='input-dk' name="password" type="password" ></td> </tr>
            </div>
            <div class='item-dangky'><tr> <td> 
                <label>Xác nhận mật khẩu</label></td>
                <td>
                <input class='input-dk' name="re_password" type="password" ></td> </tr>
            </div>
            <div class='item-dangky'>
               <tr> <td> <label>Họ và tên</label></td> <td>
                <input class='input-dk' name="fullname"></td> </tr>
            </div>
            <div class='item-dangky'>
                <tr> <td><label>Địa chỉ email</label></td> <td>
                <input class='input-dk'  name="email" ></td> </tr>
            </div>
            <div class='item-dangky'><tr> <td>
                <label>Hình đại diện</label></td> <td>
                <input name="avatar" type="file"></td> </tr>
            </div>
            

            <div class='btn-dangky'><tr> <td> </td><td>
                <button name="btn_register" class='btn btn-success'>Đăng ký</button></td> </tr>
            </div>
            
            
            </table>
        </form>
        </div>

        
</div>