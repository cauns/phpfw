<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* errors/403.twig */
class __TwigTemplate_697ffeedfb7d6d17e11dfdf562ef082dac4fdf9ec187199b8f2c7615a118950c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
<head>
    <title>404 - page not found</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Arvo\" rel=\"stylesheet\">
    <style>

        /*======================
            404 page
        =======================*/


        .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
        }

        .page_404  img{ width:100%;}

        .four_zero_four_bg{

            background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
            height: 400px;
            background-position: center;
        }


        .four_zero_four_bg h1{
            font-size:80px;
        }

        .four_zero_four_bg h3{
            font-size:80px;
        }

        .link_404{
            color: #fff!important;
            padding: 10px 20px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;}
        .contant_box_404{ margin-top:-50px;}
    </style>
</head>
<body>
    <section class=\"page_404\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 \">
                    <div class=\"col-sm-10 col-sm-offset-1  text-center\">
                        <div class=\"four_zero_four_bg\">
                            <h1 class=\"text-center \">404</h1>


                        </div>

                        <div class=\"contant_box_404\">
                            <h3 class=\"h2\">
                                Look like you're lost
                            </h3>

                            <p>the page you are looking for not avaible!</p>

                            <a href=\"\" class=\"link_404\">Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "errors/403.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "errors/403.twig", "D:\\OpenServer\\domains\\localhost\\phpfw\\src\\resources\\views\\errors\\403.twig");
    }
}
