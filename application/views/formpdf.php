<?php $this->load->view('header');  ?>
<?php $this->load->view('headertitle');  ?>
<p class="text-center">	
	Hello, this just a simple <strong>HTML</strong> template.
	I'm a variable passed from the controller, my content is <br/>
	<blockquote>
		<?php echo $the_content; ?>
	</blockquote>
</p>
<?php $this->load->view('footer'); ?>