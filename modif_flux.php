<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themepixels.com/demo/webpage/chain/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2015 14:11:25 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BIGDIG admin</title>

        <link href="css/style.default.css" rel="stylesheet">
        <link href="css/colorpicker.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        
        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="apropos.php" class="logo">
                        <!--<img src="images/minilogo1.png" alt="" /> -->
                        <p style="color:white;">BIGDIG</p>
                    </a>
                    <div class="pull-right">
                        <a href="#" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                    
                    <div class="pull-right">                       
                                                
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li><a href="profil.php"><i class="glyphicon glyphicon-user"></i> Afficher mon profil</a></li>
                              <li class="divider"></li>
                              <li><a href="signin.php"><i class="glyphicon glyphicon-log-out"></i>Déconnexion</a></li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>
        <br>

        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profil.php">
                            <img class="img-circle" src="images/photos/souka.png" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">HAJI Soukaina</h4>
                            <small class="text-muted">Développeur</small>
                        </div>
                    </div><!-- media -->
                    
                    
					<ul class="nav nav-pills nav-stacked">
                        
                        <li class="parent"><a href="utilisateurs.php"><i class="fa fa-user"></i> <span>Utilisateurs</span></a>
                            <ul class="children">
                                <li><a href="utilisateurs.php"> Liste des utilisateurs</a></li>
                                <li><a href="ajouter_utilisateur.php">Ajouter un utilisateur</a></li>
                            </ul>
                        </li>

                        <li class="parent active"><a href="#"><i class="fa fa-rss"></i> <span>Flux</span></a>
                            <ul class="children">
                                <li class="active"><a href="flux.php">Liste des flux</a></li>
                                <li><a href="ajouter_flux.php">Ajouter un flux</a></li>
                            </ul>
                        </li>

                        <li class="parent"><a href="relations.php"><i class="fa fa-link"></i> <span>Relations</span></a>
                            <ul class="children">
                                <li><a href="relations.php">Liste des relations</a></li>
                                <li><a href="ajouter_relation.php">Ajouter relation</a></li>
                            </ul>
                        </li>

                    </ul>
                    
                </div><!-- leftpanel -->

                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-rss"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="flux.php">Flux</a></li>
                                </ul>
                                <h4>Modification d'un flux</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        
                        
                        <div class="row">
                            
                            <div class="col-md-12"> 
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <!--<div class="panel-btns">
                                            <a href="#" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="#" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div>--><!-- panel-btns -->
                                        <h4 class="panel-title">Modifier un flux</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Titre</label>
                                                    <input type="text" name="titre" class="form-control" />
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">URL</label>
                                                    <input type="text" name="url" class="form-control" />
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                        </div><!-- row -->
                                  
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Coleur</label>
                                                    <input name="colorpicker" class="form-control colorpicker-input" placeholder="#000000" id="colorpicker" type="text">
                                                    <span id="colorSelector" class="colorselector">
                                            <span style="background-color: rgb(158, 74, 74);"></span>
                                        </span>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Type de flux</label>
                                                    <div class="rdio rdio-primary">
                                                        <input id="interne" value="i" name="typeflux" required="" type="radio">
                                                        <label for="interne">Interne</label>
                                                    </div><!-- rdio -->
                                                    <div class="rdio rdio-primary">
                                                        <input value="e" id="externe" name="typeflux" type="radio">
                                                        <label for="externe">Externe</label>
                                                    </div><!-- rdio -->
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                        </div><!-- row -->
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <button class="btn btn-primary">Modifier</button>
                                        <button type="reset" class="btn btn-default">Annuler</button>
                                    </div><!-- panel-footer -->
                                </div><!-- panel -->
                                
                            </div><!-- col-md-6 --> 
                        </div><!-- row -->
                    
                    </div><!-- contentpanel -->
                </div>
            </div><!-- mainwrapper -->
        </section>


        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>

        <script src="js/colorpicker.js"></script>

        <script src="js/custom.js"></script>
        
        <script>
        jQuery(document).ready(function() {
             
                // Color Picker
                if(jQuery('#colorpicker').length > 0) {
                    jQuery('#colorSelector').ColorPicker({
			onShow: function (colpkr) {
			    jQuery(colpkr).fadeIn(500);
                            return false;
			},
			onHide: function (colpkr) {
                            jQuery(colpkr).fadeOut(500);
                            return false;
			},
			onChange: function (hsb, hex, rgb) {
			    jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
			    jQuery('#colorpicker').val('#'+hex);
			}
                    });
                }
  
                // Color Picker Flat Mode
                jQuery('#colorpickerholder').ColorPicker({
                    flat: true,
                    onChange: function (hsb, hex, rgb) {
			jQuery('#colorpicker3').val('#'+hex);
                    }
                });
                
                
            });
        </script>

    </body>

<!-- Mirrored from themepixels.com/demo/webpage/chain/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2015 14:11:25 GMT -->
</html>
