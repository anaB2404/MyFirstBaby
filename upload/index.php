<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload de Imagens</title>
</head>

<body>
<a href="lista-imagens.php"/>Listar imagens</a>
<h1>Upload de imagens</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
Insira a imagem:<br />
<input type="file" name="imagem" /><br /><br />
<input type="submit" value="Upar imagem" />
</form>