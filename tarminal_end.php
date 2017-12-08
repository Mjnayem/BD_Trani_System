<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>end</title>
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
      <li><a href="index.php"id="ticket_link">প্রথম পাতা</a></li>
      <li><a href="about.php" class="active"id="ticket_link" >রেলওয়েসম্পর্কিত </a></li>
      <li><a href="services.php"id="ticket_link">ট্রেনের সময়সূচি</a></li>
     
      <li><a href="contact.php"id="ticket_link">টেন্ডার নোটিস</a></li>
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
          <h1 id="divission">বাংলাদেশ রেলওয়ে  সম্পর্কে কিছু তথ্য </h1>
          <h2>বাংলাদেশ রেলওয়ে সম্পর্কে জানতে নিন্মের সাইট গুলোতে ঘুরে আসুন </h2>
        </div>
        <div class="content">
          
          <div class="right-panel">
            <ul>
              <li><a href="visit.php"id="ticket_link"> রেলপথ পরিদর্শন অধিদপ্তর</a></li>
              <li><a href="office_public.php"id="ticket_link">অধিদপ্তরের জনবল </a></li>
              <li><a href="man_kork_h.php"id="ticket_link">নিযুক্তি ও কর্তব্য এবং দায়িত্ব পরিদর্শকের ক্ষমতা</a></li>
              <li><a href="map.php"id="ticket_link"> রেলওয়ে রুট ম্যাপ</a></li>
              <li><a href="son_ghoton.php"id="ticket_link">বাংলাদেশ রেলওয়ের সাংগঠনিক কাঠামো</a></li>
              <li><a href="public_all.php"id="ticket_link">জনবল</a></li>
              <li class="borderNone"><a href="train_all.php">যাত্রীবাহী ট্রেন</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="right-colum">
      <div class="title">
          
        <h1 id="divission">টার্মিনাল এর নাম এবং পোঁছাবার সময়  </h1>
      </div>
      <div class="content">
          
        <<p>
          
          
          <table border="2" width="600" style="color:white;font-size:25px">
<tr>
<th>SL.NO</th>
<th>Train Name</th>
<th>Tarminal Name</th>
    <th>End Time</th>

</tr>
<?php
mysql_query("SET NAMES utf8");
          $link=mysql_connect("localhost","root","");
          mysql_select_db("bd_train",$link);
         mysql_query('SET CHARACTER SET utf8');
      $run=mysql_query("select * from tarminal_end");
      while($row=mysql_fetch_array($run))
      {
        $sid=$row[0];
        $sname=$row[1];
        $semail=$row[2];
          $snew=$row[3];
       
        echo"<tr >
        <td>$sid</td>
        <td>$sname</td>
        <td>$semail</td>
        <td>$snew</td>
        
        </tr>";
      }
?>
</table><br/><br/>
          
        এই লিঙ্ক এ যান  <a href="http://www.railway.gov.bd/">টার্মিনাল এর নাম এবং পোঁছাবার সময় </a>
        
          
          </p>
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
