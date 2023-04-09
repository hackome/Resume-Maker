<?php
$name = $_POST['name'];
$name = explode(" ", $name);

if (($_POST['job_title1'] != "") || ($_POST['job_title2'] != "")) {
    if ($_POST['job_title1'] != "") {
        $exp1 = "<strong>Experience</strong><br><b>" . $_POST['job_title1'] . "<br>" . $_POST['company1'] . "</b><br><p>" . $_POST['about_job1'] . "</p>";
    } else {
        $exp1 = "";
    }
    if ($_POST['job_title2'] != "") {
        $exp2 = "<br><b>" . $_POST['job_title2'] . "<br>" . $_POST['company2'] . "</b><br><p>" . $_POST['about_job2'] . "</p>";
    } else {
        $exp2 = "";
    }
    $EXPERIENCE = $exp1 . $exp2;
} else {
    $EXPERIENCE = "";
}
/////////////////////////////////////////////////////////////////

if (($_POST['skill1'] != "") || ($_POST['skill2'] != "") || ($_POST['skill3'] != "") || ($_POST['skill4'] != "") || ($_POST['skill5'] != "")) {
    if ($_POST['skill1'] != "") {
        $skill1 = "<strong>Highlights</strong><br><li>" . $_POST['skill1'] . "</li>";
    } else {
        $skill1 = "";
    }
    if ($_POST['skill2'] != "") {
        $skill2 = "<li>" . $_POST['skill2'] . "</li>";
    } else {
        $skill2 = "";
    }
    if ($_POST['skill3'] != "") {
        $skill3 = "<li>" . $_POST['skill3'] . "</li>";
    } else {
        $skill3 = "";
    }
    if ($_POST['skill4'] != "") {
        $skill4 = "<li>" . $_POST['skill4'] . "</li>";
    } else {
        $skill4 = "";
    }
    if ($_POST['skill5'] != "") {
        $skill5 = "<li>" . $_POST['skill5'] != "" . "</li>";
    } else {
        $skill5 = "";
    }
    $SKILL = $skill1 . $skill2 . $skill3 . $skill4 . $skill5;
} else {
    $SKILL = "";
}
/////////////////////////////////////////////////////////////////////////////

if (($_POST['course1'] != "") || ($_POST['course2'] != "") || ($_POST['course3'] != "")) {
    if ($_POST['course1'] != "") {
        $edu1 = "<li><b>" . $_POST['course1'] . " : " . $_POST['year1'] . "</b><br>" . $_POST['institute1'];
    } else {
        $edu1 = "";
    }
    if ($_POST['course2'] != "") {
        $edu2 = "<li><b>" . $_POST['course2'] . " : " . $_POST['year2'] . "</b><br>" . $_POST['institute2'];
    } else {
        $edu2 = "";
    }
    if ($_POST['course3'] != "") {
        $edu3 = "<li><b>" . $_POST['course3'] . " : " . $_POST['year3'] . "</b><br>" . $_POST['institute3'];
    } else {
        $edu3 = "";
    }
    $EDUCATION = $edu1 . $edu2 . $edu3;
} else {
    $EDUCATION = "";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////

if (($_POST['hobby1'] != "") || ($_POST['hobby2'] != "") || ($_POST['hobby3'] != "") || ($_POST['hobby4'] != "") || ($_POST['hobby5'] != "")) {
    if ($_POST['hobby1'] != "") {
        $hobby1 = "<li>" . $_POST['hobby1'] . "</li>";
    } else {
        $hobby1 = "";
    }
    if ($_POST['hobby2'] != "") {
        $hobby2 = "<li>" . $_POST['hobby2'] . "</li>";
    } else {
        $hobby2 = "";
    }
    if ($_POST['hobby3'] != "") {
        $hobby3 = "<li>" . $_POST['hobby3'] . "</li>";
    } else {
        $hobby3 = "";
    }
    if ($_POST['hobby4'] != "") {
        $hobby4 = "<li>" . $_POST['hobby4'] . "</li>";
    } else {
        $hobby4 = "";
    }
    if ($_POST['hobby5'] != "") {
        $hobby5 = "<li>" . $_POST['hobby5'] . "</li>";
    } else {
        $hobby5 = "";
    }
    $HOBBY = $hobby1 . $hobby2 . $hobby3 . $hobby4 . $hobby5;
} else {
    $HOBBY = "";
}
/////////////////////////////////////////////////////////////////////////////


$data = "<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Document</title>
    <style>
        body {
            font-size: 18px;
            margin: 5px;
            background: rgb(71,71,99);
background: linear-gradient(270deg, rgba(71,71,99,1) 19%, rgba(240,248,255,1) 19%);
        }
        table{
        background-color: aliceblue;
        padding: 5%;
        }

        .header {
            color: white;
            text-align: center;
            padding: 5%;
            background-color: rgb(71, 71, 99);
        }

        strong {
            color: orange;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div class='header'>
        <strong>" . $name[0] . "</strong> " . $name[1] . "<br>
        " . $_POST['contact'] . "<br>
        <u> " . $_POST['email'] . "</u>
    </div>
    <div>
        <table>
        <tr>
        <td colspan='2'> <p>" . $_POST['profile'] . "</p><hr></td>
</tr>
            <tr>
                <td rowspan='3'>" . $EXPERIENCE . "
                </td>
                <td>
                <ul>" . $SKILL . "</ul>
                </td>
            </tr>

            <tr>
                <td><strong>Education</strong><br>
                <ul>" . $EDUCATION . "</ul>
                    </td>
            </tr>

            <tr>
                <td><strong>Hobbies</strong><br>
                    	<ul>" . $HOBBY . "</ul>
                    </td>            
            </tr>
        </table>
    </div>
</body>
</html>";

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->setFooter('{PAGENO}');
$mpdf->SetFont('times new roman');
$mpdf->WriteHTML($data);
$mpdf->Output();
?>