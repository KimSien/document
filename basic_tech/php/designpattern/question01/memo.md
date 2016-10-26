
basic design.

seve to post data - text,img,category,tag etc
increase data. and set up the plugins.

this case devide class method what and how.
mediator pattern? or command pattern.


------------------------

$request  = new $RequstClass();

all data class implements interface datas class.

$text_data = new TextData($request);
$img_data = new ImgData($request);
$category_data = new CategoryData($request);
etc

$SetCommand = new CommadClass();
$SetCommand->set($text_data);
-
-
$SetCommand->run();


roll back Imgfiles. -> memory keep the local?

-------------------------

interface BaseDate{
    public $requstdata;
}

class TextData implements BaseDate{

    function __construct($requestdata){
        $this->requestdata = $requestdata;
    }

    function run(){
        // this save method
    }

}


--------------------------------------





















