<?php
/**
 * Created by PhpStorm.
 * User: HZ
 * Date: 2/27/2015
 * Time: 11:37 AM
 */
?>
<?php

class SubNavigation
{
    public $navTabs = array(
        /**
         * Hide those left navigation tab by Hao Zhang 05/06/2015
         */
        /*"cbAbout" => "Details"
        ,*/
        "solarAirLantern" => "Solar Air Lantern",
        "grenade" => "Grenade Paracord",
        "patrioticParacord" => "Patriotic Paracord",
        "cobraBelt" => "Cobra Belt",
        "lifestraw" => "LifeStraw",
        "playingCards" => "Playing Cards",
        "emergencySurvivalBlanket" => "Emergency Survival Blanket"

    );
    public function renderNavTabs($tabs)
    {
        $linkHeader = $this->getSubNavLink();
        $cnt = 0;
        $isActiveClass = "class='active'";
        $flagActiveClass = 0;
        echo "<ul class='nav nav-tabs left-tabs' role='tablist' id='clickBankTab'>";
        foreach($tabs as $key => $value)
        {
            $cnt++;
            if($cnt > $flagActiveClass){
                $isActiveClass = "";
            }
            echo "<li role='presentation' $isActiveClass>";
            if($linkHeader === ""){
                echo "<a href='$linkHeader#$key' aria-controls='$key' role='tab' data-toggle='tab'>$value</a>";
            }else{
                echo "<a href='$linkHeader#$key'>$value</a>";
            }
            echo "</li>";
        }
        echo "<li role='presentation'><a href='survivalfrog.php'>E-Commerce</a></li>";
        echo "</ul>";
    }

    private function getSubNavLink(){
        $currentLink = $_SERVER['REQUEST_URI'];
        $subNavLink = explode("/", $currentLink);
        $subNavLink = array_pop($subNavLink);
        if($subNavLink !== "affiliatecontest.php"){
            return "affiliatecontest.php";
        }else{
            return "";
        }
    }
}

$subNavHelper = new SubNavigation();
?>