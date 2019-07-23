<!DOCTYPE HTML>
<html>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1>Customer List</h1></caption>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Birth day</th>
        <th>Address</th>
        <th>Image</th>
    </tr>


    <?php
    $customerList = array("1" => array("name" => "Mai Van Hoan", "birthday" => "15/8/1998", "addres" => "Ha Noi", "image" => "images/img1.jpg"),
        "2" => array("name" => "Tran Dang Khoa", "birthday" => "12/9/1996", "addres" => "Ha Noi", "image" => "images/img2.jpg"),
        "3" => array("name" => "Do Van Hanh", "birthday" => "12/8/1997", "addres" => "Ha Noi", "image" => "images/img3.jpg"));

    foreach ($customerList as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values["name"] . "</td>";
        echo "<td>" . $values['birthday'] . "</td>";
        echo "<td>" . $values['addres'] . "</td>";
        echo "<td><image src = '" . $values['image'] . "'width ='60px' heigth = '60px' /></td>";
        echo "<tr>";
    }
    ?>
</table>
</body>
</html>