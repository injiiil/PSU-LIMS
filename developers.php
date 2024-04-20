<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laboratory Inventory Management">
    <meta name="author" content="Angel Anne Sanchez">
    <link rel="shortcut icon" href="images/psulogo.png">

    <title>DEVELOPERS</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #3498db, #ffffff, #f1c40f); /* Blue to White to Yellow gradient */
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .block {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .block-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .block-content {
            padding: 10px;
        }

        .developer-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .developer-info img {
            border-radius: 50%;
            max-width: 100px;
            border: 2px solid #ccc;
        }
		.container-fluid {
            margin: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .block {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .block-header {
            background: #3498db;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .block-content {
            padding: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #000; /* Set paragraph text color to black */
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-button {
            position: absolute;
            top: 20px;
            right: 20px; /* Adjust the right position as needed */
            background-color: #3869d4;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
    
    </style>
</head>

<body id="home">
    <?php include('navbar_about.php'); ?>
    <div class="container">
        <div class="block">
            <div class="block-header">
                <h3><i class="icon-group"></i>&nbsp;DEVELOPERS</h3>
                <a href="index.php" class="back-button">Back <i class="icon-arrow-left"></i></a>
            </div>
            <div class="block-content">
                <div class="developer-info">
                    <img src="adminPSU/developers/injil.jpg" class="img-square">
                    <hr>
                    <p>Name: Angel Anne L. Sanchez</p>
                    <p>Address: #249 st.Burgos, Bolingit San Carlos City Pangasinan</p>
                    <p>Email: zangelanne532@gmail.com</p>
                    <p>Position: Developer</p>
					<p>Facebook: <a href="https://www.facebook.com/elaysanchez040521" target="_blank">Visit Profile</a></p>
                </div>

                <div class="developer-info">
                    <img src="adminPSU/developers/jim.jpg" class="img-square">
                    <hr>
                    <p>Name: Jimwell Mendoza</p>
                    <p>Address: Brgy. Bega </p>
                    <p>Email: jimwell@gmail.com</p>
                    <p>Position: Project Manager</p>
					<p>Facebook: <a href="https://www.facebook.com/jimwell1226" target="_blank">Visit Profile</a></p>
                </div>

                <div class="developer-info">
                    <img src="adminPSU/developers/jheus.jpg" class="img-square">
                    <hr>
                    <p>Name: Jheus H. Valdez</p>
                    <p>Address: Brgy. Basista</p>
                    <p>Email: jheus@gmail.com</p>
                    <p>Position: Document Specialist</p>
					<p>Facebook: <a href="https://www.facebook.com/jheusglen.valdez" target="_blank">Visit Profile</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <?php include('script.php'); ?>
</body>

</html>
