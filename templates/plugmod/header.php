<?php
// You can do some initialization for the template here
@date_default_timezone_set(date_default_timezone_get());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link title="Rapidleech Style" href="templates/plugmod/styles/rl_style_pm.css" rel="stylesheet" type="text/css" />

<title>uTorrent Stream</title>
<script type="text/javascript">
/* <![CDATA[ */
var php_js_strings = [];
php_js_strings[87] = " <?php echo lang(87); ?>";
php_js_strings[281] = "<?php echo lang(281); ?>";
pic1= new Image(); 
pic1.src="templates/plugmod/images/ajax-loading.gif";
/* ]]> */
</script>
<script type="text/javascript" src="classes/js.js"></script>
<?php
if ($GLOBALS['options']['ajax_refresh']) { echo '<script type="text/javascript" src="classes/ajax_refresh.js"></script>'.$nn; }
if ($GLOBALS['options']['flist_sort']) { echo '<script type="text/javascript" src="classes/sorttable.js"></script>'.$nn; }
?>

</head>

<body>
<center><a href="https://utorrentstream.com"> <img src="templates/plugmod/images/logo_pm.gif" alt="uTorrent Stream" border="0" /></a></center><br />
<center><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Homepage 728*90 Banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3968645922999785"
     data-ad-slot="8604217753"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>