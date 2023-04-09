<html>
<head>
    <title>Resume</title>
</head>
<body>
<?php

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
$EDUCATION = '<table><tr style="border:1px solid black; border-collapse: collapse;">
    <th style="border:1px solid black; border-collapse: collapse;">DEGREE</th>
	<th style="border:1px solid black; border-collapse: collapse;">YEAR</th>
    <th style="border:1px solid black; border-collapse: collapse;">INSTITUTION</th>
    <th style="border:1px solid black; border-collapse: collapse;">GRADES/PERCENTAGE</th>
  </tr>' . $high . $inter . $graduation . $pgraduation . '
  </table>';

//skill
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
    $skill1 = '<tr >
<td>1.</td>
    <td >I&apos;m '. $level .' in '.$_POST["Skill1name"] . '.</td>
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
    $skill2 = '<tr >
<td>2.</td>
   <td >I&apos;m '. $level .' in '.$_POST["Skill2name"] . '.</td>
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
    $skill3 = '<tr >
<td>3.</td>
    <td>I&apos;m '. $level .' in '.$_POST["Skill3name"] . '.</td>
  </tr>';
} else {
    $skill3 = '';
}

$SKILL = '<table >' . $skill1 . $skill2 . $skill3 . '
  </table>';


$data= '<html>
           <head>
           <style>

           h1,h2{
           color: darkgreen;          
            }

            .container
            {
            border:4px double darkgreen;
            padding:30px;
            }

            #top{
            text-align: center;
            padding: 2px;
            margin:14px;
            border: 2px double darkgreen;
            line-height: 2px;
            background-color: #fdf8c8;
            }

            #mid{
            background-color: #fdf8c8;
             border: 2px double darkgreen;
             padding:30px;
             margin:14px;
             height="80%";
            }
</style>
</head>
           <body>
           <div class="container">
           <div id="top">
           <h1>' .$_POST["fname"] . ' ' . $_POST["lname"].'</h1>
           <h3>'.$_POST["address"].' : '.$_POST["contact"].'</h3>
           <h3>'.$_POST["email"].'</h3></div><div id="mid">'
.$_POST["about"].'<h2>EXPERIENCE</h2>Worked at' . $_POST["employer"] . ' , '
    . $_POST["job_city"] . ' , ' . $_POST["job_state"] . ' as a '
    . $_POST["job_title"] . ' from	  ' . $_POST["start_date"] . ' to '
    . $_POST["end_date"] .'
           <h2>EDUCATION</h2>
           '.$EDUCATION.'<h2>SKILLS</h2>'.$SKILL.'
           <h2>REFFERENCE</h2>'.$_POST["ref_name"].'<BR>'
    .$_POST["ref_contact"].'<br>'.$_POST["ref_email"].
    '
           
</div>
</div>
</body>
       </html>';

 require_once __DIR__ . '/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->setFooter('{PAGENO}');
    $mpdf->SetFont('times new roman');
    $mpdf->WriteHTML($data);
    $mpdf->Output();
?>
</body>
</html>
