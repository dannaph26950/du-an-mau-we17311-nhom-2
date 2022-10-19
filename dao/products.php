<?php
include_once 'pdo.php';

function products_insert($id,$name, $quantily, $detail, $price,$category_id,$sale_id){
    $sql = "INSERT INTO products (id, 'name', 'quantily, detail, price, category_id, sale_id) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql,$id,$name, $quantily, $detail, $price,$category_id,$sale_id);
}

function products_update($id,$name, $quantily, $detail, $price,$category_id,$sale_id){
    $sql = "UPDATE products SET 'name'=?, quantily=?, detail=?, price=?, category_id=?, sale_id=? WHERE id=?";
    pdo_execute($sql,$id,$name, $quantily, $detail, $price,$category_id,$sale_id);
}

function products_delete($ma_hh){
    $sql = "DELETE FROM products WHERE  id=?";
            pdo_execute($sql, $ma_hh);
        }

    }
    else{
        pdo_execute($sql, $ma_hh);
    }
}
// select product_img
function products_img_All(){
    $sql = "SELECT * FROM product_img";
    return pdo_query($sql);
}
// select product

function products_select_all(){
    $sql = "SELECT * FROM products,product_img where products.id = product_img.product_id";
    return pdo_query($sql);
}

function products_select_by_id($ma_hh){
    $sql = "SELECT * FROM products WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}

function products_exist($ma_hh){
    $sql = "SELECT count(*) FROM products WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}


// function products_select_top10(){
//     $sql = "SELECT * FROM products WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

function products_select_dac_biet(){
    $sql = "SELECT * FROM products WHERE dac_biet=1";
    return pdo_query($sql);
}

function products_select_by_loai($ma_loai){
    $sql = "SELECT * FROM products WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}

function products_select_keyword($keyword){
    $sql = "SELECT * FROM products hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function products_select_page(){
    if(!isset($_SESSION['page_no'])){
        $_SESSION['page_no'] = 0;
    }
    if(!isset($_SESSION['page_count'])){
        // $row_count = pdo_query_value("SELECT count(*) FROM products");
        $_SESSION['page_count'] = ceil('pdo_query_value("SELECT count(*) FROM products")/10.0');
    }
    //exist_prama
    if(products_exist("page_no")){
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if($_SESSION['page_no'] < 0){
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if($_SESSION['page_no'] >= $_SESSION['page_count']){
        $_SESSION['page_no'] = 0;
    }
    $sql = "SELECT * FROM products ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
    return pdo_query($sql);
}
?>