<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {!! editor_css() !!}
</head>
<body>
<div class="container">
    <div class="col-md-12" style="margin-top: 50px">
        <div id="editormd_id">
            <textarea name="content" style="display:none;"></textarea>
        </div>
    </div>
</div>
<script src="//cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
{!! editor_js() !!}
</body>
</html>