<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>HomePage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">
   


</head>
<body>
  <main>
    
        <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
        <img class="logo" src="./images/logo1.png">
    </ul>

   <form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
      <img class="banner" src="./images/PIC2.png">
      <!-- <h1 class="banner">Safe And Reliable <span>Logistics</span> Sloutions</h1> -->
        <h1>Services We Offer</h1>
        <header>
            <img src="./images/cargovan5.jpg">
            <h1>Land Transport</h1>
            <p>The sea freight service has grown considerably in recent years. We spend timetting to know your processes to.</p>
        </header>
        <header>
            <img src="./images/cargoship2.jpg">
            <h1>Ship Transport</h1>
            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
        </header>
        <header>
            <img src="./images/cargoplane.jpg">
            <h1>Air Transport</h1>
            <p>The sea freight service has grown considerably in recent years. We spend timetting to know your processes to.</p>
        </header>
        <h1 class="h12">Get Your Quote For Free</h1>
        <div class="quote" style="background-image: url('./images/quote4.jpg');">
        <form>
            <fieldset>
                <legend>Get Your Quote For Free:</legend>
                <label for="fname"></label>
                <input class="fname" type="text" id="fname" name="fname" placeholder="Name">

                <label for="email"></label>
                <input type="email" id="email" name="email"  placeholder="Email"><br><br>

                <label for="Contact Number"></label>
                <input type="Contact Number" id="contactnumber" name="Contact Number"  placeholder="Contact Number">

                <label for="citysender"></label>
                <select class="sender" id="sender" name="sender" placeholder="sender">
                    <option value="sender">Sender-City</option>
                    <option value="Andheri">Andheri</option>
                    <option value="Wadala">Wadala</option>
                    <option value="Dadar">Dadar</option>        
                </select>

                <label for="cityreceiver"></label>
                <select class="receiver" id="receiver" name="receiver" placeholder="receiver">
                    <option value="Receiver">Receiver-City</option>
                    <option value="Andheri">Andheri</option>
                    <option value="Wadala">Wadala</option>
                    <option value="Dadar">Dadar</option>        
                </select>

                <label for="freight"></label>
                <select class="freight" id="freight" name="freight" placeholder="Freight Type">
                    <option value="Freight Type">Freight Type</option>
                    <option value="Truck">Truck</option>
                    <option value="Airways">Airways</option>
                    <option value="Seaways">Seaways</option>
                </select>
                
                <label for="Weight"></label>
                <input type="text" class="Weight" id="Weight" name="Weight" placeholder="Weight"><br>

                <label for="height"></label>
                <input class="height" type="height" id="height" name="height" placeholder="Height">

                <label for="width"></label>
                <input class="width" type="width" id="width" name="width" placeholder="Width">

                <label for="length"></label>
                <input class="length" type="length" id="length" name="length" placeholder="Length"><br><br>

                <input type="submit" class="submit" value="Request A Quote">
                </fieldset>
        </form>
        </div>
        <h1>About Us</h1>
        <article class="about">
            <button onclick="myFunction()">OUR MISSION</button>         
            <button onclick="Vision()">OUR VISION</button>
            <button onclick="Value()">OUR VALUES</button>
            <div id="myDIV">We meet our customersâ€™ demands for a personal and professional service by offering innovative supply 
            chain solutions for sea, air, and road transportation.</div>
            <button id="read">Read more</button>
        </article>
        <h1>Our Testimonials</h1>
  
  <section class="home">
     <div class="slider">
        <div class="slide active" style="background-image: url('./images/test1.png')">
            <div class="container">
            </div>
        </div>
        <div class="slide" style="background-image: url('./images/test22.png')">
            <div class="container">
            </div>
        </div>
        <div class="slide" style="background-image: url('./images/test3.png')">
            <div class="container">
            </div>
        </div>
     </div>         
   
    <!-- controls  -->
    <div class="controls">
        <div class="prev"><</div>
        <div class="next">></div>
    </div>

    <!-- indicators -->
    <div class="indicator">
    </div>

    </section>
    <h1>Blogs Post</h1>
    <article class="blog1">
        <img class="blog1" src="./images/blog1.jpg"> 
    <!--<h1 class="date">14</h1> -->   
     <h1 class="title">Choose an appropriate vehicle for Transportation</h1>
     <p class="blogs">If you want to deliver your cargo successfully, it is very important to choose an appropriate vehicle first. In this article, we will show you how you can..</p>
    </article>
    <article class="blog1">
         <img class="blog1" src="./images/blog2.jpg"> 
         <h1 class="title">Repairing a Delivery Truck:Advice from Experts</h1>    
         <p class="blogs">Equipment types are extensive and our well-maintained fleet and award-winning drivers can offer proper trucking services. But from...</p>  
    </article>
    <h1>Maps</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15077.35196593116!2d72.81609734999999!3d19.136676849999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1605013409716!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="fotter">
        <h1 class="fotter">We Understand The Importance Approaching Each Work!</h1>
        <h1 class="fotter1">+91 9167304107</h1>
        <!-- <p class="fotter">Company</p> -->
        <section class="fotter">
            <h1 class="fotter2">Company</h1>
            <a href="#" class="fotter">Home</a><br>
            <a href="#" class="fotter">About us</a><br>
            <a href="#" class="fotter">Press And Blog</a><br>
            <a href="#" class="fotter">Services</a><br>
        </section>
        <section class="fotter">
            <h1 class="fotter2">Opening Hours</h1>
            <a href="#" class="fotter">Monday 11am-7pm</a><br>
            <a href="#" class="fotter">Tuesday-Friday 11am-8pm</a><br>
            <a href="#" class="fotter">Saturday 10am-6pm</a><br>
            <a href="#" class="fotter">Sunday 11am-6pm</a><br>
        </section>
        <section class="fotter">
            <h1 class="fotter2">Address</h1>
            <a href="#" class="fotter">Washington,</a><br>
            <a href="#" class="fotter">USA 6036 Richmond hwy.,</a><br>
            <a href="#" class="fotter"> Alexandria, </a><br>
            <a href="#" class="fotter">VA,2230</a><br>
        </section>
    </div>
    
</main>
<script>
function myFunction() {
  document.getElementById("myDIV").innerHTML = "We meet our customers demands for a personal and professional service by offering innovative supply chain solutions for sea, air, and road transportation."
}
function Vision() {
  document.getElementById("myDIV").innerHTML = "Procedures, values, and attitudes are crucial to our reputation - not to mention the success we enjoy. We focus on possibilities, not limitations."
}
function Value() {
  document.getElementById("myDIV").innerHTML = "We have a goal-oriented vision that clearly identifies where we’re going and how we’re going to get there. We continue to further develop our position."
}
 const slides=document.querySelector(".slider").children;
 const prev=document.querySelector(".prev");
 const next=document.querySelector(".next");
 const indicator=document.querySelector(".indicator");
 let index=0;


   prev.addEventListener("click",function(){               
       prevSlide();
       updateCircleIndicator(); 
       resetTimer();
   })

   next.addEventListener("click",function(){
      nextSlide(); 
      updateCircleIndicator();
      resetTimer();
      
   })

   // create circle indicators
    function circleIndicator(){
        for(let i=0; i< slides.length; i++){
          const div=document.createElement("div");
                div.innerHTML=i+1;
                div.setAttribute("onclick","indicateSlide(this)")
                div.id=i;
                if(i==0){
                  div.className="active";
                }
               indicator.appendChild(div);
        }
    }
    circleIndicator();

    function indicateSlide(element){
         index=element.id;
         changeSlide();
         updateCircleIndicator();
         resetTimer();
    }
     
    function updateCircleIndicator(){
      for(let i=0; i<indicator.children.length; i++){
        indicator.children[i].classList.remove("active");
      }
      indicator.children[index].classList.add("active");
    }

   function prevSlide(){
     if(index==0){
      index=slides.length-1;
     }
     else{
      index--;
     }
     changeSlide();
   }

   function nextSlide(){
      if(index==slides.length-1){
        index=0;
      }
      else{
        index++;
      }
      changeSlide();
   }

   function changeSlide(){
           for(let i=0; i<slides.length; i++){
             slides[i].classList.remove("active");
           }

       slides[index].classList.add("active");
   }

   function resetTimer(){
      // when click to indicator or controls button 
      // stop timer 
      clearInterval(timer);
      // then started again timer
      timer=setInterval(autoPlay,4000);
   }
 
  
  function autoPlay(){
      nextSlide();
      updateCircleIndicator();
  }

  let timer=setInterval(autoPlay,4000);</script>

</body>
</html>


