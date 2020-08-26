<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class=contents>
            <br/>
            <form action="/admin/manage" method="post" enctype="multipart/form-data">
            <table>
                <tr class="row1st">
                    <th id="id" style="width: 40px;">Id</th>
                    <th id="img" style="width: 170px;">Thumb</th>
                    <th id="title" style="width: 350px;">Title</th>
                    <th id="status" style="width: 150px;">Status</th>
                    <th id=action>Action</th>
                </tr>

                <?php
                    $db = mysqli_connect("127.0.0.1", "root", "", "ngoc");
                    $dataRes = mysqli_query($db, "SELECT * FROM `image`");
                    while ($item = mysqli_fetch_array($dataRes))
                    {
                    ?>
                        <tr class="rows" >
                            <td id="id"><?php echo $item['id']; ?></td>
                            <td id="img">
                                <img style="width:150px; height:100px" src=<?php echo "/upload/".$item['image'];?>>
                            </td>
                            <td id="title"><?php echo $item['title'] ?></td>
                            <td id="status"><?php echo $item['status']?></td>
                            <td id=action><a href=<?php echo "/admin/show/".$item['id']; ?>>Show</a> 
                                | 
                                <a href=<a href=<?php echo "/admin/edit/".$item['id']; ?>>Edit</a> 
                                | 
                                <a href=<a href=<?php echo "/admin/delete/".$item['id']; ?>>Delete</a> 
                            </td>
                        </tr>
                    <?php

                }       
                ?>
            </table>
            </form>
</body>
</html>