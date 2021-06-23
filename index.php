<!DOCTYPE html>
<html>
  <body>
    <h2>WEB</h2>
    <ol>
        <li> <a href="index.php?id=HTML">HTML</a> </li>
        <li> <a href="index.php?id=CSS">CSS</a> </li>
        <li> <a href="index.php?id=JavaScript">JavaSCript</a> </li>
    </ol>
    <h2>
    <?php 
     echo $str =$_GET['id']; 
    ?>
    </h2>
    <?php 
     echo file_get_contents("data/".$_GET['id']);
     //file_get_contents라는 함수를 사용해서 인자에 해당하는 경로를 찾아 해당 파일의 내용을 불러온다.
    ?>
</body>
</html>