<?php
class Ncaq_Keys extends Plugin {
    private $host;

    function about() {
        return array(1.0, "ncaq keybind", "ncaq");
    }

    function init($host) {
        $this->host = $host;
        $host->add_hook($host::HOOK_HOTKEY_MAP, $this);
    }

    function hook_hotkey_map($hotkeys) {
        $hotkeys["m"]          = "toggle_unread";
        $hotkeys["n"]          = "next_article_noscroll";
        $hotkeys["r"]          = "feed_refresh";
        $hotkeys["t"]          = "prev_article_noscroll";
        $hotkeys["v"]          = "open_in_new_window";
        $hotkeys["z"]          = "toggle_publ";

        unset($hotkeys["a"]);
        unset($hotkeys["e"]);
        unset($hotkeys["h"]);
        unset($hotkeys["p"]);
        unset($hotkeys["s"]);

        return $hotkeys;
    }

    function api_version() {
        return 2;
    }
}
?>
