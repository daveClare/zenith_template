<?php
include_once('vendor/autoload.php');


?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
  <div class="container">
<div class="row">
	<div class="col-xs-2">
		<img class="img-responsive" src="img/logo.png">
	</div>
	<div class="col-xs-8">
		&nbsp;
	</div>
	<div class="col-xs-2">
		<img class="img-responsive pull-right" src="img/FSCS_square.jpg" style="max-height: 75px;">
	</div>
</div>

  
<!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#contact">Apply</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <div class="jumbotron bg"  id="parallax">

  		<div id="home-products" class="row">

				<div class="row">
					<div class="col-xs-12">
						<h3>Fixed rate savings accounts from Zenith Bank</h3>
					</div>
				</div><!-- ./ row -->

				<div class="row" id="homePage-panels">
					<div class="col-xs-12 col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading"><h4>1 Year Fixed Term Deposit 1.00%</h4></div>
							<div class="panel-body">
								Open your account today <span class="pull-right"><a href="apply/?product=6" class="">APPLY NOW</a></span>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading"><h4>2 Year Fixed Term Deposit 1.40%</h4></div>
							<div class="panel-body">
								Open your account today <span class="pull-right"><a href="apply/?product=6" class="">APPLY NOW</a></span>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading"><h4>3 Year Fixed Term Deposit 1.50%</h4></div>
							<div class="panel-body">
								Open your account today <span class="pull-right"><a href="apply/?product=6" class="">APPLY NOW</a></span>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading"><h4>5 Year Fixed Term Deposit 1.70%</h4></div>
							<div class="panel-body">
								Open your account today <span class="pull-right"><a href="apply/?product=6" class="">APPLY NOW</a></span>
							</div>
						</div>
					</div>

				</div><!-- ./ row -->

				<div class="row">
					<div class="col-xs-12">
						<p>
							Duis a porta lacus. Proin tortor sem, viverra non tempus ut, lacinia sed eros. Aliquam erat volutpat. Praesent consectetur pellentesque ornare. In iaculis, est in vehicula semper, lectus lorem gravida est, nec malesuada arcu mi commodo nisi. Duis pulvinar eleifend posuere. Phasellus iaculis eleifend neque eu elementum. Nunc venenatis iaculis lorem vitae varius. 
						</p>
					</div>

				</div><!-- ./ row -->

			</div>

  </div><!-- ./ jumbotron -->

  <div class="row">
  	<div class="col-sm-9">
  		<p>
			Pellentesque maximus ullamcorper nisi, sit amet molestie metus vestibulum sit amet. Ut rutrum purus dolor, pretium molestie felis suscipit id. Pellentesque quis ex facilisis, semper ligula ut, rutrum turpis. Morbi auctor, diam ac dapibus elementum, leo augue feugiat orci, vitae lobortis purus quam at elit. Aliquam erat volutpat. Aenean finibus sapien non nulla hendrerit maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut at fermentum dui.
  		</p>
  		
  			<h3>Fixed Term Deposits from Zenith Bank</h3>
		<ul>
			<li>Guaranteed rate of interest for full term of product</li>
			<li>Minimum deposit of £2,000</li>
			<li>Interest payable: monthly or yearly</li>
			<li>Penalty for early withdrawal or closure</li>
			<li>Available as sole or joint accounts</li>
			<li>Up to £75,000 per depositor is protected by FSCS</li>
			<li>Must be UK resident and 18 years of age or older</li>
			<li>Must have an account with an existing UK bank or building society</li>
  		</ul>

  		<div class="alert alert-info">
			<p>
				<b>Gross Contractual Rate</b> of interest payable before the deduction of any income tax.
			</p>
			</p>
				<b>AER Annual Equivalent Rate</b> and Illustrates what the interest would be if interest was paid and compounded each year.
			</p>
  		</div>
  	</div>
  	<div class="col-sm-3">
  		<?php
  		echo (new \LIB\SideBar)->fscs_banner();
  		?>
  	</div>
  </div>

<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-2  col-md-2 col-sm-3 col-xs-6">
                    <img class="img-responsive" src="img/logo.png">
                </div>

                <div class="col-lg-2  col-md-2 col-sm-3 col-xs-6">
                    <ul class="list-unstyled">
                        <li><a href="/faq">FAQs </a></li>
						<li><a href="/privacy-policy" title="Privacy & Cookie Policy">Privacy &amp; Cookie Policy </a></li>
						<li><a href="/about" title="About Us">About Us </a></li>
                    </ul>
                </div>

                <div class="col-lg-2  col-md-2 col-sm-3 col-xs-6">
                    <ul class="list-unstyled">
                        <li><a target="_blank" href="/docs/UBLUK-FTD-Terms-Conditions.pdf" title="Fixed Term Deposits Terms and Conditions">Fixed Term Deposit Terms and Conditions</a></li>
						<li><a target="_blank" href="/docs/UBLUK_Online_Easy_Access_Account_Terms_and_Conditions.pdf" title="Easy Access Terms and Conditions">Easy Access Terms and Conditions</a></li>
                    </ul>
                </div>

            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> &copy; <?=date('Y')?> <strong>Zenith Bank (UK) Ltd.</strong> Zenith Bank (UK) Ltd is registered in England and Wales No. 5713749. Registered address: 39 Cornhill, London, EC3V 3ND, United Kingdom. Authorised by the Prudential Regulation Authority and regulated by the Financial Conduct Authority and the Prudential Regulation Authority. - See more at: http://www.zenith-bank.co.uk/#sthash.bg9oGyvp.dpuf</p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                	<li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>



  </div><!-- ./ container -->  


 




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>


    </script>
  </body>
</html>