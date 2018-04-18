<!--
Name: Aylwin Sim
ID: 100074144
Date: 08/04/2018
Title: Testing Pass all datas from MySQL to AngularJS controller
-->
<?php
    include ("server.php");
?>

<!DOCTYPE html>
<html data-ng-app="myApp">
    <head>
        <title>Customize Menu</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,
                                       initial-scale=1.0" />
        <!-- Bootstrap -->
        <link href="framework/css/bootstrap.min.css" rel="stylesheet" /> <!-- HTML5 Shim and Respond.js IE8 support of HTML5
        elements and media queries --> <!-- WARNING: Respond.js doesn't work if you view the
                                       page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script> <script src="js/respond.min.js"></script>
               <![endif]-->
    </head>
    <body data-ng-controller="myCtrl">
        <div class="container">
        <h1>food_item</h1>

        <form method="post" action="">

        <div class="form-row">
            <div class="form-group col-sm-8">
                <label for="angName">Name</label>
                <input type="text" name="food_name" id="angName" class="form-control" data-ng-model="angFoodName" required/>
                                
            </div>
            
            
            <div class="form-group col-sm-4">
                <label for="angPrice">Description</label>
                <input type="text" name="food_description" id="angPrice" class="form-control" data-ng-model="angFoodDescription" required/>
                                
            </div>
        
        </div>

        <div class="form-row">
                <div class="form-group">
                    <input type="submit" value="add" name="add_food_item" class="btn-success btn-lg"/>
                </div>

                <!--<p>angFoodName: {{angFoodName}}</p>
                <p>angFoodDescription: {{angFoodDescription}}</p>-->

        </div>

        </form>
        
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            
            <tbody data-ng-repeat="f in foods">
                <tr>
                    <td>{{f.id}}</td>
                    <td>{{f.name}}</td>
                    <td>{{f.description}}</td>
                </tr>
            
            </tbody>
        </table>

        <form method="post" action="">

            <h1>menu_item</h1>
            <div class="form-row">
            <div class="form-group col-sm-8">
                <label for="angName">Name</label>
                <input type="text" name="menu_name" id="angName" class="form-control" data-ng-model="angMenuName" required/>
                                
            </div>
            
            
            <div class="form-group col-sm-4">
                <label for="angPrice">Description</label>
                <input type="text" name="menu_description" id="angPrice" class="form-control" data-ng-model="angMenuDescription" required/>
                                
            </div>
        
        </div>

        <div class="form-row">
                <div class="form-group">
                    <input type="submit" value="add" name="add_menu_item" class="btn-success btn-lg"/>
                </div>


        </div>


        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            
            <tbody data-ng-repeat="m in menus">
                <tr>
                    <td>{{m.id}}</td>
                    <td>{{m.name}}</td>
                    <td>{{m.description}}</td>
                </tr>
            
            </tbody>
        </table>

        <form method="post" action="">

            <h1>menu</h1>
            <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="menu_name">Menu</label>
                <!--<input type="text" name="menu_name" id="angName" class="form-control" data-ng-model="angFoodName" required/>
                 -->
                <select id="menu_name" class="form-control" data-ng-model="angMenu">
                    <option data-ng-repeat="m in menus" value="{{m.id}}">{{m.name}}</option>
                </select>  
            </div>
            
            
            <div class="form-group col-sm-6">
                <label for="food_name">Add Food</label>
                <select id="food_name" class="form-control" data-ng-model="angFood">
                    <option data-ng-repeat="f in foods" value="{{f.id}}">{{f.name}}</option>
                </select>
                                
            </div>
        
            </div>

        <div class="form-row">
                <div class="form-group">
                    <input type="submit" value="add" name="add_food_to_menu" class="btn-success btn-lg" data-ng-click="postData()"/>
                </div>

                <!--<p>{{angMenu}}</p>
                <p>{{angFood}}</p>-->

        </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Menu_ID</th>
                    <th>Menu_Name</th>
                    <th>Food_ID</th>
                    <th>Food_Name</th>
                </tr>
            </thead>
            
            <tbody data-ng-repeat="mix in mixes">
                <tr>
                    <td>{{mix.id}}</td>
                    <td>{{mix.name}}</td>
                    <td>{{mix.food_id}}</td>
                    <td>{{mix.food_name}}</td>
                </tr>
            
            </tbody>
        </table>
    </div>


        
        <script src="framework/js/jquery.min.js"></script>
        <!-- All Bootstrap plug-ins file -->
        <script src="framework/js/bootstrap.min.js"></script>
        <!-- Basic AngularJS -->
        <script src="framework/js/angular.min.js"></script>
        <!-- My Controller --> 
        <script src="controller.js"></script>
    </body>
</html>