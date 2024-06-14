<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>McVitie's Memory Game</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css"/>
  <link rel="stylesheet" href="./toastr.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header class="header">

        <!-- Modal HTML -->

        <div class="modal fade bv" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 style="color:#000 !important;" class="modal-title fs-5" id="exampleModalLabel">Enter Your Email Participate in the Game</h4>  
                  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                  <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                </div>
                <div class="modal-body">
                    <form id="form2" style="margin-bottom:30px;">

                        <div class="row">
                            <div class="col-md-2">
                                <label for="exampleInputEmail1" class="form-label"></label>
                            </div>
                            <div class="col-md-8">
                                <input placeholder="Enter Your Email" type="text" id="email" name="email"  class="form-control"  aria-describedby="emailHelp">
                            </div>
                        </div>
                       
                    </form>    
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" id="formsubmission">Save changes</button>
                </div>
              </div>
            </div>
          </div>   

        <!--End Modal HTML -->

        <h1>McVitie's Memory Game</h1>
        <h4>Attempt to match two blocks with similar products at the fastest time</h4>
        <div class="controls">
            <div class="star-list">
                <i class="fas fa-star star-1 stars"></i>
                <i class="fas fa-star star-2 stars"></i>
                <i class="fas fa-star star-3 stars"></i>
                <span class="moves-container">
                <span class="moves-selector">0</span>
                Moves
                </span>
            </div>
            <div class="time-container">
                <div class="timer"></div>
                
                <div class="game-start-btn">Start Game</div>
            </div>
            <!-- <div class="refresh">
                <i class="fas fa-redo-alt"></i>
            </div> -->
        </div>
    </header>
    <section class="game-container">
        <ul class="deck">
            <li class="card">
                <div class="card-container">
                   
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                    
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
            <li class="card">
                <div class="card-container">
                    <div class="card-face front question">

                    </div>
                    <div class="card-face fab back">

                    </div>
                </div>
            </li>
        </ul>
    </section>
    <div class="win">
        <h1>Congratulations!</h1>
        <h3>- You won! -</h3>
        <!--<div class="winimage"></div>-->
        <p style="color: #000;">It took you about <span class="seconds">32</span> Seconds to complete the game <br> with <span class="moves">17</span> Moves and <span class="star">1</span>Points.</p>

        <a id="finish_game" class="btn btn-primary btn-sm" href="./index.php">Finish</a>
        
    </div>

    <!-- <div class="attempt">
        <h1>You have exceed maximium number of Attempt (3)</h1>
        <h3>- You won! -</h3>
        <button class="exit">Exit game!</button>
    </div> -->
<!-- partial -->

<script src="./jquery.js"></script>
    <script>
        $(document).ready(function() {
            var user_id  = localStorage.getItem('php_var');
            var user_attempts  = localStorage.getItem('score_var');
            if(user_id){
                // $('.attempt').hide();
            }else{
                $('#myModal').modal({backdrop:'static',keyboard:false},'show');
                // $('.attempt').hide();
            }

            

        });
    </script>
    <script>
        $(document).ready(function() {
           
            $("#finish_game").click(function(){

                localStorage.removeItem('score_var');
                window.location='./index.php';
            });
            

        });
    </script>
  <script src="./js/bootstrap.min.js"></script>  
  <script  src="./script.js"></script>
  <script src="./frontends.js"></script>
  <script src="./toastr.min.js"></script>

  <script>




  </script>

  <script>
    $(document).ready(function () {
        attemptContainer
        function IsEmail(theemail) {
        var regex =
          /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(theemail)) {
          return false;
        } else {
          return true;
        }
      }

      $("#formsubmission").click(function (e) {

        e.preventDefault();

        var theemail = $("#email").val();
        if (theemail == "") {
        
        toastrErrorMsg("Email address is required!");
        return false;
        }

        if (IsEmail(theemail) == false) {
            toastrErrorMsg("Your email is invalid");
            return false;
        }

         

         //ajax 
         $.ajax({
            type: "post",
                  url: './registration.php',
                  data: {
                    theemail : theemail
                  },

                  success: function(data){
                    var objdata = $.parseJSON(data); 

                    if(objdata.emailexists){

                        toastrErrorMsg("Email Already Exist");
                        return false;
                        
                    }else if(objdata.message){

                        localStorage.setItem('php_var',objdata.session_value);
                        // alert(objdata.message);

                        toastrSuccessMsg("Successfull");

                        $('#myModal').modal('hide');
                        $(".modal-backdrop").attr("style", "display:none");
                    }

                    
                        
                    },error: function(data){
                    console.log(data); 
                    }
         });

      });

    });
  </script>

 

</body>
</html>
