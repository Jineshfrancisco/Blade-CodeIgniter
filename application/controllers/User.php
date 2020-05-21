<?php defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller {

    public function index()
    {
        echo $this->blade->view()->make('pages.home');
    }

	public function about()
	{
		echo $this->blade->view()->make('pages.about', ['name' => 'Jinesh Francisco']);

    }

}
