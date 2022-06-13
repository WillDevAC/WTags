<div class="wrap">
	<?php

		$preferences = file_get_contents('store/preferences.txt');
		$preferences = explode(";", $preferences);
		
		$links = file_get_contents('store/links.txt');

        $image = file_get_contents('store/image.txt');

	?>
	
	<h1>WTags - Bloqueio inteligente</h1>

	<?php

		echo "<br>
		<label for='versaominima'>Link da logo: </label>
		<input type='text' value='". $image ."'>
		<br>";

		echo "<br>
		<label for='versaominima'>Versão Miníma (Artis Browser): </label>
		<input type='text' value='". $preferences[6] ."'>
		<br>";

		echo '
		<br><label for="urlprotegida">URL Protegidas:</label>
		<br><br>
		<textarea id="urlprotegida" rows="6" cols="50" placeholder="Separe suas URL por ,">'. $links .'</textarea><br><br>
		';
	?>

	<?php
    echo "<form action='' method='POST'>";
		if($preferences[0] == "true"){
			echo '<input type="checkbox" name="allowkeyboard" checked>';
			echo '<label for="allowkeyboard"> Allow Keyboard</label><br>';
		}else if($preferences[0] == "false"){
			echo '<input type="checkbox" name="allowkeyboard">';
			echo '<label for="allowkeyboard"> Allow Keyboard</label><br>';
		}

		if($preferences[1] == "true"){
			echo '<input type="checkbox" name="allowremote" checked>';
			echo '<label for="allowremote"> Allow Remote</label><br>';
		}else if($preferences[1] == "false"){
			echo '<input type="checkbox" name="allowremote">';
			echo '<label for="allowremote"> Allow Remote</label><br>';
		}

		if($preferences[2] == "true"){
			echo '<input type="checkbox" name="allowwindows" checked>';
			echo '<label for="allowwindows"> Allow Windows</label><br>';
		}else if($preferences[2] == "false"){
			echo '<input type="checkbox" name="allowwindows">';
			echo '<label for="allowwindows"> Allow Windows</label><br>';
		}

		if($preferences[3] == "true"){
			echo '<input type="checkbox" name="allowmacosx" checked>';
			echo '<label for="allowmacosx"> Allow Mac OSX</label><br>';
		}else if($preferences[3] == "false"){
			echo '<input type="checkbox" name="allowmacosx">';
			echo '<label for="allowmacosx"> Allow Mac OSX</label><br>';
		}

		if($preferences[4] == "true"){
			echo '<input type="checkbox" name="allowandroid" checked>';
			echo '<label for="allowandroid"> Allow Android</label><br>';
		}else if($preferences[4] == "false"){
			echo '<input type="checkbox" name="allowandroid">';
			echo '<label for="allowandroid"> Allow Android</label><br>';
		}

		if($preferences[5] == "true"){
			echo '<input type="checkbox" name="allowios" checked>';
			echo '<label for="allowios"> Allow iOS</label><br>';
		}else if($preferences[5] == "false"){
			echo '<input type="checkbox" name="allowios">';
			echo '<label for="allowios"> Allow iOS</label><br>';
		}

        echo '<br><button type="submit">Salvar alterações</button>';
    echo "</form>";

    if(isset($_POST['allowkeyboard'])) {
        echo "Postou!";
    }

	?>
</div>