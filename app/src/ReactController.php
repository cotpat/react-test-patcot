<?php

namespace {
    use SilverStripe\View\Requirements;
    use SilverStripe\Control\Controller;

    class ReactController extends Controller
    {
        // /**
        //  * @config
        //  * redirect all URLs to this controller's index method
        //  */
        // private static $url_handlers = [
        //     '$@' => 'index'
        // ];


        /**
         * @config
         */
        private static $allowed_actions = [
            'index' => true
        ];


        /**
         * index - default action
         *
         * @return String  description
         */
        public function index()
        {
            // Requirements::javascript('app/client/react/bundle.js');
            return $this->renderWith('ReactPage');
        }
    }

}
