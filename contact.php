<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cotrac</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
    
    
     <style>
        
        #foot 
        
        {
        color: white;
        padding-bottom:30px;
        width: 200px;
        height: 200px;
            position: relative;
            left: 400px;
       
        }
         
         
         
     #top
        {
            
            color:yellowgreen;
         font-size: 20px;
        }
         
          #all_link
    {
        
           color:khaki;
         font-size: 15px; 
    }
         
         #letter
    {
         color:white;
         font-size: 13px;
    }
         
         #clr {
            color:white;
            font-size: 15px;
            
        }
        
         
          
          #ticket_link
        {
            color:khaki;
         font-size: 13px;
        }
         
         
         #divission
        {
            color:yellowgreen;
         font-size: 24px;
        }
        
    
    </style>
    
    
</head>
<body>
<div class="menu-wrapper">
  <div class="menu">
    <ul>
      <li><a href="index.php" id="ticket_link">প্রথম পাতা</a></li>
      <li><a href="about.php"id="ticket_link">রেলওয়ে সম্পর্কিত</a></li>
      <li><a href="services.php"id="ticket_link">ট্রেনের সময়সূচি</a></li>
     
      <li><a href="contact.php" class="active"id="ticket_link">টেন্ডার নোটিস</a></li>
    </ul>
  </div>
  
</div>
<!--- menu-wrapper div end -->
<div class="clearing"></div>
<div class="border-bottom"></div>
<div class="logo-wrapper">
  <div class="leftshadow"><img src="images/logo-wrap-left.jpg" /></div>
  <div class="logo">
    <h1>বাংলাদেশ রেলওয়ে </h1>
  </div>
  <div class="rightshadow"><img src="images/logo-wrap-right.jpg" /></div>
</div>
<div class="clearing"></div>
<!--- banner wrapper div end -->
<div class="container">
  <div class="panel-wrapper">
    <div class="left-colum">
      <div class="panel">
        <div class="title">
          <h1 id="top">টেন্ডার নোটিস সম্পর্কে  আপডেট খবর পেতে নিন্মের লিংক এ ভিজিট করুন </h1>
          <h2>  </h2>
        </div>
        <div class="content">
          
          <div class="right-panel">
            <ul>
              <li><a href="tander_notice.php" id="all_link">    টেন্ডার নোটিস  </a></li>
              
             
             
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="right-colum">
      <div class="mid-panel-content">
        <div class="title">
          <h1 id="top">আমাদের সাথে যোগাযোগ</h1>
        </div>
        <div class="border"></div>
        <h2 id="letter">নিচের বক্স সটীক ভাবে পুরন করে আমাদের মেসেজ করুন </h2>
          
          
          <?php
      
      if(isset($_POST['submit'])){
          
          $name=$_POST['name'];
          $email=$_POST['email'];
           $subject=$_POST['subject'];
          $comment=$_POST['comment'];
          
          if($name!=null||$email!=null||$subject!=null||$comment!=null){
              
          
          mysql_query("SET NAMES utf8");
          $link=mysql_connect("localhost","root","");
          mysql_select_db("bd_train",$link);
         mysql_query('SET CHARACTER SET utf8');
           mysql_query("SET SESSION collation_connection ='utf8_general_ci'");
          mysql_query("insert into comment_tander (name,email,subject,comment)values('$name','$email','$subject',$comment')");
          }
          
          else
          {
              
          
             // echo "Name or Email or Comment can not be null";
              ?>
      <script>alert("Name or Email or Comment can not be null");</script>
      
      <?php
              }
      }
      
      ?>
          
          
     
          <div class="contact">
        <form action="contact.php"method="post">
      <input type="text" class="contact-input" name="name" id="name" placeholder="Name:"/>
      <input type="text" class="contact-input" name="email" id="name" placeholder="Email:"/>
            <input type="text" class="contact-input" name="subject" id="name" placeholder="subject:"/>
      <input type="text" class="contact-comments" name="comment" id="name" placeholder="Comments"/>
  <div >  <input type="submit" value="submit" name="submit"class="button-linkss"/></div>
        </form>
        <div class="clearing"></div>
        <div class="address">
          <div class="panel">
            <div class="title">
              <h1 id="top"><br>আমাদের সাথে যোগাযোগ</br> করতে পারেন এই ঠিকানাই </h1>
            </div>
            <div class="content">
              <p id="letter">Block No:100, kazinozrul road,<br />
                mirpur, Dhaka, Bangladesh</p>
              <p id="letter"><span id="letter">Phone :</span> 0471234</p>
              <p id="letter"><span id="letter">Email :</span> <a href="shihab00072@gmail.com"id="letter">shihab00072@gmail</a></p>
            </div>
          </div>
          <div class="panel">
            <div class="title">
              <h1 id="top"><br>আথবা যোগাযোগ করুন  </br></h1>
            </div>
            <div class="content">
              <p id="letter">Block No:5, Some where Road,<br />
                City name, State, Country name</p>
              <p id="letter"><span id="letter">Phone :</span> 000 555 727272</p>
              <p><span id="letter">Email :</span> <a href="mailto:info@bdtrain.com"id="letter">info@bdtrain.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearing"></div>
  </div>
  <!--- panel wrapper div end -->
</div>
<!--- container div end -->
<div class="clearing"></div>
<div class="footer-wrapper">
  <div class="footer">
   <p> <div id="foot">
        
       ©Devalop by shihab 2017.--<a href="https://mail.google.com/mail/u/0/#inbox"><h1> Email: shihab00072@gamil.com</h1></a> Images From: --<a href="http//google.com"><h2>google.com</h2></a> </p>
      
      </div>
</div>
</body>
</html>
