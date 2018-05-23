<div>
	<div>
		<div>
			<h1>Welcome to the CodeIgniterProject</h1>
		</div>
		<div>
			<p>Hey developer, I`m <span style="color: red">JooLuizzz</span></p>
			<p>First of all, thank you all a lot for checking my content, Y'all bros!</p>
			<p>Now, don't forget to configure these files before anything:</p>
			<ul>
				<li>application/config/database.php</li>
				<li>application/config/config.php</li>
				<li>application/config/routes.php</li>
			</ul>
			<p>If your database is bad configured nothing is gonna work (and you'll not even see this message haha), so if you can see this, good adventure!</p>
			<p>Any doubts check the README file or talk to me on <a href="https://www.github.com/JooLuiz" target="_blank">GitHub</a> </p>

		</div>
		<div>
			<p>In case you`re new here, this is your personal online notepad
				<br />
				<a href="<?= base_url() ?>index.php/register">Register Now!</a>
			</p>
		</div>
		<div>
			<p>If you already have an account here, you can simply:
				<br />
				<a href="<?= base_url() ?>index.php/login">login</a>
			</p>
		</div>
		<p><?= $this->session->flashdata('error')?></p>
		<p><?= $this->session->flashdata('logout')?></p>
	</div>
</div>