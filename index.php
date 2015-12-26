<?php include_once('header.php'); ?>

<div class="container">
<div class="searchInner">
<p>Search the database...</p>
<form method="post">
<input type="text" name="s" id="s" autocomplete="off" class="textField">
<?php /* <input type="button" name="search" value="search" id="search" class="button"> */ ?>
</form>

<div class="loading"><img src="images/loader.gif" /></div>
<div id="result">
<div class="result-inner"></div>
</div>
</div>
</div>
<?php include_once('footer.php'); ?>