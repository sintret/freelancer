<?php

class SiteController extends Controller {

    public function index() {
        //echo 'test';

        return $this->render("index", ['var1' => 'oke']);
    }

}
