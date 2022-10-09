<?php
require_once 'pdo.php';

function products_insert($ten_hh,$so_luong, $don_gia, $giam_gia, $hinh,$mo_ta,$loai){
    $sql = "INSERT INTO products(ten_hh,so_luong, don_gia, giam_gia, hinh,mo_ta,loai) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql,$ten_hh,$so_luong, $don_gia, $giam_gia, $hinh,$mo_ta,$loai);
}

function products_update($ma_hh,$ten_hh,$so_luong, $don_gia, $giam_gia, $hinh,$mo_ta,$loai){
    $sql = "UPDATE products SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
    pdo_execute($sql,$ten_hh,$so_luong, $don_gia, $giam_gia, $hinh,$mo_ta,$loai);
}

function products_delete($ma_hh){
    $sql = "DELETE FROM products WHERE  ma_hh=?";
    if(is_array($ma_hh)){
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_hh);
    }
}

function products_select_all(){
    $sql = "SELECT * FROM products";
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