<?php
$background = '<body style="background-color: rgb(220,220,40)">';
echo $background;
 
$h1 = '<h1 align="center">����������</h1>';
echo $h1;

$task1 = '<form method="post">
    <h3>1. ����� �� ������ ������� �������� �������� ��� ���� �������?<h3/>
    <div>
      F = m * g <input type="radio" name="task1"> <br/>

      F = m * g / 2 <input type="radio" name="task1"> <br/>

      F = m * g * g <input type="radio" name="task1"> <br/>
			
      F = m <input type="radio" name="task1"> <br/>
    </div>
  </form>';
echo $task1;

$task2 = '<form method="post">
    <h3>2. ����� �� ������ ������������� ������� ������ �������?<h3/>
    <div>
      a = F * m <input type="radio" name="task2"> <br/>

      F = m * g <input type="radio" name="task2"> <br/>

      F = m * a <input type="radio" name="task2"> <br/>
			
      F = m * (a + g) <input type="radio" name="task2"> <br/>
    </div>
  </form>';
echo $task2;

$task3 = '<form method="post">
    <h4>3. ���� �������� �� �������������� ���������. ������� ����������� ������, ���� ���� ������ ����� 5 �, � ���� �������� ���� �� ��������� � 20 �.<h4/>
    <div>
      <input type="text" name="task3"> <br/>
	  <h1></h1>
    </div>
  </form>';
echo $task3;

$last_topic = '<form name = "lasttopic" action="kinematics.php" method = "post">
 <input type = "submit" value= "� ����������� �������"/> </form>';
echo $last_topic;
$finish = '<form name = "finish" action="open.php" method = "post">
 <input type = "submit" value= "���������(� ������)"/> </form>';
echo $finish;
?>