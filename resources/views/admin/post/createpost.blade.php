@extends('test.test')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {!! editor_css() !!}
    <style>
    .biaoti{
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="biaoti">
        <input class="title" type="text" name="title" placeholder="请输入文章标题"><label >文章标题</label>
    </div>
<div class="container">
    <div class="col-md-12" style="margin-top: 50px">
        <div id="editormd_id">
            <textarea class="editor" name="content" style="display:none;"></textarea>
        </div>
    </div>
</div>
<script src="//cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
{!! editor_js() !!}
    <button type="button" class="submit">创建文章</button>
</body>
</html>
<script>
$('.submit').on('click',function () {
   var editor =$('.editor').val();
   var title =$('.title').val();
    $.ajax({
        type:"post",
        url:"/createpost",
        data:{'title':title,'editor':editor},
        datatype:'json',
        success:function (msg) {
            if(msg.code == 200){
                alert("创建成功");
            }else{
                alert("请重试");
            }
        }
    })
});
</script>
@endsection
.ajax({
type: "GET",
url:"/api/getstation/"+tapedName,
success: function(msg) {
if(msg.code == 200) {
var data = msg.data,
filterNameHtml = '<optgroup label="选择地区"><option>全部</option>';
    for(var k = 0;k < data.length;k++) {
    filterNameHtml += '<option>'+data[k].stationName+'</option>';
    }
    filterNameHtml += '</optgroup>';
$(".chooseName").empty().append(filterNameHtml);
$(".choose-station-select").empty().append(filterNameHtml);
} else {
alert("筛选内容获取失败，请重试！");
}
},
error : function() {
alert("筛选内容获取出错，请重试！");
}
})
});