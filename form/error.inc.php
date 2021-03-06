<style type="text/css">
  body {
    background: url(../images/pool.jpg) no-repeat;
    background-size: cover;
    font: 18px 'Muli', sans-serif;
    color: #3F94A8;
  }

  div {
    background-color: white;
    margin: 10px;
    padding: 20px;
		width: 50%;
  }
</style>

<div>
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
