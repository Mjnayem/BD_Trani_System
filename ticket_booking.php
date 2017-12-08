<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dhaka info</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
    <style>
        #ticket_cut_reg{
            width: 400px;
            height: auto;
           color: #FFFFFF;
            font-size: 20px;
            text-align: right;
        }
    
    </style>
    
    
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
      <li><a href="about.php" class="active" id="ticket_link">রেলওয়েসম্পর্কিত </a></li>
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
          <h2 id="clr">বাংলাদেশ রেলওয়ে সম্পর্কে জানতে নিন্মের সাইট গুলোতে ঘুরে আসুন </h2>
        </div>
        <div class="content">
          
          <div class="right-panel">
            <ul>
              <li><a href="visit.php"id="ticket_link"> রেলপথ পরিদর্শন অধিদপ্তর  সিটিজেন চার্টার</a></li>
              <li><a href="office_public.php"id="ticket_link">অধিদপ্তরের জনবল </a></li>
              <li><a href="man_kork_h.php"id="ticket_link">নিযুক্তি ও কর্তব্য এবং দায়িত্ব পরিদর্শকের ক্ষমতা</a></li>
              <li><a href="map.php"id="ticket_link"> রেলওয়ে রুট ম্যাপ</a></li>
              <li><a href="son_ghoton.php"id="ticket_link">বাংলাদেশ রেলওয়ের সাংগঠনিক কাঠামো</a></li>
              <li><a href="public_all.php"id="ticket_link">জনবল</a></li>
              <li class="borderNone"><a href="train_all.php"id="ticket_link">যাত্রীবাহী ট্রেন</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="right-colum">
      <div class="title">
        <h1 id="divission">প্রাপ্তিসাধ্য &nbsp টিকিট</h1>
      </div>
        
        
        
    
      <div class="content">
          <div id="ticket_cut_reg">
          <form action="ticket_booking.php" method="post">
              
              Train Name &nbsp &nbsp&nbsp &nbsp<select name="train_name_tic">
              <option value="Subarna Express">Subarna Express</option>
              <option value="Mohanagar Goduli">Mohanagar Goduli</option>
              <option value="Parabat Express">Parabat Express</option>
              <option value="Joyantika Express">Joyantika Express</option>
              <option value="Kapotaskh express">Kapotaskh express</option>
              <option value="Sundarban express">Sundarban express</option>
              <option value="Rangpur Express">Rangpur Express</option>
              
              
              </select><br/><br/><br/>
              
              Seat Catagory &nbsp &nbsp&nbsp &nbsp<select name="seat_catagory_tic">
              <option value="তাপানুকূল">তাপানুকূল</option>
              <option value="প্রথম শ্রেণী">প্রথম শ্রেণী</option>
              <option value="প্রথম শ্রেণী চেয়ার">প্রথম শ্রেণী চেয়ার</option>
              <option value="২য় শ্রেণী-শোভন চেয়ার">২য় শ্রেণী-শোভন চেয়ার</option>
              <option value="২য় শ্রেণী-শোভন">২য় শ্রেণী-শোভন</option>
               <option value="২য় শ্রেণী- সুলভ">২য় শ্রেণী- সুলভ</option>
              
              </select><br/><br/>
             Date &nbsp &nbsp   <input type="text" name="date" placeholder="Example:15.01.2017"/><br/><br/><br/>
              Name &nbsp &nbsp<input type="text" name="cst_name" placeholder="Your Name"/><br/><br/><br/>
              Phone Number&nbsp &nbsp<input type="text" name="phone_no" placeholder="Phone Number"/><br/><br/><br/>
               Address&nbsp &nbsp<input type="text" name="address" placeholder="Adress"/><br/><br/>
              <input type="submit" name="tic_submit" value="Submit"/>
          
          </form>
          
          </div>
          
              <?php
        
        if(isset($_POST['tic_submit']))
        {
            $train_name=$_POST['train_name_tic'];
            $train_date=$_POST['date'];
            $catagory=$_POST['seat_catagory_tic'];
            $cas_name=$_POST['cst_name'];
            $phone_num=$_POST['phone_no'];
            $address=$_POST['address'];
            
            if($train_name==null||$train_date==null||$catagory==null||$cas_name==null||$phone_num==null||$address==null)
            {
                ?>
          <script>
              alert("A single box cannot be empty");
          </script>
          <?php
            }
            
            else
            {
                
                mysql_query("SET NAMES utf8");
          $link=mysql_connect("localhost","root","");
          mysql_select_db("bd_train",$link);
         mysql_query('SET CHARACTER SET utf8');
           mysql_query("SET SESSION collation_connection ='utf8_general_ci'");
          $li=mysql_query("select * from ticket_info where date='$train_date' and train_name='$train_name'");
          $row=mysql_fetch_array($li);
         // $news=$row[4];
            
            
            
            
            
            if($catagory=="তাপানুকূল")
            {
                
            
            //echo $row[2];
             $ff=(int)$row[2];
                
                if($ff>=0)
                {
                    $ff=$ff-1;
                mysql_query("update ticket_info set cat_1='$ff'");
                    mysql_query("insert into customar_info (cus_name,phone_num,address,date,train_name,catagory) values ('$cas_name','$phone_num','$address','$train_date','$train_name','$catagory')");
                    
                }
                else
                {
                    ?>
          <script>alert("Seat is full");</script>
          <?php
                    
                }
                
                }
            
            else if($catagory=="প্রথম শ্রেণ")
            {
               // echo $row[3];
                $ff=(int)$row[3];
                    if($ff>=0)
                {
                    $ff=$ff-1;
                mysql_query("update ticket_info set cat_2='$ff'");
                    mysql_query("insert into customar_info (cus_name,phone_num,address,date,train_name,catagory) values ('$cas_name','$phone_num','$address','$train_date','$train_name','$catagory')");
                    
                }
                else
                {
                    ?>
          <script>alert("Seat is full");</script>
          <?php
                    
                }
            }
            else if($catagory=="প্রথম শ্রেণী চেয়ার")
            {
                //echo $row[4];
                 //$ff=$row[4];
                 $ff=(int)$row[4];
                   if($ff>=0)
                {
                    $ff=$ff-1;
                mysql_query("update ticket_info set cat_3='$ff'");
                    mysql_query("insert into customar_info (cus_name,phone_num,address,date,train_name,catagory) values ('$cas_name','$phone_num','$address','$train_date','$train_name','$catagory')");
                    
                }
                else
                {
                    ?>
          <script>alert("Seat is full");</script>
          <?php
                    
                }
            }
            else if($catagory=="২য় শ্রেণী-শোভন চেয়ার")
            {
               // echo $row[5];
                 //$ff=$row[5];
                 $ff=(int)$row[5];
                    if($ff>=0)
                {
                    $ff=$ff-1;
                mysql_query("update ticket_info set cat_4='$ff'");
                    mysql_query("insert into customar_info (cus_name,phone_num,address,date,train_name,catagory) values ('$cas_name','$phone_num','$address','$train_date','$train_name','$catagory')");
                    
                }
                else
                {
                    ?>
          <script>alert("Seat is full");</script>
          <?php
                    
                }
            }
            else if($catagory=="২য় শ্রেণী-শোভন")
            {
                //echo $row[6];
                 //$ff=$row[6];
                 $ff=(int)$row[6];
                    if($ff>=0)
                {
                    $ff=$ff-1;
                mysql_query("update ticket_info set cat_5='$ff'");
                    mysql_query("insert into customar_info (cus_name,phone_num,address,date,train_name,catagory) values ('$cas_name','$phone_num','$address','$train_date','$train_name','$catagory')");
                    
                }
                else
                {
                    ?>
          <script>alert("Seat is full");</script>
          <?php
                    
                }
            }
            else if($catagory=="২য় শ্রেণী- সুলভ")
            {
               // echo $row[7];
                 //$ff=$row[7];
                 $ff=(int)$row[7];
                   if($ff>=0)
                {
                    $ff=$ff-1;
                mysql_query("update ticket_info set cat_6='$ff'");
                    mysql_query("insert into customar_info (cus_name,phone_num,address,date,train_name,catagory) values ('$cas_name','$phone_num','$address','$train_date','$train_name','$catagory')");
                    
                }
                else
                {
                    ?>
          <script>alert("Seat is full");</script>
          <?php
                    
                }
            }
                
            }
            
                
               
            
        }
        ?>
        
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
