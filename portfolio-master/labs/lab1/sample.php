<!DOCTYPE html>
<html>

<?php print('<?xml version ="1.0"encoding="utf-8" ?>') ?>
  <head>
    <title>Using PHP document</title>
  </head>
  <?php
      $file = fopen("times.txt", "r");
      $num = fgets($file);
      $num = $num+1;
      $file = fopen("times.txt", "w");
      fwrite($file, $num);
      fclose($file);
      $abc = 1;
  ?>          
     <bode style = "font-size: 2em"
        <strong>
           你的姓名為: <?php print("$_POST[stname]"); ?>
        </strong>
        <br/>
        你的學號為: <?php print("$_POST[stnumber]"); ?>
        <br/>
        你猜的數字為: <?php print("$_POST[gnumber]"); ?>  
        <br/>
<?php if($abc>"$_POST[gnumber]"){echo"數字太小";}
else if($abc<"$_POST[gnumber]"){echo"數字太大";}
else{echo"你猜對了";}
        ?> 
        <br/>
        你總共猜了: <?php echo "$num" ?> 次
</html>