<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit site</title>

    <link rel="stylesheet" href="/public/css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
    <div class="header" style="text-align: center;">
        <h1 style="padding-top: 32px;">EDIT IMAGE</h1>
    </div>
    <div class="content">
        <div class="content_header">
            <table style="border: none; ">
                <tr>
                    <td style="width: 80%; text-align:left;border: none; height: 50px;"><h2>Edit</h2></td>
                    <td style="border: none; height: 50px;"><button>Show</button></td>
                    <td style="border: none; height: 50px;" onclick="history.go(-1);"><button>Back</button></td>
                </tr>
            </table>  
            </hr>
        </div>
        <div class="contents">
            <form action="" method="post" enctype="multipart/form-data">
                <table style="border: none; ">
                    <tr>
                        <td style="width: 20%;border: none; text-align: left;">Title</td>
                        <td style="border: none; text-align: left;">
                            <input id="titleid" type="text" name="title" style="width: 300px;" >
                        </td>
                    </tr>
                    </hr>
                    <tr>
                        <td style="width: 20%;border: none; text-align: left;">Description</td>
                        <td style="border: none; text-align: left;">
                            <textarea id="descriptionid" name="description" cols="80%" style="text-align: left;resize: horizontal;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%;border: none; text-align: left;">Image</td>
                        <td  style="border: none; text-align: left;">

                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%;border: none; text-align: left;">Status</td>
                        <td style="border: none; text-align: left;">
                            <select name="status" id="statusid" style="margin-top: -5px; width:100px" >
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%;border: none;"></td>
                        <td style="width: 80%;border: none; text-align:left;">
                            <button >Submit</button>
                        </td>
                    </tr>
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