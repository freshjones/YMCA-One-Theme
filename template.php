<?php

/**
* implements hook_css_alter
*/
function ymca_one_css_alter(&$css) 
{

    /* we will use our own css */
    if (isset($css['sites/all/modules/contrib/socialfield/css/socialfield.css'])) {
        unset($css['sites/all/modules/contrib/socialfield/css/socialfield.css']);
    }
    
    if (isset($css['sites/all/modules/contrib/facebook_pull/facebook_pull.css'])) {
        unset($css['sites/all/modules/contrib/facebook_pull/facebook_pull.css']);
    }
    
    if (isset($css['sites/all/modules/contrib/panels/css/panels.css'])) {
        unset($css['sites/all/modules/contrib/panels/css/panels.css']);
    }
    
    if (isset($css['sites/all/modules/contrib/views/css/views.css'])) {
        unset($css['sites/all/modules/contrib/views/css/views.css']);
    }
   
    if (isset($css['modules/node/node.css'])) {
        unset($css['modules/node/node.css']);
    }
   
    if (isset($css['modules/field/theme/field.css'])) {
        unset($css['modules/field/theme/field.css']);
    }
    
    if (isset($css['modules/system/system.theme.css'])) {
        unset($css['modules/system/system.theme.css']);
    }
  
    if (isset($css['modules/system/system.menus.css'])) {
        unset($css['modules/system/system.menus.css']);
    }
    
    if (isset($css['modules/user/user.css'])) {
        unset($css['modules/user/user.css']);
    }
    
    if (!variable_get('preprocess_css')) 
    {
        foreach ($css as $key => $value) {
            $css[$key]['preprocess'] = FALSE;
        }
    }
   
}