<!DOCTYPE html>
<html>
  <body>
    <h1>WEB</h1>
    <ol>
        <li> <a href="index.php?id=HTML">HTML</a> </li>
        <li> <a href="index.php?id=CSS">CSS</a></li>
        <li> <a href="index.php?id=JavaScript">JavaScript</a></li>
        <!-- 각링크를 누르면 URL이 다음과 같이 바뀐다. 그러면 파라미터인 id가 각각 HTML,CSS,JavaScript로 되어서 -->
    </ol>
    <h2>
        <?php 
         echo $_GET['id']; 
        // 여기서 그 파라미터 값을 받는다. 
        ?>
        
    </h2>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ipsum dolorum? Sed velit accusantium assumenda cum accusamus placeat provident praesentium temporibus qui eveniet. Doloremque excepturi aperiam beatae, incidunt vero hic!locale_filter_matcheslorem
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo error esse distinctio fugit? Temporibus vero vitae eveniet? Ex cupiditate nostrum quis ipsam natus quas, ad similique, vel, repudiandae consequuntur omnis!
</body>
</html>