<?php $title_page="CONTACT";?>
<?php $current_page="contact"; ?>



<div class='bloc'>
	<h1><?php echo $title_page;?></h1>
	<form method="POST"  accept-charset="UTF-8">
	<!-- nom -->
	<p><label for="name">Name</label></p>
	<p><input type="text" name="name" id="name"></p>

	<!-- email -->
	<p><label for="email">Email</label></p>
	<p><input type="text" name="email" id="email"></p>

	<!-- le champ de sujet -->
	<p><label for="subject">Subject</label></p>
	<p><input type="text" name="subject" id="subject"></p>

	<!-- le Corps du message -->
	<p><label for="message">Message</label></p>
	<p><textarea name="message" id="message" rows="10" cols="50"></textarea></p>

	
	<!-- submit button -->
	<p><input type="submit" value="send"></p>
	</form>
</div>