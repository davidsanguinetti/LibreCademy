<?php
	$codeyard='active';
	$loginreq = true;
	include_once 'include/header.inc';
?>
 <style type="text/css" media="screen">
 #editor {
	height: 400px;
 }

.btn-file {
    position: relative;
    overflow: hidden;
}

.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

.buttons {
	margin: 20px;
}
 </style>
<div class="container">
	<h1>Code Yard</h1>
<ul class="nav nav-tabs">
  <li class="active"><a href="#">File1.java</a></li>
  <li><a href="#">File2.java</a></li>
  <li><a href="#">Layout1.xml</a></li>
  <li><a href="#">Layout2.xml</a></li>
</ul>
<div class="buttons">
    <label class="btn btn-default btn-file">
<i class="fa fa-cloud-upload" aria-hidden="true"></i> Importar Ficheiro <input class="btn btn-default btn-file" style="display: none;" type="file" name="Select File" onchange="readText(this);" />
    </label>
	<button class="btn btn-primary pull-right">Save</button>
</div>
<pre id="editor">function foo(items) {
    var i;
    for (i = 0; i &lt; items.length; i++) {
        alert("Hello Librecademy" + items[i]);
    }
}</pre>
</div>

<script src="components/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="js/codeyard.js" type="text/javascript" charset="utf-8"></script>
<script>
	var editor = ace.edit("editor");
	editor.setTheme("ace/theme/chrome");
	editor.getSession().setMode("ace/mode/java");
</script>
<?php
	include_once 'include/footer.inc';
?>


