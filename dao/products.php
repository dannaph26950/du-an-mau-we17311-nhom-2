<?php
include_once 'pdo.php';
function products_select_all(){
    $sql = "SELECT 
    p.*, 
    p_i.img_url as img_name
from products p
join product_img p_i
    on p.id = p_i.product_id";

    return pdo_query($sql);
}
function product_update($id, $name, $quantily, $detail, $price,$category_id,$sale_id ){
    $sql = "UPDATE products SET name=?,quantily=?,detail=?,price=?,category_id=?,sale_id=? WHERE id=?";
    pdo_execute($sql,$name, $quantily, $detail, $price,$category_id,$sale_id ,$id);
}
function products_select_all_by_sale_img(){
    $sql = "SELECT 
    p.*, 
    p_i.img_url as img_name,
		p_s.sale as sale
from products p
join product_img p_i
    on p.id = p_i.product_id
join products_sale p_s 
		on p.sale_id = p_s.id  
    ";
    return pdo_query($sql);
}
function products_destroy($id){
    $removeProductsWithCategory = "DELETE from products where id = ?;
    alter table categories drop constraint fk_category;
    ";

    pdo_execute($removeProductsWithCategory, $id);
    // $removeCategoryQuery = "DELETE from categories where id = ?";
    // pdo_execute($removeCategoryQuery, $id);
    
   
}
function products_select_one($id){
    $sql = "SELECT * FROM products where id  = $id";
    return pdo_query_one($sql);
}
function products_insert($name, $quantily, $detail, $price,$category_id,$sale_id){
    $sqlQuery = "INSERT INTO products (name,quantily,detail,price,category_id,sale_id) VALUES (?,?,?,?,?,?)";
    pdo_execute($sqlQuery,$name, $quantily, $detail, $price,$category_id,$sale_id);
}

 function products_delete($id){
    $sql = "DELETE FROM products WHERE id = ?";
    if(is_array($id)){
        foreach($id as $item){
            pdo_execute($sql , $item);
        }
    }
    pdo_execute($sql , $id);
 }
// function products_insert($id,$name, $quantily, $detail, $price,$category_id,$sale_id){
//     $sql = "INSERT INTO products (id, 'name', 'quantily, detail, price, category_id, sale_id) VALUES (?,?,?,?,?,?,?)";
//     pdo_execute($sql,$id,$name, $quantily, $detail, $price,$category_id,$sale_id);
// }

// function products_update($id,$name, $quantily, $detail, $price,$category_id,$sale_id){
//     $sql = "UPDATE products SET 'name'=?, quantily=?, detail=?, price=?, category_id=?, sale_id=? WHERE id=?";
//     pdo_execute($sql,$id,$name, $quantily, $detail, $price,$category_id,$sale_id);
// }

// categories
function loai_all(){
    $sql="SELECT * FROM categories";
    return pdo_query($sql);
}
// sale product
function sale_product(){
    $sql="SELECT * FROM products_sale";
    return pdo_query($sql);
}







// select product_img
function products_img_All(){
    $sql = "SELECT * FROM product_img";
    return pdo_query($sql);
}

// select product



 
?>