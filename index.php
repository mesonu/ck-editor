<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

  <!-- there are some issue in latest version i dont what but not working image & video -->
  <!-- <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --><!-- latest version of 4 -->

</head>
<body>

<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container">
  <div class="row">
    <span> CK editor with image Uploader</span>
    <div class="col">
    <textarea name="editor"></textarea>
                
    </div>
  </div>
</div>

<script>
    // Enable local "abbr" plugin from /myplugins/abbr/ folder.
    //this has limited feature
    //CKEDITOR.plugins.addExternal( 'video', '/ck-editor/myplugins/video/','plugin.js' );

    //this working fine for audio & video
    CKEDITOR.plugins.addExternal( 'html5video', '/ck-editor/myplugins/ckeditor-html5-video/html5video/','plugin.js' );
    CKEDITOR.replace( 'editor',{
        height:300,
        //extraPlugins:'video', //if want use then uncommnet from here
        extraPlugins:'html5video',
        filebrowserBrowseUrl : 'upload.php',
        filebrowserUploadUrl : 'upload.php'
    } );
</script> 
</body>
</html>
