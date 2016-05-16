<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div class="container">
<!-- Header Area -->
<div class="header">
    <a href="#">Search</a> |
    <a href="#">Post New Item</a>
</div>
<!-- Header Area -->
<!-- contents Area -->
<div class="contents">
    <div class="search-area">
        <h1><?php echo $name; ?></h1>
        <form>
        <input type="text" name="q" class="querybox" placeholder="eg: Search Anything" /><br />
        <input type="submit" class="button" value="Search" /> <input type="reset" class="button" value="Clear" />
        </form>
    </div>
</div>
<!-- contents Area -->
</div>
<div class="footer">
    &copy; Copyright By My Search Engine
</div>
</body>
</html>
