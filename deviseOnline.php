<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kam-webagentur</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- Google fonts-->
    <link href="./css/Montserrat.css" rel="stylesheet" type="text/css" />
    <link href="./css/DroidSerif.css" rel="stylesheet"
        type="text/css" />
    <link href="./css/Roboto.css" rel="stylesheet" type="text/css" />
    <link href="./css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/form.css" rel="stylesheet" />


    <!-- Bootstrap core JS-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

        <!-- Font Awesome icons (free version)-->
        <script src="js/all.js" crossorigin="anonymous"></script>
    <script src="./js/translate.js"></script>
    <script src="./js/personaliser.js"></script>
    
    
    <script src="https://unpkg.com/web-vitals@0.2.4/dist/web-vitals.es5.umd.min.js"></script>

 
    <style>
        .masthead{
            background-image:url("../assets/img/2-min.png") !important;
        }
    </style>

<!-- sideBar-->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="css/devis.css">
<script>
addEventListener('DOMContentLoaded', function() {
  webVitals.getCLS(console.log);
  webVitals.getFID(console.log);
  webVitals.getLCP(console.log);
});
</script>
</head>


<script>
      function next(x){
            var y=x-1;
            var test=false;
            console.log("this is :"+y);

            if($("#next"+y).parent().children('div').children('div').hasClass('selected')){
                if(($("#next"+y).parent().children('div').children('div').hasClass('Q4Autre') && $('.Q4Autre').hasClass('selected')) || ($("#next"+y).parent().children('div').children('div').hasClass('Q8Autre') && $('.Q8Autre').hasClass('selected'))){ 
                    if($("#next"+y).parent().children('div').children('div').children('input[type=text]').val()==""){
                        test=false;
                        console.log("meeeeeeeeeeeeeeeee1");
                    }else{
                        test=true;
                        console.log("meeeeeeeeeeeeeeeee2");
                    }
                }else {
                    test=true;
                    console.log("meeeeeeeeeeeeeeeee3");
                }
            }else{
                if($("#next"+y).parent().children('div').hasClass('input')){
                    if($("#next"+y).parent().children('div').children('input[type=text]').val()!=""){
                        test=true;
                        console.log("meeeeeeeeeeeeeeeee7");
                    }else{
                        test=false;
                        console.log("meeeeeeeeeeeeeeeee8");
                    }
                }else{
                    test=false;
                    console.log("meeeeeeeeeeeeeeeee6");
                }          
            }
            if(test==true && x!=13){
                $('.fieldset'+y).addClass('d-none');
                $('.fieldset'+x).removeClass('d-none');
                $('#step'+x).addClass('active');
            }else   
                {

                    swal ( "Error" ,  "Diese Frage ist erforderlich!" ,  "error" );
                } 

    }  

 
    function previous(x){
        var y=x+1;
        $('.fieldset'+y).addClass('d-none');
        $('.fieldset'+x).removeClass('d-none');    
        
    }
   
    
  
</script>
<?php
    if(isset($_POST['submitButton']))
    {
        include('actionOnline.php');
       // header("Location: done.php");
       echo "<script>window.location.replace('done.php')</script>";
    }
?>

<body  onload="load('fr')"  >
<form action="deviseOnline.php" method="POST" name="form1" id="myForm" novalidate>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div class="card b-0">
                    <h1 class="heading">OnlineShop</h1><br/>
                    <ul id="progressbar" class="text-center">
                        <li class="active step0" id="step1" onclick="enable('1')"><span class="number">1</span></li>
                        <li class="step0" id="step2" onclick="enable('2')"><span class="number">2</span></li>
                        <li class="step0" id="step3" onclick="enable('3')"><span class="number">3</span></li>
                        <li class="step0" id="step4" onclick="enable('4')"><span class="number">4</span></li>
                        <li class="step0" id="step5" onclick="enable('5')"><span class="number">5</span></li>
                        <li class="step0" id="step6" onclick="enable('6')"><span class="number">6</span></li>
                        <li class="step0" id="step7" onclick="enable('7')"><span class="number">7</span></li>
                        <li class="step0" id="step8" onclick="enable('8')"><span class="number">8</span></li>
                        <li class="step0" id="step9" onclick="enable('9')"><span class="number">9</span></li>
                        <li class="step0" id="step10" onclick="enable('10')"><span class="number">10</span></li>
                        <li class="step0" id="step11" onclick="enable('11')"><span class="number">11</span></li>
                        <li class="step0" id="step12" onclick="enable('12')"><span class="number">12</span></li>
                        
                    </ul>
                    <fieldset class="fieldset1">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="onlineQ1" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="1-2">
                                <div class="card-block text-center radio Q1Autre " id="div1" onclick="enableInput('Q1')">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="jaLIEN" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ1" id="div1r1"  placeholder="" value="jaLIEN" class="form-control" hidden  >
                                </div>
                                <div class="card-block text-center radio " id="div2">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="nein" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ1" id="div1r1"  placeholder="" value="nein" class="form-control" hidden  >
                                </div>
                                <div class="form-group input autre">
                                <input type="text" id="Q1" name="onlineQ1text" placeholder="" class="form-control inputAutre">
                                </div> 
                             
                              
                            </div> 
                            <button type="button" id="next1" class="btn-block btn-primary mt-3 mb-1 " onclick="next(2)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                        </div>
                        


                    </fieldset>
                    <fieldset class="fieldset2 d-none" >
                        <div class="form-card">
                            <h5 id="name-label" data-tag="onlineQ2" class="sub-heading"></h5>
                        <div class="form-group input">
                            <input type="text"  name="onlineQ2" placeholder="" class="form-control"> 
                        </div> 
                            <button type="button" id="next2" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(3)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(1)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                      
                    </fieldset>
                    <fieldset class="fieldset3 d-none">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="onlineQ3" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="3-6">
                                <div class="card-block text-center radio" id="div3">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ3R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ3"   placeholder="" value="onlineQ3R1" class="form-control" hidden>
                             </div>
                                <div class="card-block text-center radio" id="div4">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="onlineQ3R2"  class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ3"   placeholder="" value="onlineQ3R2" class="form-control" hidden>
                              </div>
                                <div class="card-block text-center radio" id="div5">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="onlineQ3R3" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ3"   placeholder="" value="onlineQ3R3" class="form-control" hidden>
                               </div>
                               <div class="card-block text-center radio" id="div6">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="onlineQ3R4" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ3"   placeholder="" value="onlineQ3R4" class="form-control" hidden>
                               </div>

                            </div> 
                            <button type="button" id="next3" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(4)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(2)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                    </fieldset>

                    
                    <fieldset class="fieldset4 d-none">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="onlineQ4" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="7-11">
                                <div class="card-block text-center radio" id="div7">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ4R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ4"   placeholder="" value="onlineQ4R1" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div8">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="onlineQ4R2" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ4"   placeholder="" value="onlineQ4R2" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio" id="div9">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="onlineQ4R3" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ4"   placeholder="" value="onlineQ4R3" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio" id="div10">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="onlineQ4R4" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ4"   placeholder="" value="onlineQ4R4" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio Q4Autre" id="div11" onclick="enableInput('Q4')">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="onlineQ4R5" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ4"   placeholder="" value="onlineQ4R5" class="form-control"  hidden>
                                </div>
                                <div class="form-group input autre"><input type="text" id="Q4" name="onlineQ4text" placeholder="" class="form-control inputAutre"></div> 
                            </div> 
                            <button type="button" id="next4" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(5)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(3)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                    </fieldset>


                    <fieldset class="fieldset5 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="onlineQ5" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="12-16">
                                <div class="card-block text-center radio" id="div12">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ5R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ5"   placeholder="" value="onlineQ5R1" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div13">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="onlineQ5R2" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ5"   placeholder="" value="onlineQ5R2" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div14">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="onlineQ5R3" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ5"   placeholder="" value="onlineQ5R3" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div15">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="onlineQ5R4" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ5"   placeholder="" value="onlineQ5R4" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio Q5Autre" id="div16" onclick="enableInput('Q5')">
                                    <div class="image-icon">  <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="onlineQ5R5" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ5"   placeholder="" value="onlineQ5R5" class="form-control"  hidden>
                                </div>
                                <div class="form-group input autre"><input type="text" id="Q5" name="onlineQ5text" placeholder="" class="form-control inputAutre"></div> 

                            </div> 
                            <button type="button" id="next5" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(6)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(4)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                    </fieldset> 



                    <fieldset class="fieldset6 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="onlineQ6" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="17-18">
                                <div class="card-block text-center radio" id="div17">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ6R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ6"   placeholder="" value="onlineQ6R1" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div18">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="onlineQ6R2" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ6"   placeholder="" value="onlineQ6R2" class="form-control"  hidden>
                                </div>  
                            </div> 

                            <button type="button" id="next6" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(7)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(5)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                    </fieldset>



                    <fieldset class="fieldset7 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="onlineQ7" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="19-20">
                                <div class="card-block text-center radio " id="div19">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="ja" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ7"   placeholder="" value="ja" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div20">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="nein" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ7"   placeholder="" value="nein" class="form-control"  hidden>
                                </div>
                                
                            </div> 
                            <button type="button" id="next7" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(8)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(6)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                    </fieldset>



                    <fieldset class="fieldset8 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="onlineQ8" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios checkboxes" id="21-22">
                                <div class="card-block text-center radio " id="div21">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="ja" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ8"   placeholder="" value="ja" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div22">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="nein" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ8"   placeholder="" value="nein" class="form-control"  hidden>
                                </div>
                            </div> 
                            <button type="button" id="next8" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(9)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(7)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                    </fieldset>


                    <fieldset class="fieldset9 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="onlineQ9" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="23-24">
                                <div class="card-block text-center radio Q9Autre" id="div23" onclick="enableInput('Q9')">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ9R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ9"   placeholder="" value="onlineQ9R1" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio"  id="div24">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="nein" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ9"   placeholder="" value="nein" class="form-control" hidden >
                                </div>
                                <div class="form-group input autre">
                                   <input type="text" id="Q9" name="onlineQ9text" placeholder="" class="form-control inputAutre">
                                </div> 
                            </div> 
                            <button type="button" id="next9" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(10)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(8)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                    </fieldset> 



            
                    <fieldset class="fieldset10 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="onlineQ10" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="25-29">
                                <div class="card-block text-center radio " id="div25">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ10R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ10"   placeholder="" value="onlineQ10R1" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio " id="div26">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ10R2" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ10"   placeholder="" value="onlineQ10R2" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio " id="div27">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ10R3" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ10"   placeholder="" value="onlineQ10R3" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio " id="div28">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ10R4" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ10"   placeholder="" value="onlineQ10R4" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio"  id="div29">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="onlineQ10R5" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ10"   placeholder="" value="onlineQ10R5" class="form-control" hidden >
                                </div>
                              
                            </div> 
                            <button type="button" id="next9" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(11)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(8)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                    </fieldset> 


             
                    <fieldset class="fieldset11 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="onlineQ11" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="30-34">
                                <div class="card-block text-center radio " id="div30">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ11R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ11"   placeholder="" value="onlineQ11R1" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio " id="div31">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ11R2" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ11"   placeholder="" value="onlineQ11R2" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio " id="div32">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ11R3" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ11"   placeholder="" value="onlineQ11R3" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio " id="div33">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="onlineQ11R4" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ11"   placeholder="" value="onlineQ11R4" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio"  id="div34">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="onlineQ11R5" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="onlineQ11"   placeholder="" value="onlineQ11R5" class="form-control" hidden >
                                </div>
                              
                            </div> 
                            <button type="button" id="next9" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(12)">Suivant<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(8)"><i class="fas fa-long-arrow-alt-left left"></i>Précédent</button>
                        </div>
                    </fieldset> 

                    <fieldset class="fieldset12 d-none" >
                        <div class="form-card">
                            <h5 class="sub-heading mb-4" data-tag="globalQ12"></h5>
                            <div class="form-group input"> <label class="form-control-label" data-tag="name"></label> <input type="text"  name="name" placeholder="" class="form-control" > </div>
                            <div class="form-group input"> <label class="form-control-label" data-tag="vorname"></label> <input type="text"  name="vorname" placeholder="" class="form-control" > </div>
                            <div class="form-group input"> <label class="form-control-label" data-tag="NomCompagnie"></label>  <input type="text"  name="unternehmens" placeholder="" class="form-control" > </div>
                            <div class="form-group input"> <label class="form-control-label" data-tag="adresse"></label> <input type="text" name="adresse" placeholder="" class="form-control" > </div>
                            <div class="form-group input"> <label class="form-control-label"  data-tag="telefon"></label> <input type="tel"  name="Telefon" placeholder="" class="form-control" > </div>
                            <div class="form-group input"> <label class="form-control-label" data-tag="email"></label> <input type="email"  name="Email" placeholder="" class="form-control" > </div>
                            <button type="submit" id="next12" name="submitButton" class="btn-block btn-primary mt-3 mb-1 next mt-4" >Senden<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(12)"><i class="fas fa-long-arrow-alt-left left"></i>
Précédent</button>
                        </div>
                    </fieldset>
                    <fieldset class="fieldset13 d-none"  id="fieldset13">
                            <div class="form-card">
                                <h5 class="sub-heading mb-4">Success!</h5>
                                <p class="message" data-tag="QUESTION13"></p>
                                <div class="check"> <img class="fit-image check-img" src="https://i.imgur.com/QH6Zd6Y.gif"> </div>
                            </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
   
</form>
    <script>
        $(document).ready(function(){
            $('#myForm input[type="text"]').blur(function(){
                if(!$(this).val()){
                    $(this).addClass("error");
                } else{
                    $(this).removeClass("error");
                }
            });
        });

        function disableAll() {
            for (let allfieldset = 1; allfieldset < 14; allfieldset++) {
                $(".fieldset"+allfieldset).addClass("d-none");
            }
        }
        function enable(x){
             
            if($('#step'+x).hasClass('active')){
                disableAll(); 
                $('.fieldset'+x).removeClass('d-none');
            }
            
        
        }
        function enableInput(a){
            console.log(a);
            $("#"+a).parent().removeClass('autre');   
        }






        $('.card-block').click(function() {     
            
            console.log(this.id);
            var myid="#"+this.id;
            
            var id=$(myid).parent().attr('id');
            console.log(id);

            if(!$("#Q1").parent().hasClass('autre') && $(".Q1Autre").hasClass('selected') && this.id!="div1"){
                $("#Q1").parent().addClass('autre');
              //  $("#Q1").val('');
            }

            if(!$("#Q4").parent().hasClass('autre') && $(".Q4Autre").hasClass('selected') && this.id!="div1"){
                $("#Q4").parent().addClass('autre');
               // $("#Q4").val('');
            }

            
            if(!$("#Q5").parent().hasClass('autre') && $(".Q5Autre").hasClass('selected') && this.id!="div1"){
                $("#Q5").parent().addClass('autre');
              //  $("#Q5").val('');
            }
            if(!$("#Q9").parent().hasClass('autre') && $(".Q9Autre").hasClass('selected') && this.id!="div1"){
                $("#Q9").parent().addClass('autre');
               // $("#Q9").val('');
            }



            console.log(myid);
       /*      if($(".Q8Autre").hasClass('selected') && this.id=="div32"){
                $("#Q8").parent().addClass('autre');
                $("#Q8").val('');
                
            }
              */   

            
            if(!$(myid).parent().hasClass('checkboxes')){
                    if(id.indexOf('-')>1){
                        for (let i=parseInt(id.substring(0,id.indexOf('-')));i<=parseInt(id[id.indexOf('-')+1]+id[id.indexOf('-')+2]);i++){
                            console.log(i);
                            $("#div"+i.toString()).children("input").removeAttr('checked', false);
                            $("#div"+i.toString()).removeClass('selected');
                        }
                    }
                    else{
                            for (let i=parseInt(id.substring(0,id.indexOf('-')));i<=parseInt(id.substring(id.indexOf('-')+1,id.length));i++){
                                console.log(i);
                                $("#div"+i.toString()).children("input").removeAttr('checked', false);
                                $("#div"+i.toString()).removeClass('selected');
                            }
                            
                    }
                    $(myid).children("input").attr('checked', true);
                    $(myid).addClass('selected');       
            }else {
                if($(myid).hasClass('selected')){
                    $(myid).children("input").removeAttr('checked', false);
                    $(myid).removeClass('selected');
                }else
                {
                    $(myid).children("input").attr('checked', true);
                    $(myid).addClass('selected');  
                }
            }
            
            //console.log($(myid).children("input"));
            
          
        }); 
        
          




    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>    