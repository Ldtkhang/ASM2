<div class="jumbotron">
  <div class="container text-center">
    <h1 class="brand-heading">STORE TOYS</h1>

    <!-- Form tìm kiếm -->
    <form method="get" action="">
      <input type="text" name="keyword" placeholder="Enter search keywords">
      <input type="submit" value="Search">
    </form>

  </div>
</div>

<?php
///////////////////////////// SEARCH ////////////////////////////////////////////
$host = "u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="seypaf5q0fnfmgps";
$password="ekh4orrzjl47dhuc";
$db= "yzrlq4yb0y0lthl4";
$conn = mysqli_connect($host,$username,$password,$db) or die("Can not connect database".mysqli_connect_error());

// Hàm tìm kiếm sản phẩm
function searchProduct($keyword, $conn)
{
    $sql = "SELECT * FROM `product` WHERE proname LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql);
    $products = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
    }
    return $products;
}

// Kiểm tra xem có yêu cầu tìm kiếm hay không //

if (isset($_GET["keyword"])) {
    $keyword = $_GET["keyword"];

    //tiềm kiếm sản phẩm//

    $searchResults = searchProduct($keyword, $conn);

    // Hiển thị kết quả tìm kiếm //

    if (count($searchResults) > 0) {
        echo " Search Results '{$keyword}':<br>";
        foreach ($searchResults as $result) {
            echo 
            "Name: " . $result["proname"]. ",
            Price: $" . $result["proprice"]. ",
            Quantity: ". $result["proquantity"].
            "<br>";
        }
    } else {
        echo "No results were found'{$keyword}'";
    }
}
?>