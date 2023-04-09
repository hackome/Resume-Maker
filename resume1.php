<html>
<head>
    <title>Resume</title>

    <?php
    //personal information
    $PERSONAL_INFO = '<h1>Resume</h1><h2>PERSONAL INFORMATION</h2>
  <h3>' . $_POST["first_name"] . ' ' . $_POST["last_name"] . '<BR>' . $_POST["email"] . '<BR>' . $_POST["phone"] . '</h3>';
    //objective
    if ($_POST["Summary"] != "") {
        $ABOUT = '<h2>OBJECTIVE</h2>' . $_POST["Summary"];
    } else {
        $ABOUT = "";
    }

    //Experience section
    if ($_POST["experience"] == "fill") {
        $EXPERIENCE = '<h2>EXPERIENCE</h2>
	  <h3>Worked at ' . $_POST["employer"] . ' , ' . $_POST["job_city"] . ' , ' . $_POST["job_state"] . ' as a ' . $_POST["job_title"] . ' from	  ' . $_POST["start_month"] . ',' . $_POST["start_year"] . ' to ' . $_POST["end_month"] . ',' . $_POST["end_year"] . '.';
    } else {
        $EXPERIENCE = '';
    }

    //Education Section
    if ($_POST["Year1"] == '') {
        $high = '';
    } else {
        $high = '<tr style="border:1px solid black; border-collapse: collapse;">
  <td style="border:1px solid black; border-collapse: collapse;">High School</td>
  <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["Year1"] . '</td>
  <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["School1"] . '</td>
  <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["percentage1"] . '</td>
  </tr>';
    }
    if ($_POST["Year2"] == '') {
        $inter = '';
    } else {
        $inter = '<tr style="border:1px solid black; border-collapse: collapse;">
  <td style="border:1px solid black; border-collapse: collapse;">Intermediate</td>
    <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["Year2"] . '</td>
  <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["School2"] . '</td>
  <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["percentage2"] . '</td>
  </tr>
  <tr>';
    }
    if ($_POST["Year3"] == "") {
        $graduation = '';
    } else {
        $graduation = '<tr style="border:1px solid black; border-collapse: collapse;">
	  <td style="border:1px solid black; border-collapse: collapse;">Graduation</td>
    <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["Year3"] . '</td>
  <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["college1"] . '</td>
  <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["percentage3"] . '</td>
  </tr>';
    }
    if ($_POST["Year4"] == "") {
        $pgraduation = '';
    } else {
        $pgraduation = '<tr style="border:1px solid black; border-collapse: collapse;">
  <td style="border:1px solid black; border-collapse: collapse;">Post Graduation</td>
    <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["Year4"] . '</td>
  <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["college2"] . '</td>
  <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["percentage4"] . '</td>
  </tr>';
    }
    if ($_POST["education"] == "fill") {
        $EDUCATION = '<h2>EDUCATION</h2><table style="border:1px solid black; border-collapse: collapse; border-spacing: 15px;">
  <tr style="border:1px solid black; border-collapse: collapse;">
    <th style="border:1px solid black; border-collapse: collapse;">DEGREE</th>
	<th style="border:1px solid black; border-collapse: collapse;">YEAR</th>
    <th style="border:1px solid black; border-collapse: collapse;">INSTITUTION</th>
    <th style="border:1px solid black; border-collapse: collapse;">GRADES/PERCENTAGE</th>
  </tr>' . $high . $inter . $graduation . $pgraduation . '
  </table>';
    } else {
        $EDUCATION = '';
    }
    //SKILL Section
    if ($_POST["Skill1name"] != "") {
        switch ($_POST["Skill1"]) {
            case 1:
                $level = 'Novice';
                break;
            case 2:
                $level = 'Beginner';
                break;
            case 3:
                $level = 'Skillful';
                break;
            case 4:
                $level = 'Experienced';
                break;
            case 5:
                $level = 'Expert';
                break;
            case 0:
                $level = '';
                break;
        }
        $skill1 = '<tr style="border:1px solid black; border-collapse: collapse;">
    <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["Skill1name"] . '</td>
	<td style="border:1px solid black; border-collapse: collapse;">' . $level . '</td>
  </tr>';
    } else {
        $skill1 = '';
    }
    if ($_POST["Skill2name"] != "") {
        switch ($_POST["Skill2"]) {
            case 1:
                $level = 'Novice';
                break;
            case 2:
                $level = 'Beginner';
                break;
            case 3:
                $level = 'Skillful';
                break;
            case 4:
                $level = 'Experienced';
                break;
            case 5:
                $level = 'Expert';
                break;
            case 0:
                $level = '';
                break;
        }
        $skill2 = '<tr style="border:1px solid black; border-collapse: collapse;">
    <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["Skill2name"] . '</td>
	<td style="border:1px solid black; border-collapse: collapse;">' . $level . '</td>
  </tr>';
    } else {
        $skill2 = '';
    }
    if ($_POST["Skill3name"] != "") {
        switch ($_POST["Skill3"]) {
            case 1:
                $level = 'Novice';
                break;
            case 2:
                $level = 'Beginner';
                break;
            case 3:
                $level = 'Skillful';
                break;
            case 4:
                $level = 'Experienced';
                break;
            case 5:
                $level = 'Expert';
                break;
            case 0:
                $level = '';
                break;
        }
        $skill3 = '<tr style="border:1px solid black; border-collapse: collapse;">
    <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["Skill3name"] . '</td>
	<td style="border:1px solid black; border-collapse: collapse;">' . $level . '</td>
  </tr>';
    } else {
        $skill3 = '';
    }

    $SKILL = '<h2>SKILLS</h2><table style="border:1px solid black; border-collapse: collapse; border-spacing: 15px;">
  <tr style="border:1px solid black; border-collapse: collapse;">
    <th style="border:1px solid black; border-collapse: collapse;">SKILL</th>
	<th style="border:1px solid black; border-collapse: collapse;">LEVEL</th>
  </tr>' . $skill1 . $skill2 . $skill3 . '
  </table>';

    //LANGUAGE SECTION
    if ($_POST["lan1Name"] != "") {
        switch ($_POST["lan1"]) {
            case 1:
                $level = 'Novice';
                break;
            case 2:
                $level = 'Beginner';
                break;
            case 3:
                $level = 'Skillful';
                break;
            case 4:
                $level = 'Experienced';
                break;
            case 5:
                $level = 'Expert';
                break;
            case 0:
                $level = '';
                break;
        }
        $lang1 = '<tr style="border:1px solid black; border-collapse: collapse;">
    <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["lan1Name"] . '</td>
	<td style="border:1px solid black; border-collapse: collapse;">' . $level . '</td>
  </tr>';
    } else {
        $lang1 = "";
    }
    if ($_POST["lan2Name"] != "") {
        switch ($_POST["lan2"]) {
            case 1:
                $level = 'Novice';
                break;
            case 2:
                $level = 'Beginner';
                break;
            case 3:
                $level = 'Skillful';
                break;
            case 4:
                $level = 'Experienced';
                break;
            case 5:
                $level = 'Expert';
                break;
            case 0:
                $level = '';
                break;
        }
        $lang2 = '<tr style="border:1px solid black; border-collapse: collapse;">
    <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["lan2Name"] . '</td>
	<td style="border:1px solid black; border-collapse: collapse;">' . $level . '</td>
  </tr>';
    } else {
        $lang2 = "";
    }
    if ($_POST["lan3Name"] != "") {
        switch ($_POST["lan3"]) {
            case 1:
                $level = 'Novice';
                break;
            case 2:
                $level = 'Beginner';
                break;
            case 3:
                $level = 'Skillful';
                break;
            case 4:
                $level = 'Experienced';
                break;
            case 5:
                $level = 'Expert';
                break;
            case 0:
                $level = '';
                break;
        }
        $lang3 = '<tr style="border:1px solid black; border-collapse: collapse;">
    <td style="border:1px solid black; border-collapse: collapse;">' . $_POST["lan3Name"] . '</td>
	<td style="border:1px solid black; border-collapse: collapse;">' . $level . '</td>
  </tr>';
    } else {
        $lang3 = "";
    }
    $LANG = '<h2>LANGUAGES</h2><table style="border:1px solid black; border-collapse: collapse; border-spacing: 15px;">
  <tr style="border:1px solid black; border-collapse: collapse;">
    <th style="border:1px solid black; border-collapse: collapse;">LANGUAGE</th>
	<th style="border:1px solid black; border-collapse: collapse;">LEVEL</th>
  </tr>' . $lang1 . $lang2 . $lang3 . '
  </table>';


    $data = $PERSONAL_INFO . $ABOUT . $EXPERIENCE . $EDUCATION . $SKILL . $LANG;
    //all the sections are stored in one variable called data.
    require_once __DIR__ . '/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->setFooter('{PAGENO}');
    $mpdf->SetFont('times new roman');
    $mpdf->WriteHTML($data);
    $mpdf->Output();
    ?>
</head>
<body>
</body>
</html>