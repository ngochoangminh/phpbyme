<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>

    <link rel="stylesheet" href="/public/css/style.css">    
</head>
<body>
    <div class="header">
        <h1><?php echo $content; ?></h1>
    </div>
    <div class="content">
        <div class="content_header">
            <table style="border:none;">
                <tr>
                    <td style="width:85%; border:none; text-align:left;">
                        <h3 id="add_action_h3">Add</h3>
                    </td >
                    <td id="back_btn" onclick="history.go(-1);" style=" text-align:left; border:none;">
                        <button>Back</button> 
                    </td>
                    <td id="show_btn" onclick="prevF()" style="border:none;  text-align:left;"> 
                        <button>Show</button>
                    </td>
                </tr>
            </table>
        </div>
        <div class=contents>
            <form action="<? ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name='pre' value="<?=$url_site('controller=admin&action=add')?>" >
                <table style="border:none;">
                    <tr class="form-group">
                        <td style="width: 20%;border: none; text-align:left;">
                           Title:
                        </td>
                        <td style="border: none; text-align:left;">
                            <input id="titleid" type="text" name="title" style="width: 300px;" value="Title">
                        </td>
                    </tr>
                </table>
                <hr class="my-4">
                <table style="border:none;">
                    <tr class="form-group">
                        <td style="width: 20%;border: none; text-align:left;" valign="top">
                            Description:
                        </td>
                        <td style="width: 80%; border: none; text-align:left;">
                            <textarea id="descriptionid" name="description" rows="4" cols="70%" style="resize: horizontal;">Description</textarea>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td style="width: 20%;border: none; text-align:left;" valign="top">
                            Image:
                        </td>
                        <td style="width: 80%;border: none; text-align:left;">
                            <input type="file" id="imageid" name="image" accept="image/*" onchange="readURL(this);">
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td style="width: 20%;border: none; text-align:left;" valign="top">
                            
                        </td>
                        <td style="border: none; text-align:left;">
                            <img id="blah" src="https://st.quantrimang.com/photos/image/2017/04/08/anh-dai-dien-FB-200.jpg" alt="your image" style="width:150px;height:150px;margin-top:5px" />
                        </td>
                    </tr>
                </table >
                <hr class="my-4">
                <table style="border:none;">
                    <tr class="form-group">
                        <td style="width: 20%;border: none; text-align:left;" valign="top">
                            Status:
                        </td>
                        <td style="border: none; text-align:left;">
                            <select name="status" id="statusid" style="margin-top: -5px; width:100px">
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td style="width: 20%;border: none; text-align:left;" valign="top">
                            
                        </td>
                        <td style="border: none; text-align:left;">
                            <button type="submit" class="btn btn-outline-dark" style="margin-top:5px">Submit</button>
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