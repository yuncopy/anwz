<?php

/* user/login.html */
class __TwigTemplate_c13d7e2cb54cb378b52c829c01bf5706d4f793c12cce172d173b6cd45bc9b6f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>ANWZ | Signin </title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
   <link href=\"/public/css/signin.css\" rel=\"stylesheet\">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- Custom styles for this template -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>
      
    <div class=\"container\">
        <form class=\"form-signin\" action=\"/user/login\" method=\"post\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <div class=\"alert alert-danger closes\" role=\"alert\" data-dismiss=\"modal\" aria-label=\"Close\" >";
        // line 36
        echo twig_escape_filter($this->env, twig_getfash($this->env, $context, "message"), "html", null, true);
        echo " </div>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input type=\"email\"  name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
         <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
      </form>

    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src=\"https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js\"></script>
     <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script>
        \$(function(\$) {
            var _closes = \$(\".closes\");
            var html = \$.trim(_closes.html());
            if(html.length >0){
                _closes.show();
            }else{
                _closes.hide();
            }
            _closes.click( function () { 
                 \$(this).fadeOut(\"slow\");
             });
          });
       
    </script>  
         
     
  </body>

</html>





";
    }

    public function getTemplateName()
    {
        return "user/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 36,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"zh-CN\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>ANWZ | Signin </title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
   <link href=\"/public/css/signin.css\" rel=\"stylesheet\">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- Custom styles for this template -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>
      
    <div class=\"container\">
        <form class=\"form-signin\" action=\"/user/login\" method=\"post\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <div class=\"alert alert-danger closes\" role=\"alert\" data-dismiss=\"modal\" aria-label=\"Close\" >{{ getfash('message') }} </div>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input type=\"email\"  name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
         <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
      </form>

    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src=\"https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js\"></script>
     <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script>
        \$(function(\$) {
            var _closes = \$(\".closes\");
            var html = \$.trim(_closes.html());
            if(html.length >0){
                _closes.show();
            }else{
                _closes.hide();
            }
            _closes.click( function () { 
                 \$(this).fadeOut(\"slow\");
             });
          });
       
    </script>  
         
     
  </body>

</html>





", "user/login.html", "F:\\Projects\\ANWZ\\app\\view\\user\\login.html");
    }
}
