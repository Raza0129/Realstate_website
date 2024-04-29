
    <?php
    include("dbconfig.php");
    if(isset($_POST["send"])){
        $fname =  $_POST["fname"];
        $lname =  $_POST["lname"];
        $num =  $_POST["number"];
        $email =  $_POST["email"];
        $message =  $_POST["message"];

            $query = "INSERT INTO `allahtawakal`(`fname`, `lname`, `number`, `email`, `message`) VALUES ('$fname','$lname','$num','$email','$message')";
            $result = mysqli_query($conn, $query);

            if($result){
                echo "Thank you for give me a feedback";
            }else
            {
                echo "signup failed".conn->error;
            };
        }

    include("header.php");
    ?>
    <div class="cont">
        <div class="img">
        
    </div>
       
    </div>
    <div class="content-box">
            <h3>Conatct US</h3>
        </div>
   



      <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form">
                    <h4>GET IN TOUCH</h4>
                    </div>
                    <div class="form1">
                    <form action="" method="post">
                        <input type="text" placeholder="First Name" class="form-control" name="fname">
                        <input type="text" placeholder="Last Name" class="form-control" name="lname">
                        <input type="number" name="number" id="num" placeholder="Phone Number" class="form-control">
                        <input type="email" placeholder="Email" class="form-control" name="email">
                        <textarea name="message" id="" placeholder="Message" class="form-control" rows="4"></textarea>
                        <button class="form-control" name="send" style="background-color: gray;">Submit</button>
                        <!-- <input type="button" value="Submit" name="Send" class="form-control" style="background-color: gray;color: white;"> -->
                    </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form">
                        <h4>CONTACT DETAILS</h4>
                    </div>
                    <div class="form1">
                                    <div class="single-item3">
                                <div class="icon-box2"><span><i class="fa fa-phone" ></i></span></div>
                            <div class="text4"><h5><b>Call Us:</b></h5></div>

                            <div class="text5"><b><a href="tel:+92 336 8238874" style="color: black;text-decoration: none;">+92 336 8238874</a></b></div>
                            </div>
                            <br>    
                                    <div class="single-item3">
                                <div class="icon-box2"><span><i class="fa-brands fa-whatsapp" ></i></span></div>
                            <div class="text4"><h5><b>WhatsApp:</b></h5></div>

                            <div class="text5"><b><a href="/" style="color: black; text-decoration: none;">+92 336 8238874</a></b></div>
                            </div>
                            <br>
                                    <div class="single-item3">
                                <div class="icon-box2"><span><i class="fa-regular fa-envelope"></i></span></div>
                            <div class="text4"><h5><b>Email:</b></h5></div>

                            <div class="text5"><b><a href="mailto:info@aliraza129bajwa@gmail.com" style="color: black;text-decoration: none;">info@aliraza129bajwa@gmail.com</a></b></div>
                            </div>
                            <br>
                                    <div class="single-item3">
                                <div class="icon-box2"><span><i class="fa-solid fa-location-dot" ></i></span></div>
                            <div class="text4"><h5><b>Address:</b></h5></div>

                            <div class="text5"><b><a href="" style="color: black; text-decoration: none;">Office No. 201, Al Attar Business Center, Al Barsha, Sheikh Zayed Road, Dubai, UAE.</a></b></div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
      </div>
<!-- start icon bar -->
<!-- <div class="container-fluid" style="background-color: black"> -->
    <!-- <div class="container"> -->
        <div class="ic1" >
    <div class="row">
            <div class="icon-box3">
                 <span><a href="https://www.facebook.com/signatureluxuryindubai/"><i class="fa-brands fa-facebook" ></i></a></span></div>
        <div class="icon-box3"> 
            <span><a href="https://www.youtube.com/channel/UClmFIddkOIOcILHX6oZjnNw"><i class="fa-brands fa-youtube"></i></a></span></div>

        <!-- </div> -->
        <div class="icon-box3">
             <span><a href="https://www.instagram.com/signatureluxuryrealestate/"><i class="fa-brands fa-instagram"></i></a></span></div>
        
        </div>
    </div>
</div>
<!-- end icon bar -->

<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.7947986337917!2d55.18123707516048!3d25.108806677768012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b5036cb9e93%3A0x30e49d01d508fbfa!2sSignature%20luxury%20real%20estate!5e0!3m2!1sen!2s!4v1711181526469!5m2!1sen!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



      <?php
      include("footer.php");
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>