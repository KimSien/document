<?php
/**
* plugin pattern. used chain method?
*/
abstract class Gk
{
    protected $data;

    public function __construct()
    {
    }
    public function set_data($data)
    {
        $this->data = $data;
    }

    public function get_data()
    {
        return $this->data;
    }

    public function view()
    {
        echo $this->data;
    }
}


/**
*
*/
class Gk_t extends Gk
{
    private $array;

    public function __construct()
    {
        $this->set_data("--contnets--");
    }

    public function data_decorate($func)
    {
        $this->set_data(
        call_user_func($func, $this->data)
        );
    }

    public function data_decorate_list($func, $order)
    {
        
        //if(isset())
        $this->array[$order] = $func;
    }

    public function run()
    {
        ksort($this->array);
        foreach ($this->array as $value) {
            $this->data_decorate($value);
        }

        $this->view();
    }
}





// setup
$Gk_t = new Gk_t();

// pugin
$Gk_t->data_decorate_list("settingset1", 3);
$Gk_t->data_decorate_list("settingset2", 1);
$Gk_t->data_decorate_list("settingset3", 2);

//view
$Gk_t->run();




// callback plugin
function settingset1($data)
{
    return $data." test1 ";
};


function settingset2($data)
{
    return $data." test2 ";
};

function settingset3($data)
{
    $data = $data." 33333 ";
    return $data;
};

echo 1;

echo 33;
