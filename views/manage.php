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
        <h1><?php echo $content; ?></h1>
    </div>
    <div class="content">
        <div class="content_header">
            <h2>Manage</h2>
            <button>new</button>
        </div>
        <div class=contents>
            content show here
            <br/>
            <table>
                <tr class="row1st">
                    <th id="id">Id</th>
                    <th id="img">Thumb</th>
                    <th id="title">Title</th>
                    <th id="status">Status</th>
                    <th id=action>Action</th>
                </tr>
                <tr class="rows" >
                    <td id="id">1</td>
                    <td id="img"><img style="width:150px; height:100px" hrep=#></td>
                    <td id="title">Title image</td>
                    <td id="status">4</td>
                    <td id=action><a href="google.com">Show</a> | <a href="google.com">Edit</a> | <a href="google.com">Delete</a> </td>
                </tr>
              
            </table>

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