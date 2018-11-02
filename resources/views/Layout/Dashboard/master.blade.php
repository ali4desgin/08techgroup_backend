
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>8Tech Group</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('backend/css/main.css') }}" />
        
        
    </head>
    <body>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('adminpanel/dashboard') }}">Admin</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('adminpanel/dashboard') }}"><i 
					class="fa fa-home"></i> الرئيسية <span
					 class="sr-only">(current)</span></a></li>
                <li><a href="{{ url('adminpanel/customers') }}"> <i 
					class="fa fa-users"></i> ادارة العملاء</a></li>
                <li><a href="{{ url('adminpanel/packages') }}"> <i 
					class="fa fa-home"></i> ادارة الباقات</a></li>
                <li><a href="{{ url('adminpanel/daily_profits') }}"> <i class="fa fa-home"></i>   الارباح اليومية</a></li>
                <li><a href="#"> <i class="fa fa-home"></i> سجلات الدفع</a></li>
                <li><a href="#"> <i class="fa fa-home"></i>   ادارة العناوين</a></li>
                <li><a href="#"> <i class="fa fa-home"></i> ادارة المحتوى</a></li>
            </ul>
            
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            @yield("content")
			<div class="footer">
				<p>جميع الحقوق محفوظة <i class="fa fa-copyright"></i> 2018 08Tech
					 Group</p>
	 			<p class="gray_1">تصميم وبرمجة <i class="fa fa-desktop"></i> <a href="http://development-master" 
					class="gray_2">Dev Master</a></p>
			</div>
        </div>
		
        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified js -->
        <script src="{{ asset('backend/js/main.js') }}"></script>
    </body>
</html>