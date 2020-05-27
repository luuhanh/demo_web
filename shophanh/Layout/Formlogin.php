
        <div id='form-dn'>

                
            
                <form action="index.php" method="post">
                	<legend> Form Đăng Nhập</legend>
                     <?php 
                if(isset($msg)){
                    echo "<p class='red'> $msg</p>";
                }
            ?>
                    <div>
                        
                        <input class='dn-input' placeholder='Tên đăng nhập' name="name">
                    </div>
                    <div>
                        
                        <input class='dn-input' placeholder='Mật khẩu' name="password" type="password" >
                    </div>
                   
                    
                        <button class='btn btn-success cangiua' name="login">Đăng nhập</button>

                    
                    
                </form>   
                <p class="dktk">Chưa có tài khoản?<a href="index.php?page=dangky" > Đăng ký ngay</a>  </p>  
         </div>
            
                
    
