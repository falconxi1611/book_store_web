<?php
require_once("database.php");
class M_slide_banner extends database
{
    function Doc_slide_banner()
    {
        $sql="select * from bs_slide_banner";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>