<?php
  $title = '<title>Знания Физики</title>';
  echo $title;
  $background = '<body style="background-color: rgb(220,220,40)">';
  echo $background;
  
  $h1 = '<h1 align="center">Знания Физики</h1>';
  echo $h1;
  
  $h2 = '<h3 align="center">Этот тест поможет вам вспомнить/узнать некоторые базовые формулы Физики, которые могут вам пригодиться на экзаменах и прочих работах.</h3>';
  echo $h2;
  
  $button_1 = '<form name = "kinematics" action="kinematics.php" method = "post" align="center">
                 <input type = "submit" value= "Кинематика"/>
               </form>';
  echo $button_1;
  
  $button_2 = '<form name = "dynamics" action="dynamics.php" method = "post" align="center">
                 <input type = "submit" value= "Динамика"/>
               </form>';
  echo $button_2;
?>