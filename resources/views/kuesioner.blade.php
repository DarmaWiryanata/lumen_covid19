<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>"Nama Kuesioner"</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="{{ url('kuesioner/image/x-icon') }}">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ url('kuesioner/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ url('kuesioner/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ url('kuesioner/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ url('kuesioner/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ url('kuesioner/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('kuesioner/css/style.css') }}" rel="stylesheet">
	  <link href="{{ url('kuesioner/css/vendors.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ url('kuesioner/css/custom.css') }}" rel="stylesheet">

</head>

<body class="style_2">
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-5">
	                <a href="#"><img src="{{ url('kuesioner/img/logo.svg') }}" alt="" width="50" height="55"></a>
							</div>
							{{-- Fitur sebar kuesioner di media sosial --}}
	            {{-- <div class="col-7">
	                <div id="social">
	                    <ul>
	                        <li><a href="#0"><i class="social_facebook"></i></a></li>
	                        <li><a href="#0"><i class="social_twitter"></i></a></li>
	                        <li><a href="#0"><i class="social_instagram"></i></a></li>
	                        <li><a href="#0"><i class="social_linkedin"></i></a></li>
	                    </ul>
	                </div>
	            </div> --}}
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</header>
	<!-- /header -->

	<div class="wrapper_centering">
	    <div class="container_centering">
	        <div class="container">
	            <div class="row justify-content-between">
	                <div class="col-xl-6 col-lg-6 d-flex align-items-center">
	                    <div class="main_title_1">
	                        <h3><img src="{{ url('kuesioner/img/main_icon_1.svg') }}" width="80" height="80" alt=""> Survey</h3>
	                        <p>"Nama Kuesioner"</p>
	                        {{-- <p><em>- The Satisfyc Team</em></p> --}}
	                    </div>
	                </div>
	                <!-- /col -->
	                <div class="col-xl-5 col-lg-5">
	                    <div id="wizard_container">
	                        <div id="top-wizard">
	                            <div id="progressbar"></div>
	                        </div>
	                        <!-- /top-wizard -->
	                        <form id="wrapped" method="POST" autocomplete="off">
	                            <input id="website" name="website" type="text" value="">
	                            <!-- Leave for security protection, read docs for details -->
	                            <div id="middle-wizard">

	                                <div class="step">
	                                    <h3 class="main_question"><strong>1 of 5</strong>How was the service provided?</h3>
	                                    <div class="review_block_smiles">
	                                    	<ul class="clearfix">
	                                    		<li>
                                                    <div class="container_numbers">
                                                        <input type="radio" id="very_bad_1" name="#" class="required" value="1">
                                                        <label class="radio very_bad" for="very_bad_1">1</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="container_numbers">
                                                        <input type="radio" id="bad_1" name="#" class="required" value="2">
                                                        <label class="radio bad" for="bad_1">2</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="container_numbers">
                                                        <input type="radio" id="average_1" name="#" class="required" value="3">
                                                        <label class="radio average" for="average_1">3</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="container_numbers">
                                                        <input type="radio" id="good_1" name="#" class="required" value="4">
                                                        <label class="radio good" for="good_1">4</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="container_numbers">
                                                        <input type="radio" id="very_good_1" name="#" class="required" value="5">
                                                        <label class="radio very_good" for="very_good_1">5</label>
                                                    </div>
                                                </li>
	                                    	</ul>
	                                    	<div class="row justify-content-between add_bottom_25">
	                                    		<div class="col-4">
	                                    			<em>Sangat Tidak Pernah</em>
	                                    		</div>
	                                    		<div class="col-4 text-right">
	                                    			<em>Sangat Sering</em>
	                                    		</div>
	                                    	</div>
	                                    </div>
	                                </div>
	                                <!-- /step 1-->

	                                <div class="step">
	                                    <h3 class="main_question mb-4"><strong>2 of 5</strong>Would you reccomend our company?</h3>
	                                    <div class="review_block">
	                                        <ul>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="no" name="#" class="required" value="0">
	                                                    <label class="radio" for="no"></label>
	                                                    <label for="no" class="wrapper">No</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="maybe" name="#" class="required" value="Maybe" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="maybe"></label>
	                                                    <label for="maybe" class="wrapper">Maybe</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="probably" name="#" class="required" value="Probably" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="probably"></label>
	                                                    <label for="probably" class="wrapper">Probably</label>
	                                                </div>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                    <!-- /review_block-->
	                                    <div class="form-group">
	                                        <label for="additional_message_2_label">Additional message</label>
	                                        <textarea name="additional_message_2" id="additional_message_2_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_2');"></textarea>
	                                    </div>
	                                </div>
	                                <!-- /step 2-->

	                                <div class="step">
	                                    <h3 class="main_question"><strong>3 of 5</strong>How did you hear about us?</h3>
	                                    <div class="review_block">
	                                        <ul>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="checkbox" id="question_3_opt_1" name="question_3[]" class="required" value="Google and Search Engines" onchange="getVals(this, 'question_3');">
	                                                    <label class="checkbox" for="question_3_opt_1"></label>
	                                                    <label for="question_3_opt_1" class="wrapper">Google and Search Engines</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="checkbox" id="question_3_opt_2" name="question_3[]" class="required" value="Emails or Newsletter" onchange="getVals(this, 'question_3');">
	                                                    <label class="checkbox" for="question_3_opt_2"></label>
	                                                    <label for="question_3_opt_2" class="wrapper">Emails or Newsletter</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="checkbox" id="question_3_opt_3" name="question_3[]" class="required" value="Friends or other people" onchange="getVals(this, 'question_3');">
	                                                    <label class="checkbox" for="question_3_opt_3"></label>
	                                                    <label for="question_3_opt_3" class="wrapper">Friends or other people</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="checkbox" id="question_3_opt_4" name="question_3[]" class="required" value="Print Advertising" onchange="getVals(this, 'question_3');">
	                                                    <label class="checkbox" for="question_3_opt_4"></label>
	                                                    <label for="question_3_opt_4" class="wrapper">Print Advertising</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="checkbox" id="question_3_opt_5" name="question_3[]" class="required" value="Print Advertising" onchange="getVals(this, 'question_3');">
	                                                    <label class="checkbox" for="question_3_opt_5"></label>
	                                                    <label for="question_3_opt_5" class="wrapper">Other</label>
	                                                </div>
	                                            </li>
	                                        </ul>
	                                        <small><em>Multiple selections *</em></small>
	                                    </div>
	                                </div>
	                                <!-- /step 3-->

	                                <div class="step">
	                                    <h3 class="main_question"><strong>4 of 5</strong>Summary</h3>
	                                    <div class="summary">
	                                        <ul>
	                                            <li>
	                                                <strong>1</strong>
	                                                <h5>How was the service provided?</h5>
	                                                <p id="question_1" class="mb-2"></p>
	                                                <p id="additional_message"></p>
	                                            </li>
	                                            <li>
	                                                <strong>2</strong>
	                                                <h5>Would you reccomend our company?</h5>
	                                                <p id="question_2" class="mb-2"></p>
	                                                <p id="additional_message_2"></p>
	                                            </li>
	                                            <li>
	                                                <strong>3</strong>
	                                                <h5>How did you hear about our company?</h5>
	                                                <p id="question_3"></p>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <!-- /step 4-->

	                                <div class="submit step">
	                                    <h3 class="main_question"><strong>5 of 5</strong>Please fill with your details</h3>
	                                    <div class="form-group">
	                                        <label for="firstname">First Name</label>
	                                        <input type="text" name="firstname" id="firstname" class="form-control required">
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="lastname">Last Name</label>
	                                        <input type="text" name="lastname" id="lastname" class="form-control required">
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="email">Your Email</label>
	                                        <input type="email" name="email" id="email" class="form-control required">
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="telephone">Telephone</label>
	                                        <input type="text" name="telephone" id="telephone" class="form-control">
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-lg-3 col-md-3 col-3">
	                                            <div class="form-group">
	                                                <label for="age">Age</label>
	                                                <input type="text" name="age" id="age" class="form-control">
	                                            </div>
	                                        </div>
	                                        <div class="col-9">
	                                            <div class="form-group radio_input">
	                                                <label class="container_radio">Male
	                                                    <input type="radio" name="gender" value="Male" class="required">
	                                                    <span class="checkmark"></span>
	                                                </label>
	                                                <label class="container_radio">Female
	                                                    <input type="radio" name="gender" value="Female" class="required">
	                                                    <span class="checkmark"></span>
	                                                </label>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <!-- /row -->
	                                    <div class="form-group terms">
	                                        <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt" style="color:#fff; text-decoration: underline;">Terms and conditions</a>
	                                            <input type="checkbox" name="terms" value="Yes" class="required">
	                                            <span class="checkmark"></span>
	                                        </label>
	                                    </div>
	                                </div>
	                                <!-- /step 5-->

	                            </div>
	                            <!-- /middle-wizard -->

	                            <div id="bottom-wizard">
	                                <button type="button" name="backward" class="backward">Prev</button>
	                                <button type="button" name="forward" class="forward">Next</button>
	                                <button type="submit" name="process" class="submit">Submit</button>
	                            </div>
	                            <!-- /bottom-wizard -->

	                        </form>
	                    </div>
	                    <!-- /Wizard container -->
	                </div>
	                <!-- /col -->
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container_centering -->
	    <footer>
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-3">
	                    ©2020 Satisfyc
	                </div>
	                {{-- <div class="col-md-9">
	                    <ul class="clearfix">
	                        <li><a href="#0" class="animated_link">Purchase this template</a></li>
	                        <li><a href="index.html" class="animated_link">Demo 1</a></li>
	                        <li><a href="index-2.html" class="animated_link">Demo 2</a></li>
	                        <li><a href="index-3.html" class="animated_link">Demo 3</a></li>
	                    </ul>
	                </div> --}}
	            </div>
	            <!-- /row -->
	        </div>
	        <!-- /container-fluid -->
	    </footer>
	    <!-- /footer -->
	</div>
	<!-- /wrapper_centering -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
	<script src="{{ url('kuesioner/js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ url('kuesioner/js/common_scripts.min.js') }}"></script>
	<script src="{{ url('kuesioner/js/functions.js') }}"></script>

	<!-- Wizard script -->
	<script src="{{ url('kuesioner/js/survey_func.js') }}"></script>

</body>
</html>