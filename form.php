<?php if(!empty($_POST) && $_POST['form']==="button_value") { ?>
<div class="result">
<b>Values returned by the form:</b><br>
<ul>
<?php foreach($_POST as $key => $value) { echo'<li>'.$key.' =>'.$value.'</li>';
} ?>
</ul>
</div>
<?php }?>