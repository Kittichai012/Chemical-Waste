
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Safey Waste</title>
<link rel="stylesheet" href="mainstyle.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Athiti:wght@200;300;400;500;600;700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Athiti:wght@200;300;400;500;600;700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Russo+One&display=swap" rel="stylesheet">
</head>
<body bgcolor="#FFFFFF">
    <div class="box">
        <ul>
         <li><div><hr></div></li>
        </ul>
     </div>
     <div class="box-main">
        <ul>
         <li><div><hr></div></li>
        </ul>
     </div>
        <div id="logo-main">
            <p><img src="https://upload.wikimedia.org/wikipedia/th/thumb/b/be/Seal_of_KMUTNB.svg/200px-Seal_of_KMUTNB.svg.png" width="100" align="left"></p>
        </div>
        
    <nav>
        <div class="container">       
            <div class="nav-con">        
              <h6>CHEMICAL MANAGEMENT</h6>
                <div class="logo"><a href="#"></a></div>
                <ul class="menu">
                    <li><a href="">หน้าหลัก</a></li>
                    <li><a href="">บริการ</a></li>
                    <li><a href="">เกี่ยวกับเรา</a></li>
                    <li><a href="">ติดต่อเรา</a></li>
                </ul>
            </div>
        </div> 
    </nav>
<hr color="#F5F5F5">
<style>
    p {
    text-align: left;
    }
</style>
   <div class="main-text">
        <p>Search Details : </Search></p>
        <div class="input-search">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M14.385 15.446a6.751 6.751 0 1 1 1.06-1.06l5.156 5.155a.75.75 0 1 1-1.06 1.06zM6.46 13.884a5.25 5.25 0 1 1 7.43-.005l-.005.005l-.005.004a5.25 5.25 0 0 1-7.42-.004" clip-rule="evenodd"/></svg>
           
            </div>
            <input type="search" name="search" id=""placeholder="search">
        </div>
        <br>
    </div>

 <hr color="#F5F5F5">

<style>
    li {
    text-align: left;
    }
    li {
    text-align: left;
    }
    li {
    text-align: left;
    }
    li {
    text-align: left;
    }
</style>
    <div class="main-text-1">
      <div class="top"><b href="#"></b>
        <ul class="insert">
            <li><b href="">ส่วนประกอบ    </b></li>
            <li><b href="">Picture   </b></li>
            <li><b href="">ประเภทสาร   </b></li>
            <li><b href="">ประโยชน์   </b></li>
        </ul>
       </div>
    </div>
    <style>
        h4 {
        text-align: left;
        }
    </style>
        <div class="space">
            <h4><br></h4>
        </div>

 <section class="content">
        <div class="container">

            <div class="flex-item-1"></div>

                <div class="content-con">
                    <div class="content-item"></div>
                </div>
        </div>
        
 <div class="background">
 <div class="move">  
    <div class="colum">
            <style>
            h1 {
            text-align: left;
            }
            </style>
                <div class="content-title">
                    <h1>INFORMATION!</h1>
                </div>

        <div id="todo-container">
            <div id="header">
                <h2>Name สารเคมี</h2>
                <h4>ป้อนชื่อของสารเคมีที่ต้องการทิ้ง<br>ของคุณ และ ส่งยกเลิกแก้ไขได้</h4>
                
            </div>
        
                <div id="todo-from">
                    <input  
                        type="text"
                        class ="input-item"
                        name = "input_box"
                        id = "input-box"
                    />

                 <button id="input-button" onclick="addTask()">Add</button>
                </div>  
                <br>

             <ul id="list-container"></ul>
        
            <hr color="#ebebeb" width="200rem">

            <div class="counter-container">
                <div id="task-counter">
                    <span id="complete-counter"></span>
                    <span id="uncompleted-counter"></span>
                </div>
            </div>
        </div>      
        <script type="text/javascript" src="script.js"></script>
                <div class="send-main">
                    <div class="main-number">               
                        <h3>จำนวนสาร</h3>
                        <h5>ป้อนจำนวนของสารเคมีที่ทิ้งไป<br> ของคุณ และ ส่ง ป้อนได้เพียง<br>เป็นตัวเลขเท่านั้น</h5>
                        
                    </div>   
                        <form action="" method="post">
                            <input type="number" min="0" id="จำนวนสาร">
                            <button type="submit" onclick="mysum()"onclick>Send</button> 
                        </form>
                </div> 

                <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script>
            var mysum = function(){
            var n1 = +$('#จำนวนสาร').val();          
            alert("sum = "+(n1/100));       
            }
        </script>
        </div>
        </div> 
        </div>
        
        <div class="under">
            <hr color="#000000">
        </div>
    </body>
</html>
