<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laboratory Inventory Management">
    <meta name="author" content="Angel Anne Lopez Sanchez">
    <link rel="shortcut icon" href="images/psulogo.png">


    <style>
      body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #3498db, #ffffff, #f1c40f); 
            margin: 0;
            padding: 0;
            color: #fff;
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
            color: #000; 
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .back {
            position: absolute;
            top: 20px;
            right: 20px; 
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
    <div class="container-fluid">
        <div class="block">
            <div class="block-header">
                <div class="pull-left">&nbsp;About</div>
                <div class="pull-right">
                    <button class="back" onclick="history.back()">Back</button>
                </div>
            </div>
            <div class="block-content">
                <p>MISSION</p>
                <p>THE PANGASINAN STATE UNIVERSITY SHALL PROVIDE A HUMAN-CENTRIC, RESILIENT, AND SUSTAINABLE ACADEMIC ENVIRONMENT TO PRODUCE DYNAMIC, RESPONSIVE, AND FUTURE-READY INDIVIDUALS CAPABLE OF MEETING THE REQUIREMENTS OF THE LOCAL AND GLOBAL COMMUNITIES AND INDUSTRIES</p>
                <hr>
                <p>VISSION</p>
                <p>TO BE A LEADING INDUSTRY-DRIVEN STATE UNIVERSITY IN THE ASEAN REGION BY 2030.</p>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>

</html>
