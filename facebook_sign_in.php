<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>ALTMARKIT SOCIAL</title>
      <!-- =============== VENDOR STYLES ===============-->
      <!-- FONT AWESOME-->
      <link rel="stylesheet" href="cms-assets/css/font-awesome.css"/>
      <link rel="stylesheet" href="cms-assets/css/font-awesome.min.css"/>
      <link rel="stylesheet" href="cms-assets/css/bootstrap.css" />
      <link rel="stylesheet" href="cms-assets/css/main.css">
            <style type="text/css">
        

    
    .row {
    display: flex;
    flex-wrap: wrap;
    }
    .item .img:after
  {
    content: " ";
    display: block;
    position: relative;
    top: 30px;
    background: #cfcfcf;
    width: 80%;
    height: 1px;
    margin:0 auto;
  }

.item .content1:after
{
    content: " ";
    display: block;
    position: relative;
    top: 30px;
    /*background: #cfcfcf;*/
    width: 100%;
    height: 1px;
}
.item .content1
{
    padding: 40px 30px 0 30px;
    margin: 0;
    font-size: 15px;
    font-weight: 100;
    line-height: 24px;
    /* color: #414141; */
    letter-spacing: 0.03em;
    text-align: left;
}

.item p img
{
    max-width:100%;
    padding: 0px;
    margin-top:0px;
}

.item img
{
    max-width:100%;
    padding: 20px 40px 0 40px;
    margin-top:40px;
    width: 210px;
}

    .masonry { /* Masonry container */
    column-count: 3;
    column-gap: 1em;
}

.item { /* Masonry bricks or child elements */
    list-style: none;
    margin: 10px;
    background: #fff;
    -webkit-box-shadow: 0 2px 7px 2px #d2d2d2;
    -moz-box-shadow: 0 2px 7px 2px #d2d2d2;
    box-shadow: 0 2px 7px 2px #d2d2d2;
    border-radius: 10px;
    cursor: pointer;
    display: inline-block;
    margin: 0 0 1em;
    width: 100%;
    overflow:hidden;
    position: relative;
}


.item:hover
{
    box-shadow: 4px 4px 12px 0 #ccc;
}
    .item {
    display: inline-block;
    background: #fff;
    margin: 0 0 1.5em;
    /*padding-bottom: 50px;*/
    width: 100%;
   box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-shadow: 2px 2px 4px 0 #ccc;
}
.switch {
  position: absolute;
  display: inline-block;
  width: 50px;
  height: 25px;
  right: 15px;
  top:15px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .3s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 19px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
.rev small{
   text-decoration: underline;
   font-weight: bold;
  font-size: 15px
}

input:checked + .slider {
  background-color: #f17455;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.sm{
      font-size: 120%;
}
.ch{
  float: left;
}

input[type=checkbox] {
    display: none;
}
input[type=checkbox] + label {
    display: inline-block;
    padding: 0 0 0 0px;
    background: url(img/uncheck.png) no-repeat;
    height: 28px;
    width: 28px;
    background-size: 100%;
    vertical-align: middle;
}
input[type=checkbox]:checked + label {
    background: url(img/check.png) no-repeat;
    height: 28px;
    width: 28px;
    display: inline-block;
    background-size: 100%;
    vertical-align: middle;
}

    @media only screen and (min-width: 900px) {
    .masonry {
        -moz-column-count: 3;
        -webkit-column-count: 3;
        column-count: 3;
    }
}   
    @media only screen and (min-width: 700px) and (max-width: 768px) {
    .masonry {
        -moz-column-count: 2;
        -webkit-column-count: 2;
        column-count: 2;
    }
}
@media only screen and (min-width: 1100px) {
    .masonry {
        -moz-column-count: 3;
        -webkit-column-count: 3;
        column-count: 3;
    }
}
       </style>
         

   </head>
   <body>
      <div class="FiHD">
      <!-- top navbar-->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
         <div class="navbar-header">
            <img src="cms-assets/img/VL.png" alt="" class="img-responsive" style="width: 40px; margin-top: 12px;">
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
         </button>
         <!-- <ul class="nav navbar-nav collapse navbar-collapse" id="navbarSupportedContent">
            <li><a href="Dashboard/index">Dashboard</a></li>
         </ul> -->

        </div>
      </nav>
      <!-- sidebar-->
<section>
            <!-- Page content-->
            <div class="content-wrapper">
            <div class="panels marginbtm-10">
              <div class="main-heading">
                  <span class="fontcolor-primary text-bold fontsize18"> Social Integration </span>
                  <?php //if ($this->session->flashdata('message')) { ?>
                  <div class="text-center">
                    <!-- <span style="background:#759675; padding:5px; color:#fff; width:297px;"></span> -->
                  </div>
                  <?php //} ?>
              </div>
            </div>

            <div class="row ">
                <form action="Marketing/integration" method="post" style="width: 100%;">
                  <!-- social Board Area -->
                  <div class="col-lg-6 col-md-6">
                        <div class="panels marginbtm-10">
                            <div class="main-heading">
                                   <fieldset>
                                      <div class="col-md-4" style="margin-top: 10px;">
                                        <img src="cms-assets/img/Facebookicon.png">&nbsp;&nbsp;<label class="control-label" for="Ws_Bing_Web"> Facebook Connection:</label>
                                      </div>
                                      <div class="col-md-2">
                                        <label class="switch">
                                          <input type="checkbox" name="facebook" id="facebook" value="1">
                                          <span class="slider round"></span>
                                        </label>
                                      </div>
                                      <div class="col-md-6" id="facebook_company_page" <?php if (empty($facebook_data['facebook_company_list'])) { ?> style="display: none;" <?php }else{ ?> style="display: block;" <?php } ?> >
                                        <select name="facebook_company_page" class="form-control">
                                          <option disabled="true"> Select Page </option>
                                          <?php 
                                            $facebook_company_list = unserialize($facebook_data['facebook_company_list']);
                                            foreach ($facebook_company_list as $value) {
                                              if ($value['id'] == $facebook_data['facebook_company_id']) {
                                          ?>
                                          <option value="<?php echo $value['id']; ?>" selected><?php echo $value['name']; ?></option>
                                          <?php }else{ ?>
                                          <option value="<?php echo $value['id']; ?>" ><?php echo $value['name']; ?></option>
                                          <?php } } ?>
                                        </select>
                                      </div>
                                    </fieldset>
                                    <br>
                                    
                            </div>
                        </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    
                  </div>
                  <?php if (!empty($linkedin_data['linkedin_company_list']) || !empty($facebook_data['facebook_company_list'])) { ?>
                  <div class="row col-md-12"> 
                      <div class="col-lg-6 col-md-6">
                          <div class="panels marginbtm-10">
                              <div class="main-heading">
                                  <div class="text-align">
                                      <button type="submit" class="btn  btn-color FiHD-secondarybg" id="btnSubmit" value="Validate">Update</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php } ?>

                </form>                  
            </div>
        </div>
</section>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
$('#facebook').click(function() {
    if($('#facebook').prop('checked')) {
    window.location = "facebook-auth.php";
    }else {
        swal({
         title: "Are you sure?",
         text: "Once disconnected, your Post will not posted on Facebook!",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
           $.ajax({
           type: "POST",
                url: "Marketing/facebook_remove_credentials",
                async : false,
                data:{'reqtype':'remove_facebook_user'},
                success : function(data){
               }
           });
           swal("Poof! Your Successfully Disconnected with Facebook Account!", {
             icon: "success", 
           });
           myVar = setTimeout(alertFunc, 2000);
           
         } else {
            $('#facebook').prop('checked', true);
         }
       });
    }   
});


function alertFunc() {
  window.location.reload(true);
}

</script>