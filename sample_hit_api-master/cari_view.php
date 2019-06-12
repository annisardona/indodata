<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo base_url() ?>assets/images/logo-javawebmedia.png" rel="shortcut icon">
<title><?php echo $title ?></title>
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
<section class="login">
	<h1>Login Page</h1>
    <form action="<?php echo site_url('sample_hit') ?>" method="post">
    
     <p>
        <label for="idPel">ID Pelanggan</label>
        <input type="text" name="idPel" id="idPel" placeholder="ID Pelanggan">
        
      </p>
      <p>
        <input type="submit" name="kirim" id="kirim" value="Kirim" class="full">
      </p>
    </form>
    <footer>Web design by <a href="http://javawebmedia.com" title="School of graphic &amp; web design" target="_blank">Java Web Media</a></footer>
</section>
</body>
</html>
