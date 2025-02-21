
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/style/style.css">

</head>

<body>

<div id="grid-form">

<section>

<p>tototo</p>
</section>

<form class="form-horizontal" action="/tumblrdev/form-signin" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="" value="<?= $email; ?>">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Mot de passe</label>
  <div class="col-md-5">
    <input id="password" name="password" type="password" placeholder="Mot de passe" class="form-control input-md" required="" >
    <span class="help-block">minimum 8 caractères, avec au moins une majuscule, une minuscule, un chiffre, et un caractère spécial</span>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  
  <div class="col-md-4">
    <input type="submit" name="submit" value="connexion">
  </div>
</div>

<div>
    <?php if(isset($error)): ?>
        <p><?= $error; ?></p>
    <?php endif; ?>
</div>

</fieldset>
</form>

</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  

</body>
</html>
