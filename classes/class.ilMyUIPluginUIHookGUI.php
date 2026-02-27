<?php

class ilMyUIPluginUIHookGUI extends ilUIHookPluginGUI
{
    public function modifyPage($a_comp, $a_part, $a_par, $a_html)
    {
        return $a_html;
    }
}