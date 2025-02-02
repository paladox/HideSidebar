<?php
class HideSidebarHooks {
    public static function efHideSidebar($skin, &$bar) {
        global $wgUser;
        // Hide sidebar for anonymous users
        if (!$wgUser->isLoggedIn()) {
            $url = Title::makeTitle(NS_SPECIAL, 'UserLogin')->getLocalUrl();
            $bar = array(
                'navigation' => array(
                    array('text'   => 'Login',
                          'href'   => $url,
                          'id'     => 'n-login',
                          'active' => '')
                )
            );
        }
        return true;
    }
}
