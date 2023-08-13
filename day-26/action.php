<?php
//echo '<pre>';
//print_r($_GET);

require_once 'vendor/autoload.php';
use App\classes\home;

$home = new home();


if(isset($_GET['page'])){
    if ($_GET['page']=='home')
    {
        $home->index();
    }
    elseif($_GET['page']=='about')
    {
        $home->about();
    }
    elseif($_GET['page']=='service')
    {
        $home->service();
    }
    elseif($_GET['page']=='contact')
    {
        $home->contact();
    }
}
