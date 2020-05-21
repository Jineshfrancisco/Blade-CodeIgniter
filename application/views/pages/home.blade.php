@extends('Layout.master')

@section('title', 'Home Page')

@section('content')
	<h1>Welcome to Blade Templating for Codeigniter 3.1.11</h1>
	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter with Blade template.</p>

		<p>make sure your controller must extends <strong>MY_Cotroller</strong> </p>
		<code>class User extends MY_Controller {

			public function index()
			{
			echo $this->blade->view()->make('welcome_message');
			}

			}</code>

		<p>Your Views file format must <strong>fileName.blade.php</strong> </p>
		<code>application/views/welcome_message.blade.php</code>

		<p>You can visit  <strong>coolpraz/php-blade</strong> at  </p>
		<code>https://packagist.org/packages/coolpraz/php-blade</code>

		<p>Happy Coding ...Blade with codeIgniter by <strong>Jinesh Fransico</strong> visit me at</p>
		<code>https://github.com/Jineshfrancisco/</code>


	</div>
@endsection
