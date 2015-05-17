<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Дипломка</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

      <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      <link rel="stylesheet" href="/css/datepicker.css"/>
      <script src="/js/bootstrap-datepicker.js"></script>
      <script src="/js/moment.min.js"></script>

      <script type = "text/javascript" src = "/js/input-tr.js"></script>



      <!-- x-editable (bootstrap version) -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/js/bootstrap-editable.min.js"></script>


      <script src="/js/edit.js"></script>

  </head>


  <body>


<!--Navbar-->
  <div class = "navbar navbar-default navbar-static-top">

     <div class = "container">

         <a href = "/" class = "navbar-brand"><img src="/img/logo.png" style = "max-height: 100%"></a>

         <button class= "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">

            <span class = "icon-bar"></span>  
            <span class = "icon-bar"></span>  
            <span class = "icon-bar"></span>  

         </button>


       <div class = "collapse navbar-collapse navHeaderCollapse">

            <ul class = "nav navbar-nav navbar-left">
              
               <li class = "active"></li>


            </ul>

            <ul class = "nav navbar-nav navbar-right">

            @if (Auth::user() == null)

               <li><a href="/">Вход</a></li>
               <li><a href="/signup">Регистрация</a></li>
            @else
               <li><a href="/profile/{{Auth::user()->id}}">{{ Auth::user()->email }}</a>
               <li><a href="/logout">Выход</a></li>

            @endif
            </ul>
           
        </div>

      </div>


  </div>


 @yield('content')

  <div class = "navbar navbar-inverse navbar-fixed-bottom">

    <div class = "container">

      <p class = "navbar-text pull left">MirasSultan ®</p>




    </div>

  </div>














    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

  </body>
</html>