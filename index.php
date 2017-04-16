
<!DOCTYPE html>
<!--@version $Id: GeographicText.html 3320 2015-07-15 20:53:05Z dcollins $-->
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script data-main="script" src="js/require.js"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron hidden-xs">
        <h1 style="text-align:center">Storj</h1>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <br>
            <h4>Destination</h4>
            <div class="input-group" id="searchBox">
                <input type="text" class="form-control" placeholder="GoTo" id="searchText"/>
                <span class="input-group-btn">
                    <button id="searchButton" class="btn btn-primary" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-sm-9" id="globe">
            <canvas id="canvasOne" width="1000" height="1000" style="width: 100%; height: auto">
                Your browser does not support HTML5 Canvas.
            </canvas>
        </div>
    </div>
</div>
</body>
</html>