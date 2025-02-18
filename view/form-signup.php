<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/tumblrdev/assets/style/style.css">

</head>

<body>

<div id="grid-form">

<section>

<p>tototo</p>
</section>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nom</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="Entrez votre nom" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pseudo">Pseudo</label>  
  <div class="col-md-5">
  <input id="pseudo" name="pseudo" type="text" placeholder="Pseudo" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Mot de passe</label>
  <div class="col-md-5">
    <input id="password" name="password" type="password" placeholder="Mot de passe" class="form-control input-md" required="">
    <span class="help-block">minimum 8 caractères, avec au moins une majuscule, une minuscule, et un caractère spécial</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="repassword">Confirmation du mot de passe</label>
  <div class="col-md-5">
    <input id="repassword" name="repassword" type="password" placeholder="Confirmation du mot de passe" class="form-control input-md" required="">
    <span class="help-block">merci de confirmer votre mot de passe pour pouvoir vous inscrire</span>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nl_follower">Abonnement</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="nl_follower-0">
      <input type="radio" name="nl_follower" id="nl_follower-0" value="1" checked="checked">
      Newsletter
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pb_follower"></label>
  <div class="col-md-4">
  <div class="radio">
    <label for="pb_follower-0">
      <input type="radio" name="pb_follower" id="pb_follower-0" value="1" checked="checked">
      suivi des nouvelles publications
    </label>
	</div>
  </div>
</div>

</fieldset>
</form>

</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  

</body>
</html>
