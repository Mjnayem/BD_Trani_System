<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dhaka info</title>
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
        <h1 id="divission">প্রাপ্তিসাধ্য টিকিট</h1>
      </div>
        
        
        
    
      <div class="content">
          <form action="abl_ticket.php" method="post">
          Form <select name="form_tic">
              <option value="ঢাকা">ঢাকা</option>
              <option value="খুলনা">খুলনা</option>
              <option value="চট্টগ্রাম">চট্টগ্রাম</option>
              <option value="সিলেট">সিলেট</option>
              <option value="বরিশাল">বরিশাল</option>
              <option value=">ময়মনসিংহ">ময়মনসিংহ</option>
              <option value="রংপুর">রংপুর</option>
              <option value="রাজশাহ">রাজশাহী</option>
                            

              
              </select>
              
              
              To <select name="to_tic">
              <option value="ঢাকা">ঢাকা</option>
              <option value="খুলনা">খুলনা</option>
              <option value="চট্টগ্রাম">চট্টগ্রাম</option>
              <option value="সিলেট">সিলেট</option>
              <option value="বরিশাল">বরিশাল</option>
              <option value="ময়মনসিংহ">ময়মনসিংহ</option>
              <option value="রংপুর">রংপুর</option>
              <option value=">রাজশাহী">রাজশাহী</option>
              
              </select>
              
              Day <select name="day_tic">
              <option value="শুক্রবার">শুক্রবার</option>
              <option value="শনিবার">শনিবার</option>
              <option value="রবিবার">রবিবার</option>
              <option value="সোমবার">সোমবার</option>
              <option value="মঙ্গলবার">মঙ্গলবার</option>
              <option value="বুধবার">বুধবার</option>
              <option value="বৃহস্পতিবার">বৃহস্পতিবার</option>
              
              
              
              </select>
              
              Train Name <select name="train_name_tic">
              <option value="Subarna Express">Subarna Express</option>
              <option value="Mohanagar Goduli">Mohanagar Goduli</option>
              <option value="Parabat Express">Parabat Express</option>
              <option value="Joyantika Express">Joyantika Express</option>
              <option value="Kapotaskh express">Kapotaskh express</option>
              <option value="Sundarban express">Sundarban express</option>
              <option value="Rangpur Express">Rangpur Express</option>
              
              
              </select><br/><br/><br/>
              
              Seat Catagory <select name="seat_catagory_tic">
              <option value="তাপানুকূল">তাপানুকূল</option>
              <option value="প্রথম শ্রেণী">প্রথম শ্রেণী</option>
              <option value="প্রথম শ্রেণী চেয়ার">প্রথম শ্রেণী চেয়ার</option>
              <option value="২য় শ্রেণী-শোভন চেয়ার">২য় শ্রেণী-শোভন চেয়ার</option>
              <option value="২য় শ্রেণী-শোভন">২য় শ্রেণী-শোভন</option>
               <option value="২য় শ্রেণী- সুলভ">২য় শ্রেণী- সুলভ</option>
              
              </select><br/><br/>
              Date <input type="text" name="date" placeholder="Example:15.01.2017"/>
              <input type="submit" name="tic_submit" value="see"/>
          
          </form>
          
          
          
              <?php
        
        if(isset($_POST['tic_submit']))
        {
            $train_name=$_POST['train_name_tic'];
            $train_date=$_POST['date'];
            $catagory=$_POST['seat_catagory_tic'];
            
            
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
             $ff=$row[2];
                }
            
            else if($catagory=="প্রথম শ্রেণ")
            {
               // echo $row[3];
                $ff=$row[3];
            }
            else if($catagory=="প্রথম শ্রেণী চেয়ার")
            {
                //echo $row[4];
                 $ff=$row[4];
            }
            else if($catagory=="২য় শ্রেণী-শোভন চেয়ার")
            {
               // echo $row[5];
                 $ff=$row[5];
            }
            else if($catagory=="২য় শ্রেণী-শোভন")
            {
                //echo $row[6];
                 $ff=$row[6];
            }
            else if($catagory=="২য় শ্রেণী- সুলভ")
            {
               // echo $row[7];
                 $ff=$row[7];
            }
               
                        

           ?>
          <div id="circrlar_print">
          <h2><?php echo $ff;?></h2>
          </div>
          <?php
            
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
</div>
</body>
</html>
