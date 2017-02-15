<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CodeStrike Interview 2017</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css'>
</head>

<body>
  <style>
      .cover{
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;

      }


      .content {
        width: 900px;
      }

      body {
        background: url("http://www.ridgeviewacademy.com/content/uploads/2016/10/minutes.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }


      input[type=button] {
       padding:23px 30px; 
       background-color: red;
       color: white; 
       border:0 none;
       cursor:pointer;
       border-radius: 0px;
       float: right;
       width: 170px;
       opacity:1; 

     }
  </style>

  <div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper blue lighten-1">
        <a href="#!" class="brand-logo center">CodeStrike Interview Q&A</a>
        <input class="sticky" type="button" value="15:00 remaining" id="timer">

      </div>
    </nav>
  </div>

  <dl>
    <?php
    session_start();
    // Below two lines have been commented out, as they were found illogical:
    // $question = $_SESSION['question'];
    // $answer = $_SESSION['answer'];

    //Below code has been copied from Burhan's snippet: 
    require_once 'test_connect.php';
    // $db = new connect();
    // $conn = $db->connection();
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
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js'></script>

  <script type="text/javascript">


    var s=59
    var m=14
    var q
    function quizCount()
    {
      document.getElementById('timer').value=m+":"+s+" remaining"
      s=s-1
      q=setTimeout("quizCount()", 1000)
      if (s<0)
        { m=m-1; s=59;}

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
  <!--div class="content row cover z-depth-5 center">
  <h1>CODESTRIKE</h1> <h3>INTERVIEW Q&A</h3>
  </div-->



  <form action="test_submit.php" method="post" id = "myForm">
    <div class="content row cover z-depth-5 blue lighten-5">
      <?php echo $question[1]; $_SESSION["q1"]=$question[1];?>

      <p>
        <input class="with-gap" name="option1" type="radio" id="test1" value="<?php echo $answer[1]; ?>" />
        <label for="test1"><?php echo $answer[1] ?></label>
      </p>
      <p>
        <input class="with-gap" name="option1" type="radio" id="test2" value="<?php echo $answer[2]; ?>" />
        <label for="test2"><?php echo $answer[2] ?></label>
      </p>
      <p>
        <input class="with-gap" name="option1" type="radio" id="test3" value="<?php echo $answer[3]; ?>" />
        <label for="test3"><?php echo $answer[3] ?></label>
      </p>
      <p>
        <input class="with-gap" name="option1" type="radio" id="test4" value="<?php echo $answer[4]; ?>" />
        <label for="test4"><?php echo $answer[4] ?></label>
      </p>
    </div>
    <div class="content row cover z-depth-5 blue lighten-5">
      <?php echo $question[2]; ?>

      <p>
        <label for="test5"><?php echo $answer[5]; ?></label>
      </p>
      <p>
        <input class="with-gap" name="option2" type="radio" id="test6">
        <label for="test6"><?php echo $answer[6]; ?></label>
      </p>
      <p>
        <input class="with-gap" name="option2" type="radio" id="test7"  />
        <label for="test7"><?php echo $answer[7]; ?></label>
      </p>
      <p>
        <input class="with-gap" name="option2" type="radio" id="test8"  />
        <label for="test8"><?php echo $answer[8]; ?></label>
      </p>
    </div>
    <?php $_SESSION["answer1"]="ANSWER"; ?>
    <div class="content row cover z-depth-5 blue lighten-5">
      <?php echo $question[3]; ?>

      <p>
        <input class="with-gap" name="group1" type="radio" id="test9"  />
        <label for="test9"><?php echo $answer[9]; ?></label>
      </p>
      <p>
        <input class="with-gap" name="group1" type="radio" id="test10"  />
        <label for="test10"><?php echo $answer[10]; ?></label>
      </p>
      <p>
        <input class="with-gap" name="group1" type="radio" id="test11"  />
        <label for="test11"><?php echo $answer[11]; ?></label>
      </p>
      <p>
        <input class="with-gap" name="group1" type="radio" id="test12"  />
        <label for="test12"><?php echo $answer[12]; ?></label>
      </p>
    </div>
    <div class="content row cover z-depth-5 blue lighten-5">
      <?php echo $question[4]; ?>
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <textarea name="answer1" id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1"></label>
          </div>
        </div>
      </div>
    </div>
    <div class="content row cover z-depth-5 blue lighten-5">
     <?php echo $question[5]; ?>
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <textarea name="answer2" id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1"></label>
          </div>
        </div>
      </div>
    </div>
    <div class="content row center">
      <button class="btn waves-effect waves-light" type="submit" name="action" onclick="box()">Submit
        <i class="material-icons right">send</i>
      </button>
    </div>
  </form>

  <footer class="page-footer blue lighten-1">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">CodeStrike</h5>
        <p class="grey-text text-lighten-4">Atharva College Malad (W)</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <!--h5 class="white-text">Links</h5-->
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">CodeStrike Home</a></li>                
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2014 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
  </footer>

</body>
</html>