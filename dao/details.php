<?php  
    include_once "../dao/pdo.php";
   
    // lấy thông tin theo id sản phẩm
    function select_row_detail(){
        $id=$_GET['id'];
        $sql="SELECT * FROM products where id= '$id' ";
        return pdo_query_one($sql);
    }
    //lấy ảnh detail
    function select_row_img_detail(){
        $id=$_GET['id'];
        $sql="SELECT * FROM product_img where product_id ='$id'";
        return pdo_query_one($sql);
    }
   
    function select_product_categories(){
        $id=$_GET['id'];
        $row_product=select_row_detail();
        $sql= "SELECT * FROM products where category_id=$row_product[category_id] and id!='$id'";
        return pdo_query($sql);
    }
    //lấy bình luận 
    function select_comment(){
        $id=$_GET['id'];
        $sql="SELECT * FROM comment where product_id='$id'";
        return pdo_query($sql);
    }
    // lấy tên người dùng.
    function select_user(){
        $sql="SELECT * FROM user ";
        return pdo_query($sql);
    }

?>