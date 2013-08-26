<!DOCTYPE html>
<html lang="{{dil.iso}}" dir="{{dil.dir}}">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>{{sayfa}} :: {{title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{url}}assets/css/bootstrap.css" rel="stylesheet">
    <link href="{{url}}assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="{{url}}assets/css/docs.css" rel="stylesheet">
    <link href="{{url}}assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="{{url}}assets/css/app.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="{{url}}assets/js/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{{url}}assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url}}assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url}}assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url}}assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{url}}assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="container">
      <div class="btn-group pull-right">
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="lang-{{dil.iso}}"></i> {{dil.name}}
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{url}}index.php?lang=tr"><i class="lang-tr"></i> Türkçe</a></li>
          <li class="divider"></li>
          <li><a href="{{url}}index.php?lang=en"><i class="lang-en"></i> English</a></li>
          <li class="divider"></li>
          <li><a href="{{url}}index.php?lang=sa"><i class="lang-sa"></i> العربية</a></li>
          <li class="divider"></li>
          <li><a href="{{url}}index.php?lang=ru"><i class="lang-ru"></i> Русска</a></li>
          <li class="divider"></li>
          <li><a href="{{url}}index.php?lang=ua"><i class="lang-ua"></i> Український</a></li>
        </ul>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h3>{{{hello}}</h3>
      </div>

    </div> <!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- 
    Placed at the end of the document so the pages load faster 
    <script type="text/javascript" src="{{url}}assets/js/widgets.js"></script>
    -->
    <script src="{{url}}assets/js/jquery.js"></script>
    <script src="{{url}}assets/js/google-code-prettify/prettify.js"></script>
    <script src="{{url}}assets/js/bootstrap-transition.js"></script>
    <script src="{{url}}assets/js/bootstrap-alert.js"></script>
    <script src="{{url}}assets/js/bootstrap-modal.js"></script>
    <script src="{{url}}assets/js/bootstrap-dropdown.js"></script>
    <script src="{{url}}assets/js/bootstrap-scrollspy.js"></script>
    <script src="{{url}}assets/js/bootstrap-tab.js"></script>
    <script src="{{url}}assets/js/bootstrap-tooltip.js"></script>
    <script src="{{url}}assets/js/bootstrap-popover.js"></script>
    <script src="{{url}}assets/js/bootstrap-button.js"></script>
    <script src="{{url}}assets/js/bootstrap-collapse.js"></script>
    <script src="{{url}}assets/js/bootstrap-carousel.js"></script>
    <script src="{{url}}assets/js/bootstrap-typeahead.js"></script>
    <script src="{{url}}assets/js/application.js"></script>


  </body>
</html>
