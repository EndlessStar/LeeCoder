<?php

namespace MyProject {

}

namespace {
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    }

    $favcolor = "red";
    switch ($favcolor) {
        case "red":
            echo "red";
            break;
        case "blue":
            echo "blue";
            break;
        default:
            echo "color";
    }

    $cars = array("Volvo", "BWM", "Toyota");
    echo "I link" . $cars[0] . ", " . $cars[1] . "and" . $cars[2] . ".";

    echo "<br>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    print_r($cars);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    $x = 75;
    $y = 25;

    function addition()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z;

    echo "<br>-----------------------<br>";

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['SERVER_ADDR'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo $_SERVER['SERVER_PORT'];
    echo "<br>";
    echo $_SERVER['SERVER_PROTOCOL'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];

    $name = $_REQUEST['fname'];
    echo $name;

    echo "<br>-----------------------<br>";

    $name = $_POST['fname'];
    echo $name;

    echo "<br>-----------------------<br>";

    echo "Study" . $_GET['subject'] . "at" . $_GET['web'];

    $x = array('one', 'two', 'three');
    foreach ($x as $value) {
        echo $value . "<br>";
    }

    function add($x, $y)
    {
        $total = $x + $y;
        return $total;
    }

    echo add(1, 1);

    echo "row: " . __LINE__ . "<br>";
    echo "local: " . __FILE__ . "<br>";

    class Site {
        var $url;
        var $title = "constant string";

        public $public = 'Public';
        protected  $protected = 'Protected';
        private $private = 'Private';

        function  setUri($par) {
            $this->url = $par;
        }

        function  getUrl() {
            echo $this->url . PHP_EOL;
        }

        function  setTitle($par) {
            $this->title = $par;
        }

        function  getTitle() {
            echo $this->title . PHP_EOL;
        }

        function __construct($par1, $par2) {
            $this->url = $par1;
            $this->title = $par2;
        }

        function  __destruct() {
            // TODO: Implement __destruct() method.
            print "destory" . $this->url . PHP_EOL;
        }
    }

    class MySite extends Site {
        function __construct($par1, $par2)
        {
            self::
            parent::__construct($par1, $par2);
        }
    }

    interface iTemplate {
        public function  setVariable($name, $var);
        public function getHtml($template);
    }

    interface iTemplate2 {
        public function  setVariable($name, $var);
        public function getHtml($template);
    }

    class Template extends Site implements iTemplate, iTemplate2 {

    }

    abstract class AbstractClass {
        abstract protected function getValue();
        abstract  private function prefixValue($prefix);
    }

    $php = new Site();
    $taobao = new Site("123","46456");
    $google = new Site();

    $php->setTitle("php china");
    $taobao->setTitle("tao bao");
}
?>
