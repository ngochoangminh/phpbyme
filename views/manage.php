<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>

    <link rel="stylesheet" href="/public/css/style.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    
</head>
<body>
    <div class="header">
        <h1 style="padding-top: 32px;">MANAGE SITE</h1>
    </div>
    <div class="content">
        <div class="content_header">
            <table style="border:none; ">
                <tr>
                    <td style="border:none; width: 90%"><h2 style="text-align: left;">Manage</h2></td>
                    <td style="border:none; "><a href="/admin/add"> <button style="width: 70px;  text-align:center;">new</button></a></td>
                </tr>
            </table>
            
            
        </div>
        <div class=contents>
            <br/>
            <form action="/admin/manage" method="post" enctype="multipart/form-data">
            <table>
                <tr class="row1st">
                    <th id="id" style="width: 40px;">Id</th>
                    <th id="img" style="width: 170px;">Thumb</th>
                    <th id="title" style="width: 400px;">Title</th>
                    <th id="status" style="width: 100px;">Status</th>
                    <th id=action>Action</th>
                </tr>

                <?php
                if ($this->dataRes!=null){
                    while ($item = mysqli_fetch_array($this->dataRes))
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
                }
                
                ?>
            </table>
            </form>
        </div>
    </div>
    <div class="footer" >
        Footer
    </div>
    <!-- Scrip bostrap 4 --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>