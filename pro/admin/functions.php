<?php
require_once "db_connection.php";
if(!isset($_POST['insert_products']))
{
    $pro_title =isset($_POST['pro_title']) ? $_POST['pro_title'] : '';
    $pro_cat =isset($_POST['pro_cat']) ? $_POST['pro_cat'] : '';
    $pro_brand =isset($_POST['pro_brand']) ? $_POST['pro_brand'] : '';
    $pro_price =isset($_POST['pro_price']) ? $_POST['pro_price'] : '';
    $pro_desc =isset($_POST['pro_desc']) ? $_POST['pro_desc'] : '';
    $pro_keywords =isset($_POST['pro_kw']) ? $_POST['pro_kw'] : '';
    $insertQuery = "insert into products(pro_title,pro_cat,pro_brand,pro_price,pro_desc,pro_keywords)
    values('$pro_title','$pro_cat','$pro_brand','$pro_price','$pro_desc','$pro_keywords');";
    //echo $insertQuery;
    $res = mysqli_query($con,$insertQuery);
    if(!$res)
    {
        echo "Not Executed";
    }
}
function getCats(){
    global $con;
    $getCatsQuery = "select * from categories";
    $getCatsResult = mysqli_query($con,$getCatsQuery);
    while($row = mysqli_fetch_assoc($getCatsResult)){
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<option value='$cat_id'>$cat_title</option>";
    }
}
function getBrands(){
    global $con;
    $getBrandsQuery = "select * from brands";
    $getBrandsResult = mysqli_query($con,$getBrandsQuery);
    while($row = mysqli_fetch_assoc($getBrandsResult)){
        $brand_id = $row['brand_id'];
        $brand_title = $row['brand_title'];
        echo "<option value='$brand_id'>$brand_title</option>";
    }
}