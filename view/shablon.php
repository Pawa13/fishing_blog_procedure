<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Блог о рыбалке</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style2.css">
	</head>
<body>
	<div>
            <header>
		 <?php include 'view/header.php';?>	
            </header>
            <div class="menu">
                  <?php include 'view/menus.php';?>
            </div>
            <section id="page">
   		<div id="main">
                    
                      <?php include 'controllers/Front_controller.php';?>      
                </div>
                <aside>
                       <?php include 'view/sidebar.php';?>    
                </aside>
            </section>
            <footer>
                     <?php include 'view/footer.php';?>
            </footer>
	</div>
</body>
	</html>

      