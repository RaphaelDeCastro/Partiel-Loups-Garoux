<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>">
            <link rel="stylesheet" href="/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/formulaire.css" type="text/css">
	        <link rel="stylesheet" href="/css/ecriture.css">
    </head>
    <body>
    <div class="container">
    <div class="jumbotron mt-3">
        <h1 class="display-3" style="text-align:center">Paramètre de la partie</h1>
    </div>

     <div class="form-group">
      <label for="name" class="form-label mt-4">Nom du joueur</label>
      <input type="name" class="form-control" id="name" placeholder="Name">
    </div>

    <div class="form-group">
      <label for="nbjoueur" class="form-label mt-4">Nombre de joueur</label>
      <select class="form-select" id="nbjoueur">
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
      </select>
    </div>

        <div class="row">
			<p class="lead">
                <button type="button" href="" class="btn btn-primary disabled" onclick="window.location=''">Commencer la partie</button>
        	</p>
		</div>
</div>
    </body>
    <footer>
        <script src="/js/bootstrap.bundle.min.js"></script>
    </footer>
</html>
