<?php
$background = '<body style="background-color: rgb(220,220,40)">';
echo $background;
 
$h1 = '<h1 align="center">����������</h1>';
echo $h1;

$task1 = '<form method="post">
    <h3>1. ����� �� ������ ������� �������� �������� ���� ��� ��������������� ��������?<h3/>
    <div>
      S = V0 * t + a * t / 2 <input type="radio" name="task1"> <br/>

      S = V * t <input type="radio" name="task1"> <br/>

      S = V0 * t + a * t * t / 2 <input type="radio" name="task1"> <br/>
			
      S = a * t * t / 2 <input type="radio" name="task1"> <br/>
    </div>
  </form>';
echo $task1;

$task2 = '<form method="post">
    <h3>2. � ����� �� ������� ����� ������� ������� �������������������� ��������� � ������� ��������?<h3/>
    <div>
      a = v * v / R; w = v * v / R <input type="radio" name="task2"> <br/>

      a = v / R; w = v * v / R <input type="radio" name="task2"> <br/>

      a = 1 / R; w = v * v / R <input type="radio" name="task2"> <br/>
			
      a = v * v / R; w = v / R <input type="radio" name="task2"> <br/>
    </div>
  </form>';
echo $task2;

$task3 = '<form method="post">
    <h4>3. ����������, �������� � ���������� -0,5 �/�^2, �������� ���� �������� �� 15 �� 5 �/�. ������� ������� ��� ��� ����� ������������?<h4/>
    <div>
      <input type="text" name="task3"> <br/>
	  <h1></h1>
    </div>
  </form>';
echo $task3;

$start_open = '<form name = "startopen" action="open.php" method = "post">
 <input type = "submit" value= "��������� � ������"/>
 </form>';
echo $start_open;
$next_topic = '<form name = "nexttopic" action="dynamics.php" method = "post">
 <input type = "submit" value= "� ���������� �������"/> </form>';
echo $next_topic;
?>