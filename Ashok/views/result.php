<?php //include_once 'controllers/result.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Result</title>
  <link href="css/result.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header">
  <h1>Logo</h1>
  <div class="search_bar">
    <input type="text" class="querybox" name="q" placeholder="Search Here"/>
    <input type="submit" class="button" value="Search"/>
  </div>
</div>
<div class="container">
  <!--Start Left Panel-->
  <div class="left_panel">
    <?php echo $result_data ?>

  </div>
  <!--End Left Panel-->
  <!--Start Right Panel-->
  <div class="right_panel">
    <h1>This is the Right Panel</h1>

  </div>
  <!--End Right Panel-->
  <!--Pagination Area-->
  <div class="clear"></div>
</div>
<!--Pagination Area-->
<div class="pagination">
  <ul>
    <li class="prev"><a href="#">Prev</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li><a href="#">7</a></li>
    <li><a href="#">8</a></li>
    <li><a href="#">9</a></li>
    <li><a href="#">10</a></li>
    <li class="next"><a href="#">Next</a></li>
  </ul>
</div>
<div class="footer">
  &copy;Copyright By My Search Engine
</div>
</body>
</html>
