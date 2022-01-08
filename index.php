<?php

$response = json_decode(file_get_contents("https://api.chucknorris.io/jokes/random"), true);

if(!empty($response)){
	?>
		<img src="<?=$response['icon_url']?>" /><br/><br/>

		<p> Joke: </p>
		<p><?=$response['value']?></p>
	<?php
}
