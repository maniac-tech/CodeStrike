 <!DOCTYPE html>
 <html>
 <head>
   <title>CodeStrike Interview Test</title>
 </head>
  <body>
    <script type="text/javascript">
      var s=59
      var m=14
      var q
      function quizCount()
      {
        document.getElementById("timer").value=m+":"+s+" remaining"
        s=s-1
        q=setTimeout("quizCount()", 1000)
        if (s<0)
          m=m-1; s=59;

        if (m<0)
        {
          quizStop();
        }
      }
      window.onload = quizCount;
      
      function quizStop()
      {
        clearTimeout(q)
        document.getElementById('timer').value="Time Over!"
        box();
      }

      function box()
      {
        alert('Your Response has been recorded. Thank You!');
        document.getElementById("myForm").submit();
      }

      function textAreaAdjust(o) {
       o.style.height = "1px";
       o.style.height = (25+o.scrollHeight)+"px";
      }
    </script>
  <dl>
    <?php
      require_once 'test_connect.php';
      $db = new connect();
      $conn = $db->connection();
      session_start();
      $array =  array('0' => 0);
      $question = array();
      $sql = " Select uid From questions";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0 )
      {
       while ($row = mysqli_fetch_assoc($result)) 
       {
         $uid[] = $row["uid"];
       }
      }
      
      for ($i=1; $i <=3; $i++) { 
        $num = rand( 1, 14 );
        if ($uid[$num-1] == 0) {
         if (check($array, $num)) {
          $i--;
          continue;
        } 

        $query = mysqli_query($conn,"SELECT * FROM questions WHERE id = '$num'");
        $row = mysqli_fetch_assoc($query);
        $question[$i] = $row["question"];
        $array[$i] = $num;
        }
      }
      
      for ($i=4; $i <=5; $i++) { 
          $num = rand( 16, 24 );
          if ($uid[$num-1] == 1) {
           if (check($array, $num)) {
            $i--;
            continue;
          } 

          $query = mysqli_query($conn,"SELECT * FROM questions WHERE id = '$num'");
          $row = mysqli_fetch_assoc($query);
          $question[$i] = $row["question"];
          $array[$i] = $num;
        }
      }

      $k = 1;
      for ($j=1; $j <4 ; $j++) { 
        $num = $array[$j]*4;
        $limit = $num - 4;
        while ($num>$limit) { 
         $query = mysqli_query($conn,"SELECT * FROM answers WHERE id = '$num'");
         $row = mysqli_fetch_assoc($query);
         $answer[$k] = $row["answers"];
         $num--;
         $k++;
       }
      }

      mysqli_close($conn);
      $_SESSION ['question'] = $question;
      function check($array, $num)
      {
        for ($i=0; $i <count($array); $i++) { 
         if($array[$i] == $num)
         {
          return true;
          } 
        }
      }
      
    ?>
  </dl>
<style>

  body{
     background-image: url("Exam.jpg");
     background-repeat: no-repeat;
     background-size: 100%;
     background-attachment: fixed;
    }

   img{
     opacity: 0.5;
     margin: auto;
     width: 50%;
   }

   .sticky {
    position: fixed;
    width: 100%;
    left: 0;
    top: 0;
    z-index: 100;
    border-top: 0;
    }

  div.header{
   margin: -18px;
   font-size: 50px;
   color: black;
   text-align: center;
   background-color: #381EF7;
   backface-visibility: visible;
   opacity:1; 
    }

  fieldset{
   width: 75%;
   background-color: white;
   opacity: 0.7;
   margin-left: 10%;
   margin-top: 5%;
    }

  div.instructions{
   margin-top: 1%;
   font-size: 33px;
   background-color: blue;
   border: 3px solid black;
   opacity: 0.7;
    }

  input[type=submit] {
   padding:20px 30px; 
   background:black;
   color: white; 
   border:0 none;
   cursor:pointer;
   border-radius: 5px; 

    }

  input[type=button] {
   padding:20px 30px; 
   background:#FFFFFF;
   color: white; 
   border:0 none;
   cursor:pointer;
   border-radius: 0px;
   float: right;
   width: 150px;
   opacity:1; 

   }
</style>

<div class="header">CodeStrike Interview Test</div>
<input class="sticky" type="button" value="15:00 remaining" id="timer">

<div class="questions" id ='divs'>
  <form action="http://localhost/interview/send.php" method="post" id = "myForm">

   <fieldset>

     <h2><ol>
       <li><?php echo $question[1]; ?></li>
       <input type="radio" name="option1" value=<?php echo $answer[1]; ?>><?php echo $answer[1]; ?><br>
       <input type="radio" name="option1" value=<?php echo $answer[2]; ?>><?php echo $answer[2]; ?><br>
       <input type="radio" name="option1" value=<?php echo $answer[3]; ?>><?php echo $answer[3]; ?><br>
       <input type="radio" name="option1" value=<?php echo $answer[4]; ?>><?php echo $answer[4]; ?><br>
       <br>

       <li><?php echo $question[2]; ?></li>
       <input type="radio" name="option2" value=<?php echo $answer[5]; ?>><?php echo $answer[5]; ?><br>
       <input type="radio" name="option2" value=<?php echo $answer[6]; ?>><?php echo $answer[6]; ?><br>
       <input type="radio" name="option2" value=<?php echo $answer[7]; ?>><?php echo $answer[7]; ?><br>
       <input type="radio" name="option2" value=<?php echo $answer[8]; ?>><?php echo $answer[8]; ?><br>
       <br>

       <li><?php echo $question[3]; ?></li>
       <input type="radio" name="option3" value=<?php echo $answer[9]; ?>><?php echo $answer[9]; ?><br>
       <input type="radio" name="option3" value=<?php echo $answer[10]; ?>><?php echo $answer[10]; ?><br>
       <input type="radio" name="option3" value=<?php echo $answer[11]; ?>><?php echo $answer[11]; ?><br>
       <input type="radio" name="option3" value=<?php echo $answer[12]; ?>><?php echo $answer[12]; ?><br>
       <br>
       <br>

       <li><?php echo $question[4]; ?></li>
       <textarea name="answer1" onkeyup="textAreaAdjust(this)" style="overflow:hidden;width: 100%;font-size: 20px"></textarea>
       <br>
       <br>

       <li><?php echo $question[5]; ?></li>
       <textarea name="answer2" onkeyup="textAreaAdjust(this)" style="overflow:hidden;width: 100%;font-size: 20px"></textarea>
     </ol>
     <pre style="text-align: center;"><input type="button" value="SUBMIT" onclick="box()" style="font-size: 18px; margin-right: 500px"></pre>



   </fieldset>
 </form>
</div>

</body>
</html>
