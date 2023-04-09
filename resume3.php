<?php

$name = $_POST['name'];
$job_title = $_POST['job_title'];
$profile = $_POST['profile'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$level1=$level2=$level3="";
$lan1=$lan2=$lan3="";
$skill1=$skill2=$skill3="";
$hobby1=$hobby2=$hobby3="";

if (isset($_POST['School1'])) {
    $school1 = $_POST['School1'];
    $year1 = $_POST['Year1'];
    $percentage1 = $_POST['percentage1'];
    $edu1 = "<strong>High School</strong><br>Institution : " . $school1 . "<br>Year Of Passing : " . $year1 . "<br>Percentage/CGPA : " . $percentage1 . "<br>";
} else {
    $edu1 = "";
}
if (isset($_POST['School2'])) {
    $school2 = $_POST['School2'];
    $year2 = $_POST['Year2'];
    $percentage2 = $_POST['percentage2'];
    $edu2 = "<strong>Intermediate</strong><br> Institution : " . $school2 . "<br>Year Of Passing : " . $year2 . "<br>Percentage/CGPA : " . $percentage2 . "<br>";
} else {
    $edu2 = "";
}
if (isset($_POST['college1'])) {
    $school3 = $_POST['college1'];
    $year3 = $_POST['Year3'];
    $percentage3 = $_POST['percentage3'];
    $edu3 = "<strong>Graduation</strong><br> Institution : " . $school3 . "<br>Year Of Passing : " . $year3 . "<br>Percentage/CGPA : " . $percentage3 . "<br>";
} else {
    $edu3 = "";
}
if (isset($_POST['college2'])) {
    $school4 = $_POST['college2'];
    $year4 = $_POST['Year4'];
    $percentage4 = $_POST['percentage4'];
    $edu4 = "<strong>Post Graduation</strong><br> Institution : " . $school4 . "<br>Year Of Passing : " . $year4 . "<br>Percentage/CGPA : " . $percentage4 . "<br>";
} else {
    $edu4 = "";
}
////////////////////////////////////////////////////////////////////////////////////////////////////

if ($_POST['experience1_heading'] != "") {
    $exp_heading1 = $_POST['experience1_heading'];
    $company1 = $_POST['company1'];
    $exp1 = $_POST['experience1'];
    $Experience1 = "<h3>Experience</h3><hr><ul><li> <strong>" . $exp_heading1 . " : " . $company1 . "</strong> <br>" . $exp1 . "</li>";
} else {
    $Experience1 = "";
}
if ($_POST['experience2_heading'] != "") {
    $exp_heading2 = $_POST['experience2_heading'];
    $company2 = $_POST['company2'];
    $exp2 = $_POST['experience2'];
    $Experience2 = "<li> <strong>" . $exp_heading2 . " : " . $company2 . "</strong> <br>" . $exp2 . "</li>";
} else {
    $Experience2 = "";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////

if (($_POST['Skill1name'] != "") || ($_POST['Skill2name'] != "") || ($_POST['Skill3name'] != "")) {
    $skill1 = $_POST['Skill1name'];
    $skill2 = $_POST['Skill2name'];
    $skill3 = $_POST['Skill3name'];
    if ($_POST['Skill1name'] != "") {
        switch ($_POST['Skill1']) {
            case 1:
                $level1 = "Novice</li>";
                break;
            case 2:
                $level1 = "Beginner</li>";
                break;
            case 3:
                $level1 = "Skillful</li>";
                break;
            case 4:
                $level1 = "Experienced</li>";
                break;
            case 5:
                $level1 = "Expert</li>";
                break;
        }
        $skill1 = "<h3>Skills</h3>
                    <hr>
                    <ul><li>" .$_POST['Skill1name'] . " : " . $level1;
    } else {
        $skill1 = "";
    }

    if ($_POST['Skill2name'] != "") {
        switch ($_POST['Skill2']) {
            case 1:
                $level2 = "Novice</li>";
                break;
            case 2:
                $level2 = "Beginner</li>";
                break;
            case 3:
                $level2 = "Skillful</li>";
                break;
            case 4:
                $level2 = "Experienced</li>";
                break;
            case 5:
                $level2 = "Expert</li>";
                break;
        }
        $skill2 = "<li>" . $_POST['Skill2name'] . " : " . $level2;
    } else {
        $skill2 = "";
    }

    if ($_POST['Skill3name'] != "") {
        switch ($_POST['Skill3']) {
            case 1:
                $level3 = "Novice</li>";
                break;
            case 2:
                $level3 = "Beginner</li>";
                break;
            case 3:
                $level3 = "Skillful</li>";
                break;
            case 4:
                $level3 = "Experienced</li>";
                break;
            case 5:
                $level3 = "Expert</li>";
                break;
        }
        $skill3 = "<li>" . $_POST['Skill3name'] . " : " . $level3;
    } else {
        $skill3 = "";
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////

if (($_POST['lan1Name'] != "") || ($_POST['lan2Name'] != "") || ($_POST['lan3Name'] != "")) {
    if ($_POST['lan1Name'] != "") {
        switch ($_POST['lan1']) {
            case 1:
                $level1 = "Novice</li>";
                break;
            case 2:
                $level1 = "Beginner</li>";
                break;
            case 3:
                $level1 = "Skillful</li>";
                break;
            case 4:
                $level1 = "Experienced</li>";
                break;
            case 5:
                $level1 = "Expert</li>";
                break;
        }
        $lan1 = "<h3>Languages</h3> <hr> <ul> <li>" . $_POST['lan1Name'] . " : " . $level1;
    }
    if ($_POST['lan2Name'] != "") {
        switch ($_POST['lan2']) {
            case 1:
                $level2 = "Novice</li>";
                break;
            case 2:
                $level2 = "Beginner</li>";
                break;
            case 3:
                $level2 = "Skillful</li>";
                break;
            case 4:
                $level2 = "Experienced</li>";
                break;
            case 5:
                $level2 = "Expert</li>";
                break;
        }
        $lan2 = "<li>" . $_POST['lan2Name'] . " : " . $level2;
    }
    if ($_POST['lan3Name'] != "") {
        switch ($_POST['lan3']) {
            case 1:
                $level3 = "Novice</li>";
                break;
            case 2:
                $level3 = "Beginner</li>";
                break;
            case 3:
                $level3 = "Skillful</li>";
                break;
            case 4:
                $level3 = "Experienced</li>";
                break;
            case 5:
                $level3 = "Expert</li>";
                break;
        }
        $lan3="<li>" . $_POST['lan3Name'] . " : " .$level3;
    }
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (($_POST['hobby1'] != "") || ($_POST['hobby2'] != "") || ($_POST['hobby3'] != "")) {

    if ($_POST['hobby1'] != "") {
        $hobby1 = "<h3>Hobbies And Interests</h3><hr><ul> <li>" . $_POST['hobby1'] . "</li>";
    } else {
        $hobby1 = "";
    }

    if ($_POST['hobby2'] != "") {
        $hobby2 = "<li>" . $_POST['hobby2'] . "</li>";
    } else {
        $hobby1 = "";
    }

    if ($_POST['hobby3'] != "") {
        $hobby3 = "<li>" . $_POST['hobby3'] . "</li>";
    } else {
        $hobby1 = "";
    }
}


$EXPERIENCE = $Experience1 . $Experience2 . "</ul>";
$EDUCATION = $edu1 . $edu2 . $edu3 . $edu4 . "</ul>";
$SKILL = $skill1 . $skill2 . $skill3 . "</ul>";
$LANGUAGE = $lan1 . $lan2 . $lan3 . "</ul>";
$HOBBY = $hobby1 . $hobby2 . $hobby3 . "</ul>";

$data = "<html lang='en'>
<head>
<title></title>
    <style>
    body
    {
       background: #000000;
background: -webkit-linear-gradient(right, #000000, #FFFFFF);
background: -moz-linear-gradient(right, #000000, #FFFFFF);
background: linear-gradient(to left, #000000, #FFFFFF);
       border:4px solid black;
       }
        table
        {
            margin:30px;
            border:4px solid black;
            font-size:20px;
        }
        ul{
  list-style-type: circle;
}
       #column1
        {
            background-color:white; color:black; width:50%; padding:30px; text-align:center;
        }
        #column2
        {
            background-color:black; color:white; padding:30px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td id='column1'>
            
               <h1>" . $name . "</h1>
               <h2><u>" . $job_title . "</u></h2>
               <h3>Profile</h3><hr>
               <p>" . $profile . "</p>
               <br>
               <br>
               <h3>Contact</h3><hr>
               Date Of Birth : " . $dob . "<br>
               Address : " . $address . "<br>
               Phone : " . $contact . "<br>
               Email : " . $email . "<br>
               <br>
               <h3>Education</h3><hr>" . $EDUCATION . "            
               </td>
            

            <td id='column2'>
            " . $EXPERIENCE ."<br><br>". $SKILL ."<br><br>". $LANGUAGE ."<br><br>". $HOBBY . "
                </ul>
            </td>
        </tr>
    </table>
</body>
</html>";

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->setFooter('{PAGENO}');
$mpdf->SetFont('times new roman');
$mpdf->WriteHTML($data);
$mpdf->Output();

?>