<!DOCTYPE html>
<html>
<head>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/watteva-126x128.png" type="image/x-icon">
    <meta name="description" content="">

    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/theme/css/style.css">
  </head>
<body>



<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-head">
            <a class="navbar-brand" href="../../../library/private/estate_agency/index.php">ESTATE AGENCY</a>
        </div>
        <div class="navbar-head">
            <a class="navbar-brand" href="../../../library/private/property/index.php">PROPERTY</a>
        </div>
        <div class="navbar-head">
            <a class="navbar-brand" href="../../../library/private/room/index.php">ROOM</a>
        </div>
        <div class="navbar-head">
            <a class="navbar-brand" href="../../../library/private/user/index.php">USER</a>
        </div>
    </div>
</div>

<section class="mbr-section" id="form1-w" style="background-color: rgb(250, 250, 250); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">UPDATE PROPERTY</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <form method="post" data-form-title="UPDATE-ESTATE-AGENCY" action="">
                        <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                <!--
                                <?php if(isset($_SESSION['ERROR']['MAIDENNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['MAIDENNAME']; ?> </div> <?php } ?>
                                -->
                                <label class="form-control-label" for="form1-w-name">ACCOMMODATION<span class="form-asterisk">*</span></label>
                                <select class="form-control" name="suburb" required="" class="form-control" id="form1-w-name"/>
                                      <option value="NULL">Accommodation......</option>
                                      <option value="HOSTEL">Hostel</option>
                                      <option value="STUDENT">Student</option>
                                      <option value="WORKER">Worker</option>
                                      <option value="WORKER/STUDENT">Worker/Student</option>
                                      <option value="OTHER">Other</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">Property Name<span class="form-asterisk">*</span></label>
                                  <input class="form-control" type="text" name="propname" placeholder="Property Name" required="" lass="form-control" id="form1-w-name" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">Date On Market<span class="form-asterisk">*</span></label>
                                  <input class="form-control" type="date" name="d_on_m" placeholder="Date On Market" required="" lass="form-control" id="form1-w-name" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">Date Off Market<span class="form-asterisk">*</span></label>
                                  <input class="form-control" type="date" name="d_off_m" placeholder="Date Off Market" required="" lass="form-control" id="form1-w-name" />
                                </div>
                            </div>
                          
                          <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                    <!--
                                    <?php if(isset($_SESSION['ERROR']['TITLE'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['TITLE']; ?> </div> <?php } ?> 
                                    -->
                                     <label class="form-control-label" for="form1-w-name">Type<span class="form-asterisk">*</span></label>
                                    <select class="form-control" name="country" required="" class="form-control" id="form1-w-name"/>
                                      <option value="NULL">Type......</option>
                                      <option value="Mr">HOUSE</option>
                                      <option value="Mrs">APARTMENT</option>
                                      <option value="Ms">COMMERCIAL</option>
                                    </select>
                                </div>
                          </div> 
                          <hr class="col-xs-12">
                             <div class="row">
                                 <div class="col-xs-12 text-xs-center">
                                     <h3 class="mbr-section-title display-6">FACILITY</h3>
                                 </div>
                             </div>
                             <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">Item Name<span class="form-asterisk">*</span></label>
                                  <input class="form-control" type="text" name="itemname" placeholder="Name" required="" lass="form-control" id="form1-w-name" />
                                </div>
                            </div>
                          <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">Size<span class="form-asterisk">*</span></label>
                                  <input class="form-control" type="number" name="size" placeholder="Size" required="" lass="form-control" id="form1-w-name" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">Quantity<span class="form-asterisk">*</span></label>
                                  <input class="form-control" type="number" name="qty" placeholder="QTY" required="" lass="form-control" id="form1-w-name" />
                                </div>
                            </div>
                          <div class="col-xs-12">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">Supplimental Information<span class="form-asterisk">*</span></label>
                                  <textarea class="form-control" type="text" rows="5" name="supplimentalinfo" placeholder="Description" required="" class="form-control" id="form1-w-name"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">Description<span class="form-asterisk">*</span></label>
                                  <textarea class="form-control" type="text" rows="5" name="description" placeholder="Description" required="" class="form-control" id="form1-w-name"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4" ><button type="submit" class="btn btn-primary">ADD MORE FACILITIES</button></div>
                            <hr class="col-xs-12">
                             <div class="row">
                                 <div class="col-xs-12 text-xs-center">
                                     <h3 class="mbr-section-title display-6">ADDRESS</h3>
                                 </div>
                             </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">House Number<span class="form-asterisk">*</span></label>
                                  <input class="form-control" type="number" name="house_no" placeholder="House No" required="" class="form-control" id="form1-w-name" />
                                </div>
                            </div>
                          <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                  <!--
                                  <?php if(isset($_SESSION['ERROR']['USERNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['USERNAME']; ?> </div> <?php } ?>
                                  -->
                                  <label class="form-control-label" for="form1-w-name">Street Name<span class="form-asterisk">*</span></label>
                                  <input class="form-control" type="text" name="street_name" placeholder="Street Name" required="" class="form-control" id="form1-w-name" />
                                </div>
                            </div>
                         <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                <!--
                                <?php if(isset($_SESSION['ERROR']['MAIDENNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['MAIDENNAME']; ?> </div> <?php } ?>
                                -->
                                <label class="form-control-label" for="form1-w-name">Suburb<span class="form-asterisk">*</span></label>
                                <select class="form-control" name="suburb" required="" class="form-control" id="form1-w-name"/>
                                      <option value="NULL">Suburb......</option>
                                      <option value="Mr">Summerstrand</option>
                                      <option value="Mrs">Umhlanga</option>
                                      <option value="Ms">Sandton</option>
                                </select>
                              </div>
                          </div>
                           <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                <!--
                                <?php if(isset($_SESSION['ERROR']['SECONDNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['SECONDNAME']; ?> </div> <?php } ?>
                                -->
                                <label class="form-control-label" for="form1-w-name">City<span class="form-asterisk">*</span></label>
                                <select class="form-control" name="city" required="" class="form-control" id="form1-w-name"/>
                                      <option value="NULL">City......</option>
                                      <option value="Mr">Port Elizabeth</option>
                                      <option value="Mrs">Durban</option>
                                      <option value="Ms">Johannesburg</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                <!--
                                <?php if(isset($_SESSION['ERROR']['LASTNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['LASTNAME']; ?> </div> <?php } ?>
                                -->
                                <label class="form-control-label" for="form1-w-name">Postal Code<span class="form-asterisk">*</span></label>
                                <select class="form-control" name="postalcode" required="" class="form-control" id="form1-w-name"/>
                                      <option value="NULL">Postal Code......</option>
                                      <option value="Mr">4001</option>
                                      <option value="Mrs">3001</option>
                                      <option value="Ms">1001</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                <!--
                                <?php if(isset($_SESSION['ERROR']['FIRSTNAME'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['FIRSTNAME']; ?> </div> <?php } ?>
                                -->
                                <label class="form-control-label" for="form1-w-name">State / Province<span class="form-asterisk">*</span></label>
                                <select class="form-control" name="province" required="" class="form-control" id="form1-w-name"/>
                                      <option value="NULL">Province......</option>
                                      <option value="Mr">Eastern Cape</option>
                                      <option value="Mrs">Kwa-Zulu Natal</option>
                                      <option value="Ms">Gauteng</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-xs-12 col-md-4">
                              <div class="form-group">
                                    <!--
                                    <?php if(isset($_SESSION['ERROR']['TITLE'])) { ?> <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $_SESSION['ERROR']['TITLE']; ?> </div> <?php } ?> 
                                    -->
                                    <label class="form-control-label" for="form1-w-name">Country<span class="form-asterisk">*</span></label>
                                    <select class="form-control" name="country" required="" class="form-control" id="form1-w-name"/>
                                      <option value="NULL">Country......</option>
                                      <option value="Mr">Uganda</option>
                                      <option value="Mrs">South Africa</option>
                                      <option value="Ms">Zimbabwe</option>
                                    </select>
                                </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-4" ><button type="submit" class="btn btn-primary">UPDATE</button></div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

  </body>
</html>
