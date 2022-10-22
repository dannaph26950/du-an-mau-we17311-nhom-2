<?php
    session_start();
    // Định nghĩa các url() cần thiết đc sử dụng trong website
  

    const BASE_URL = "http://localhost/du-an-mau-we17311-nhom-2/";
const SITE_URL = BASE_URL . 'site/index.php';
const CONTENT_URL = BASE_URL . 'content/';
const ADMIN_URL = BASE_URL . 'admin/index.php';
function check_admin_role(){
    if(isset($_SESSION['auth']) && $_SESSION['auth']['role_id'] == 2){
        return true;
    }
    return false;
}
    // Định nghĩa đường dẫn chứa ảnh sử dụng trong upload
