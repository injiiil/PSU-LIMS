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
            color: #000; /* Set paragraph text color to black */
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
    <div class="container-fluid">
        <div class="block">
            <div class="block-header">
                <div class="pull-left">&nbsp;HISTORY</div>
                <div class="pull-right">
                    <button class="back" onclick="history.back()">Back</button>
                </div>
            </div>
            <div class="block-content">
                <p>Pangasinan State University (PSU) traces its roots back to 1979 when it was established by Presidential Decree No. 1497. 
                From its inception, PSU has been a cornerstone of education in the Pangasinan province of the Philippines. 
                
                Since its founding, PSU has undergone significant growth and development. It has expanded its academic offerings, 
                research endeavors, and community engagement initiatives. The university has continually adapted to meet the evolving needs of its students and stakeholders.

                PSU operates multiple campuses throughout Pangasinan, each offering a wide range of academic programs. These campuses serve as hubs for learning, 
                innovation, and collaboration, providing students with opportunities for holistic development.
                
                Committed to academic excellence and societal impact, PSU places a strong emphasis on research and community service. 
                It collaborates with various institutions, both locally and internationally, to address pressing issues and contribute to the region's development.

                Over the years, PSU has garnered recognition for its outstanding achievements in education, research, and outreach. 
                Accredited by reputable organizations, the university upholds rigorous standards of quality and integrity in all its endeavors.

                As it looks to the future, PSU remains steadfast in its commitment to providing accessible, affordable, and quality education to its students. 
                With a focus on innovation, sustainability, and inclusivity, PSU continues to shape the next generation of leaders and changemakers in Pangasinan and beyond.</p>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>
</html>
