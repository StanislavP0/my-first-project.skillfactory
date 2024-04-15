<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFirstProject</title>
    <link rel="stylesheet" href="Style.css" >
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'hrefaboutme.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/jokker.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Любимые игры: <br>
                    <?php echo 'Игра номер 1:', ' ' ,$games.'<br>';
                          echo 'Игра номер 2:',' ', $more; ?>
                    </p>
                    <p> Я научился создавать переменные </p>
                    <p> Изучил простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    My name is Stanislav Babidzhonov, I am 1488 years old. 
                    I am interested in computer games, front-end development and pentesting. 
                    In my free time, I like to go to the Black Dolphin, it’s a landmark of our city!
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>                    

