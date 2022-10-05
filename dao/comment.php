<?php
require_once 'pdo.php';

function comment_insert($user_id, $ma_hh, $noi_dung ){
    $sql = "INSERT INTO comment(user_id, ma_hh, noi_dung) VALUES (?,?,?)";
    pdo_execute($sql, $user_id, $ma_hh, $noi_dung);
}

function comment_update($ma_bl, $user_id, $ma_hh, $noi_dung){
    $sql = "UPDATE comment SET user_id=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
    pdo_execute($sql, $user_id, $ma_hh, $noi_dung, $ma_bl);
}

function comment_delete($ma_bl){
    $sql = "DELETE FROM comment WHERE ma_bl=?";
    if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_bl);
    }
}

// function comment_select_all(){
//     $sql = "SELECT * FROM comment bl ORDER BY ngay_bl DESC";
//     return pdo_query($sql);
// }

function comment_select_by_id($ma_bl){
    $sql = "SELECT * FROM comment WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}

function comment_exist($ma_bl){
    $sql = "SELECT count(*) FROM comment WHERE ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
//-------------------------------//
function comment_select_by_hang_hoa($ma_hh){
    $sql = "SELECT b.*, h.ten_hh FROM comment b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
    return pdo_query($sql, $ma_hh);
}
?>