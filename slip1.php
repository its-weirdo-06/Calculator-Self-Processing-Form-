<HTML>
  <BODY>
    <FORM method=POST action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <div>
        Enter   First   Value  :&nbsp;<INPUT type=text name=a><BR><BR>
        Enter Second Value:&nbsp;<INPUT type=text name=b><BR><BR>
        <b>Select Arithmetic Operation</b><BR><BR>
        <INPUT type=radio name="choice" value="1">&nbsp;Addition<BR><BR>
        <INPUT type=radio name="choice" value="2">&nbsp;Subtraction<BR><BR>
        <INPUT type=radio name="choice" value="3">&nbsp;Multiplication<BR><BR>
        <INPUT type=radio name="choice" value="4">&nbsp;Division<BR><BR>
        <INPUT type=submit name=submit value="Calculate"><BR>
      </div>
  </FORM>
  <?php
            $c="";
    if(isset($_POST['submit']))
            {
              $a=$_POST['a'];
              $b=$_POST['b'];
              $ch=$_POST['choice'];
              if($ch=='1')
              {
                $c=$a+$b;
                echo"<h3>Addition =  $c</h3>";
              }
              if($ch=='2')
              {
                $c=$a-$b;
                echo"<h3>Subtraction =  $c</h3>";
              }
              if($ch=='3')
              {
                $c=$a*$b;
                echo"<h3>Multiplication =  $c</h3>";
              }
              if($ch=='4')
              {
                $c=$a/$b;
                echo "<h3>Division =  $c</h3>";
              }
            }
  ?>
  </BODY>
  <style>
    div
    {
      margin-left: 50px;
      margin-top: 25px;
    }
    h3
    {
      margin-left: 50px;
    }
  </style>
</HTML>