 <!-- Navigation-->
 <style>
.navbar-dark {
    background-color: #212529 !important;
}

#mypage {
    padding: 0px !important;
}
.myimg{
    height: 50px !important;
}
#mainNav{
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}
.dropdown-menu {
min-width: 5rem !important;
}
.imgFlag{
    width: 50px !important;
}
 </style>
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
     <div class="container-fluid mx-5">
         <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="myimg" src="assets/img/webaganturelogowithout.png"
                 width="130px" height="50px" alt="" /></a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
             data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
             aria-label="Toggle navigation">
             Menu
             <i class="fas fa-bars ml-1"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav text-uppercase ml-auto">
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top" data-tag="Home"></a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#uberUns" data-tag="uberUns"></a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#homePage" data-tag="HomePage"></a>
                 </li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Apps" data-tag="Apps"></a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#onlineShop"
                         data-tag="OnlineShop"></a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#platforme" data-tag="Platform"></a>
                 </li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact" data-tag="kontakt"></a></li>
           
           <!--      <li class="nav-item">
                    <select name="langage" id="langage" class="form-control" onchange="load(this.options[this.selectedIndex].value)">
                        <option value="de">DE</option>
                        <option value="fr">FR</option>
                        <option value="en">EN</option>
                    </select>
                </li> -->
                <li class="nav-item">
                <div class="dropdown">
  <a class="nav-link" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-globe-africa fa-2x"></i>
</a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
    <a class="dropdown-item" type="button" onclick="load('de')">
<img class="imgFlag" src="./assets/img/germanyflagxs.png" height="25px" alt="Germany">
</a>
    <a class="dropdown-item" type="button" onclick="load('fr')">
    <img class="imgFlag" src="./assets/img/franceflagxs.png" height="25px" alt="France">
</a>
    <a class="dropdown-item" type="button" onclick="load('en')">
    <img class="imgFlag" src="./assets/img/ukflagxs.png" height="25px" alt="United Kingdom">
</a>
  </div>
</div>
                </li>
  
             </ul>
         </div>
     </div>
 </nav>