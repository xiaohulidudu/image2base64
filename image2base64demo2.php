
<!doctype HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<title>Base64 图片转换——w3cmark工具——前端笔记网</title>
<style type="text/css">
body{background:#FFF;padding:0px;margin:0px auto;font-size:15px;color:#454545;font-family:Helvetica,Microsoft YaHei,Microsoft JhengHei;}
a{color:#454545;text-decoration:none;}
ol,ul,li,dl,dd,dt{padding:0;margin:0;list-style:none;}
form,p{padding:0;margin:0;}
i,em{font-style:normal;}
.spanclass{display: none;}

.header{ background: #1f6692; border-bottom: 2px solid #ffa900; height: 45px; line-height: 45px;  position: fixed; top: 0; width: 100%; overflow: hidden; z-index: 100}
.header a{color: #eee; display: inline-block; padding: 0 15px; vertical-align: top}
.header a:hover{ background: #14547c}
.header-top{ max-width: 1100px;overflow: hidden; margin: 0 auto}
.header-logo{ font-size: 26px; color: #00cfff;font-style: italic; margin-right: 20px;}
.header .header-logo:hover{ background: none}
.header-logo i{ font-size: 28px; color: #ffa900;font-style: italic; }
.header-logo .i1{color: #e33b79}
.header-logo .i2{color: #9bbb1b}

.main {width: 1000px;margin: 50px auto 0;overflow:hidden;}
.basetext{resize:none; height: 300px; width: 600px; padding: 10px;border: 1px solid #ddd;box-shadow: 0 0 5px #eee inset; color: #888; background: #fafafa; margin-bottom: 15px}
.input{position: relative;color: #777}
.input input{ width: 130px; height: 40px;position: absolute; left: 0; top: 0;opacity: 0;cursor: pointer;}
.btn{display:inline-block;width: 130px;height: 40px;line-height:40px;text-align:center;background:#f60;color:#fff;font-weight:bold;font-size:18px;-webkit-appearance:none;cursor: pointer; margin-right: 10px;}
.btnA{ background: #aaa}
.showpic{float: right; width: 360px; border: 1px dashed #ddd; height: 320px; text-align: center; line-height: 320px; color: #ddd}
.showpic img{max-width: 95%;max-height: 95%; vertical-align: middle;}
.footer {color:#ccc;text-align:center;padding:50px 0;}
.footer a{color: #bbb}
</style>
</head>
<body>
	<div class="main">
		<h3>Base64 图片转换工具</h3>
		<textarea name="text" id="Jbasetext" class="basetext">
 #
 # 图片转换Base64，无线开发、HTML5、CSS3必备的工具
 # 支持 PNG、GIF、JPG、BMP、ICO 格式
 # CSS DataURI Base64 工具
 # JavaScript，前端开发必备工具
 # W3Cmark开发
 #
		</textarea>
		<div id="showpic" class="showpic">图片预览区</div>
		<div class="input">
			<span class="btn">选择图片</span> <span class="btn btnA" id="Jqk">清空</span> （鼠标经过上面输入框全选，Ctrl+C复制）
			<input id="img"  type="file" accept="image/*"/>
		</div>
	</div>
<div class="footer">
<p >Powered by <a href="http://www.w3cmark.com" target="_blank">W3Cmark</a></p>
</div>

<script type="text/javascript">
/*
readAsBinaryString(file)	将文件读取二进制码
通常我们将它传送到后端，后端可以通过这段字符串存储文件
readAsText(file,[encoding])	将文件读取文本
第二个参数是文本的编码方式，默认UTF-8
readAsDataURL(file)	将文件读取为DataURL
将文件读取为一串Data URL字符串，将小文件以一种特殊格式的URL地址直接读入页面。小文件指图像与html等格式的文件。
*/
var F = (function(window,document){
	var F = function(){
		this.con = document.getElementById('Jbasetext');
		this.show = document.getElementById('showpic');
		this.btn = document.getElementById('img');
		this.btnqk = document.getElementById("Jqk");
		this.init();
	};
	F.prototype = {
		init:function(){
			var _this = this;
			_this.btn.onchange = function(){
				var file = this.files[0],    //选择上传的文件
					r = new FileReader();  //本地预览
				r.readAsDataURL(file);    //Base64
				r.onload = function(){
					_this.con.value = r.result;
					_this.showpic(r.result);
				}
			};
			_this.con.onmouseover = function(){
				this.select();
			};
			_this.btnqk.onclick = function(){
				_this.clear();
			};
		},
		showpic:function(url){
			var _this = this;
			_this.show.innerHTML = '<img src="'+ url +'" alt="" />';
		},
		clear:function(){
			var _this = this;
			_this.con.value = '';
		}
	};
return F;
})(window,document)
var f = new F();
</script>
<span class="spanclass">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fdfce3b3ee53b60a115ae550e35e8a015' type='text/javascript'%3E%3C/script%3E"));
</script>
</span>
</body>
</html>
