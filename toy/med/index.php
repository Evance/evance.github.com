
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <title>MED Test</title>
    <style>
        dt {font-weight:bold;font-size:18px;}
        dd {margin:0}
    </style>
</head><body>
<div id="wraper">
<dl>
<dt>MED Test<dt>
<dd>sw: <span id="J_sw"></span></dd>
<dd>sh: <span id="J_sh"></span></dd>
<dd>cw: <span id="J_cw"></span></dd>
<dd>ch: <span id="J_ch"></span></dd>
<dd>pr: <span id="J_pr"></span></dd>
<dl>
</div>
<script>
(function() {

    var win = window, doc = document;
    var ra = win.devicePixelRatio || 1,
        cw = Math.max(win.innerWidth, (doc.documentElement?doc.documentElement.clientWidth:0), (doc.body?doc.body.clientWidth:0)), //viewport 可见宽
        ch = Math.max(win.innerHeight, (doc.documentElement?doc.documentElement.clientHeight:0), (doc.body?doc.body.clientHeight:0)), //viewport 可见高
        sw = Math.max(cw*ra, (screen?screen.width:0)), //屏幕实际宽， 因为ios6和部分Android上screen.width 没算上像素密度，这里兼容过来
        sh = Math.max(ch*ra, (screen?screen.height:0)); //屏幕实际高
        
    $("J_cw").innerText = cw;
    $("J_ch").innerText = ch;
    $("J_sw").innerText = sw;
    $("J_sh").innerText = sh;
    $("J_pr").innerText = ra;
    function $(id){
        return document.getElementById(id);
    }
})()
</script>
</body>
</html>

