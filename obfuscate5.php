<!DOCTYPE html>
<html>
<head>
  <title>Luna Web Obfuscate 101 Lab</title>
  <link rel="stylesheet" type="text/css" href="bulma.css">
</head>
<body>

<div class="container">

  <div class="columns">

  <div class="column is-one-quarter">
        <?php include("menu.php"); ?>
        </div>
    
      <div class="column auto">

        <h1 class="title">Luna</h1>
        <h1 class="subtitle">Web Obfuscation 101 Lab</h1><hr>

        <div class="box">
          <h1 class="subtitle">Hint</h1>
          <p>Unicode Escape!
          </p><br>
          <h1 class="subtitle">Your Goal</h1>
          <p>Your goal is show me an alert box. <br>Example : alert(1)
          </p><br>
          <h1 class="subtitle">Input</h1>
          <p>
          <form action="obfuscate5.php" method="get">

          <input type="text" name="string" value="Input here">
          <input class="button is-primary" type="submit" value="Try to bypass!">


        </form>
          </p><br>
          <h1 class="subtitle">Output</h1>
          <p><?php
                $filter=["alert","#"];
                if(isset($_GET['string'])){
                    $string=$_GET['string'];
                  echo "<script>".str_replace($filter,"-",$string)."</script>";
                }

                ?>
          </p>
        </div>
      <p>Copyright &copy; 2017 @art0flunam00n</p>
      
        

  </div>

</div>
</body>
</html>
    

