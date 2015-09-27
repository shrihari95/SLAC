<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SLAC Virtual Lab</title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/favicon.png">
    
    <!-- Style Sheets -->
    <link href="bower_components/bootstrap-switch/dist/css/bootstrap2/bootstrap-switch.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    <!-- JavaScript Assets -->
    <!--<script src="bower_components/jquery/dist/jquery.min.js"></script>-->
    
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    
    
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/snap/snap.min.js"></script>
    <script src="javascript/main.js"></script>
    <script src="javascript/panel.js"></script>
    <script src="javascript/audiogram.js"></script>
    <script src="javascript/ajax.js"></script>
    
    <!-- MAKES THE MODAL APPEAR ON WINDOW LOAD -->
    <script type="text/javascript">
      $(window).load(function () {
        $('#choosePatientType').modal('show');
      });
    </script>
  </head>

  <!-- Connect to  -->
  <?php
    include 'php/connection.php';
  ?>
  
  <body>
    
    <!-- Popup for test type selection -->
<!--     <div class="modal fade" id="choosePatientType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">
                Close
              </span>
            </button>
            &nbsp
          </div>
          <div class="modal-body">
            <button type="button" class="btn btn-primary patientOptionPractice" data-toggle="btn" aria-pressed="false" autocomplete="false">
              Practice Test
            </button>
            Name: <input type = "text" id = "name">
            <input type ="submit" id ="name-submit" value ="Get Patient Info.">
            
            <button type="button" class="btn btn-primary patientOptionReal" data-toggle="btn" aria-pressed="false" autocomplete="false">
              Real Test
            </button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div> -->

  <div id="abc">
    <!-- Popup Div Starts Here -->
    <div id="popupContact">
      <!-- Contact Us Form -->
      <form action="#" id="form" method="post" name="form">
        <img id="close" src="images/3.png" onclick ="div_hide()">
        <h2>Contact Us</h2>
        <hr>
        <input id="name" name="name" placeholder="Name" type="text">
        <input id="email" name="email" placeholder="Email" type="text">
        <textarea id="msg" name="message" placeholder="Message">
        </textarea>
        <a href="javascript:%20check_empty()" id="submit">
        Send
        </a>
      </form>
    </div>
    <!-- Popup Div Ends Here -->
  </div>
    
    <!-- Page content -->
    <div class="snap-drawers">
      
      <!-- Patient information and Audiogram drawers -->
      <div class="snap-drawers">
        <!-- Patient information drawer -->
        <div class="snap-drawer snap-drawer-left">
          <div>
            <h3>Patients</h3>
            <div class="demo-social">
            </div>
            <h4>Information</h4>
            <div class="slider-left">
              <button id="Add Patient" class="btn btn-primary" onclick="">
                  Add Patient
              </button>
              <!-- <div>
                <img src="images/portrait-1.png" style="width: 25%; height: 25%; ">
                <div id="name-data">
                </div>
              </div> -->
            </div>
          </div>
        </div>
        
        <!-- Audiogram drawer -->
        <div class="snap-drawer snap-drawer-right audiogram-drawer">
          <!-- Where the vector drawing gets placed -- don't you dare delete this div -->
          <div id="audiogram"></div>
          
          <!-- Span to format everything below the audiogram -->
          <span class="belowAudiogram">
          
            <table>
              <tr>
                <td>
                  <!-- Symbol selection prompt text -->
                  <h1>
                    Choose Symbol
                  </h1>
                </td>
                <td align="right">
                  <!-- Export button -->
                  <input type="submit" name="submit" value="Complete & Export" id="submit" />
                </td>
              </tr>
            </table>
            
            <table>
              <tr>
                <td>
                  <label>
                    <input type="radio" name="opt-select" value="AC_L" />
                    <img src="images/AC_L.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="AC_NR_L" />
                    <img src="images/AC_NR_L.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="AC_M_L" />
                    <img src="images/AC_M_L.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="AC_M_NR_R" />
                    <img src="images/AC_M_NR_R.png">
                  </label>
                  <br>
                  <label>
                    <input type="radio" name="opt-select" value="AC_R" />
                    <img src="images/AC_R.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="AC_NR_R" />
                    <img src="images/AC_NR_R.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="AC_M_R" />
                    <img src="images/AC_M_R.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="AC_M_NR_L" />
                    <img src="images/AC_M_NR_L.png">
                  </label>
                </td>
                <td>
                  <label>
                    <input type="radio" name="opt-select" value="BC_L" />
                    <img src="images/BC_L.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="BC_R" />
                    <img src="images/BC_R.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="BC_NR_L" />
                    <img src="images/BC_NR_L.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="BC_NR_R" />
                    <img src="images/BC_NR_R.png">
                  </label>
                  <br>
                  <label>
                    <input type="radio" name="opt-select" value="BC_M_L" />
                    <img src="images/BC_M_L.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="BC_M_R" />
                    <img src="images/BC_M_R.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="BC_M_NR_L" />
                    <img src="images/BC_M_NR_L.png">
                  </label>
                  <label>
                    <input type="radio" name="opt-select" value="BC_M_NR_R" />
                    <img src="images/BC_M_NR_R.png">
                  </label>
                </td>
              </tr>
            </table>
          </span>
        </div>
      </div>
      
      
      <div id="content" class="snap-content" data-snap-ignore="true">
        <div class="container-fluid ">
          
          <!-- Header -->
          <div class="row display">
            
            <!-- Left header -->
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">
              <div id="Stimulus1">
                Stimulus: Tone
              </div>
              <div id="Transducer1">
                Transducer: Phone
              </div>
              <div id="Routing1">
                Routing: Left
              </div>
            </div>
            
            <!-- Middle left header -->
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <div class="decibel" id="dB1">
                0 dB HL
              </div>
            </div>
            
            <!-- Middle header -->
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <div>
                &nbsp
              </div>
              <div id="Freq">
                125 Hz
              </div>
              <div id="countdown" class="oldSpan">
                0:00
              </div>
            </div>
            
            <!-- Middle right header -->
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <div class="decibel" id="dB2">
                0 dB HL
              </div>
            </div>
            
            <!-- Right header -->
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
              <div id="Stimulus2">
                Stimulus: Tone
              </div>
              <div id="Transducer2">
                Transducer: Phone
              </div>
              <div id="Routing2">
                Routing: Right
              </div>
            </div>
          </div>
          
          <!-- Main audiometer area -->
          <div class="row controls">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              
              <!-- Controls (besides frequency buttons) -->
              <div class="row">
                
                <!-- Left arrow -->
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                  <img class="toggler" id="ol" src="./images/arrow-left.png" alt="">
                </div>
                
                <!-- Left button area -->
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 left">
                  
                  <!-- Top left button area -->
                  <div class="row divider-bottom divider-right">
                    
                    <!-- FM/PULSE/ALT/SISI buttons -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <button class="btn btn-default" disabled>
                        FM
                      </button>
                      <button id="pulse" class="btn btn-default" onclick="changeColor(this.id)">
                        Pulse
                      </button>
                      <button class="btn btn-default" onclick="responseLeft()">
                        ALT
                      </button>
                      <button class="btn btn-default" onclick="responseRight()">
                        SISI
                      </button>
                    </div>
                    
                    <!-- Left TONE/MIC/EXT A/EXT B buttons -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 top-left color">
                      <div class="oldSpan">Stimulus</div>
                      <button id="Tone" class="btn btn-default" onclick="print_stimulus('Stimulus1', 'Tone');changeColor(this.id)">
                        Tone
                      </button>
                      <button class="btn btn-default" disabled>
                        MIC
                      </button>
                      <button class="btn btn-default" disabled>
                        EXT A
                      </button>
                      <button class="btn btn-default" disabled>
                        EXT B
                      </button>
                    </div>
                    
                    <!-- Left PHONE/BONE/SPKR/INSERT buttons -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 top-right color">
                      <div class="oldSpan">
                        Transducer
                      </div>
                      <button id="Phone" class="btn btn-default" onclick="print_transducer('Transducer1', 'Phone'); changeColor(this.id)">
                        Phone
                      </button>
                      <button id="Bone" class="btn btn-default" onclick="print_transducer('Transducer1', 'Bone');changeColor(this.id)">
                        Bone
                      </button>
                      <button class="btn btn-default" onclick="print_transducer('Transducer1', 'SPKR')" disabled>
                        SPKR
                      </button>
                      <button class="btn btn-default" onclick="print_transducer('Transducer1', 'Insert')" disabled>
                        Insert
                      </button>
                    </div>
                  </div>
                  
                  <!-- Bottom left button area -->
                  <div class="row divider-right">
                    
                    <!-- Left INTERRUPT/PRESENT buttons and slider -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 color top-left bottom-left divider-right">
                      <button id="Interrupt" class="btn btn-default" onclick="changeColor(this.id)">
                        Interrupt
                      </button>
                      <input id="range1" type="range" step="5" min="0" max="130" value="0">
                      <button id="Present1" class="btn btn-default btn-long" onclick="sndplay();changeColor(this.id)">
                        Present
                      </button>
                    </div>
                    
                    <!-- Left NB/SPEECH/NOISE buttons -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 color">
                      <div class="oldSpan">
                        Noise
                      </div>
                      <button id="NB" class="btn btn-default" onclick="changeColor(this.id)">
                        NB
                      </button>
                      <button class="btn btn-default" disabled>
                        Speech
                      </button>
                      <button class="btn btn-default" disabled>
                        White
                      </button>
                    </div>
                    
                    <!-- Left LEFT/RIGHT/BOTH buttons -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 color bottom-right">
                      <div class="oldSpan">
                        Routing
                      </div>
                      <button id="Left" class="btn btn-default" onclick="print_routing('Routing1', 'Left'); changeColor(this.id)">
                        <!--Logic needed-->
                        Left
                      </button>
                      <button id="Right" class="btn btn-default" onclick="print_routing('Routing1', 'Right'); changeColor(this.id)">
                        Right
                      </button>
                      <button class="btn btn-default" onclick="print_routing('Routing1', 'Both')" disabled>
                        Both
                      </button>
                    </div>
                  </div>
                </div>
                
                <!-- Right button area -->
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  
                  <!-- Top right button area -->
                  <div class="row divider-bottom">
                    
                    <!-- Right PHONE/BONE/SPKR/INSERT buttons -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 color top-left">
                      <div class="oldSpan">
                        Transducer
                      </div>
                      <button id="Phone2" class="btn btn-default" onclick="print_transducer('Transducer2', 'Phone'); changeColorBlue(this.id)">
                        Phone
                      </button>
                      <button id="Bone2" class="btn btn-default" onclick="print_transducer('Transducer2', 'Bone'); changeColorBlue(this.id)">
                        Bone
                      </button>
                      <button class="btn btn-default" onclick="print_transducer('Transducer2', 'SPKR')" disabled>
                        SPKR
                      </button>
                      <button class="btn btn-default" onclick="print_transducer('Transducer2', 'Insert')" disabled>
                        Insert
                      </button>
                    </div>
                    
                    <!-- Right TONE/MIC/EXT A/EXT B buttons -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 color top-right">
                      <div class="oldSpan">
                        Stimulus
                      </div>
                      <button id="Tone2" class="btn btn-default" onclick="print_stimulus('Stimulus2', 'Tone'); changeColorBlue(this.id)">
                        Tone
                      </button>
                      <button class="btn btn-default" onclick="print_stimulus('Stimulus2', 'MIC')" disabled>
                        MIC
                      </button>
                      <button class="btn btn-default" onclick="print_stimulus('Stimulus2', 'EXT A')" disabled>
                        EXT A
                      </button>
                      <button class="btn btn-default" onclick="print_stimulus('Stimulus2', 'EXT B')" disabled>
                        EXT B
                      </button>
                    </div>
                    
                    <!-- Top far right area -->
                    <!-- NOTE: I'm pretty sure this is what's breaking stuff -Henry -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <!-- The following code is the indicator box. It needs to be responsive - right now it kind of makes things ugly -->
                      <!--       <svg width="100%" height="100%" style="height:80px">
                        <rect width="100%" height="100%" rx=20 ry=20 style="fill:rgb(157,177,81)"
                        id="indicator">
                        onmouseover="evt.target.setAttribute('opacity','0.5');"
                        onmouseout="evt.target.setAttribute('opacity', '1');"/>
                      </svg> -->
                      <!-- End indicator box -->
                      
                      <!-- MATCH/RESET buttons -->
                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bottom-ight">
                        <button class="btn btn-default">
                          Match
                        </button>
                        <button class="btn btn-default">
                          Reset
                        </button>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Bottom right button area -->
                  <div class="row">
                    
                    <!-- Right LEFT/RIGHT/BOTH buttons -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 color bottom-left">
                      <div class="oldSpan">
                        Routing
                      </div>
                      <button id="Left2" class="btn btn-default" onclick="print_routing('Routing2', 'Left'); changeColorBlue(this.id)">
                        Left
                      </button>
                      <button id="Right2" class="btn btn-default" onclick="print_routing('Routing2', 'Right'); changeColorBlue(this.id)">
                        Right
                      </button>
                      <button class="btn btn-default" onclick="print_routing('Routing2', 'Both')"
                      disabled>
                        Both
                      </button>
                    </div>
                    
                    <!-- Right NB/SPEECH/WHITE buttons -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 color">
                      <div class="oldSpan">
                        Noise
                      </div>
                      <button id="NB2" class="btn btn-default" onclick="changeColorBlue(this.id)">
                        NB
                      </button>
                      <button class="btn btn-default" disabled>
                        Speech
                      </button>
                      <button class="btn btn-default" disabled>
                        White
                      </button>
                    </div>
                    
                    <!-- Right INTERRUPT/PRESENT buttons and slider -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 color top-right bottom-right divider-left">
                      <button id="Interrupt2" class="btn btn-default" onclick="changeColorBlue(this.id)">
                        Interrupt
                      </button>
                      <input id="range2" type="range" step="5" min="0" max="130" value="0">
                      <button id="Present2" class="btn btn-default btn-long" onclick="sndplay();changeColorBlue(this.id)">
                        Present
                      </button>
                    </div>
                  </div>
                </div>
                
                <!-- Right arrow -->
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                  <img class="toggler" id="or" src="./images/arrow-right.png" alt="">
                </div>
              </div>
              
              <!-- Frequency buttons -->
              <div class="row frequency">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                </div>
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 color top-left bottom-left">
                  <button class="btn btn-default" onclick="printHz('Freq', FreqMinus())">
                    Freq -
                  </button>
                </div>
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 color top-right bottom-right">
                  <button class="btn btn-default" onclick="printHz('Freq', FreqPlus())">
                    Freq +
                  </button>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <!-- Global reference (variables shared between .js files)-->
  <script src="js/global.js"></script>
</html>