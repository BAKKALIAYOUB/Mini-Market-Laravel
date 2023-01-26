<!DOCTYPE html>
<html>
  <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        /* Add a background color */
        form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
        }

        /* Add some spacing between form elements */
        .form-group {
            margin-bottom: 20px;
        }

        /* Style the labels */
        label {
            font-weight: bold;
        }

        /* Style the inputs */
        input[type="text"], input[type="file"] {
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Style the submit button */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Add a hover effect for the submit button */
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
  </head>

  <body>
    <form class="form-horizontal"  method="GET"  action="AjouterProduit" style="width: 1100px;">
        @csrf
        <!-- Form Name -->
        <legend>PRODUIT A AJOUTER </legend>

        <!-- Text input-->
      


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION </label>  
          <div class="col-md-4">
          <input id="product_name_fr" name="Description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" required="" type="text">
            
          </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="available_quantity">URL</label>  
          <div class="col-md-4">
            <input id="available_quantity" name="URL" placeholder="URL" class="form-control input-md" required="" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="available_quantity">PRIX</label>  
          <div class="col-md-4">
          <input id="available_quantity" name="Prix" placeholder="Prix" class="form-control input-md" required="" type="text">
            
        </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="available_quantity">Categories</label>
        </div>
        <div style="margin-left:40%;">  
          <div class="form-group" style="margin:auto;">
            <input type="radio" name="option" value="Sweatshirts"><label>Sweatshirts</label>
          </div>
          <div class="form-group" style="margin:auto;">
            <input type="radio" name="option" value='Pantalons'><label>Pantalons</label>
          </div>
          <div class="form-group" style="margin:auto;">
            <input type="radio" name="option" value="Sacs"><label>Sacs</label>
          </div>
          <div class="form-group" style="margin:auto;">
            <input type="radio" name="option" value="Chaussures"><label>Chaussures</label>
          </div>
        </div>

          
        <!-- File Button --> 
        

        <div>
          <input style="float:top; margin: 20px;" type="submit" value="Envoyer">
        </div>



    </form>
  </body>
</html>