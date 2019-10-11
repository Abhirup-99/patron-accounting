<?php
require_once'common.php';
$company=(int)$_POST['company'];
$date = $_POST['date'];
$time = $_POST['time'];
$director = $_POST['director'];
$header = $_POST['header'];
$sql = "SELECT * FROM register WHERE id=".$company;
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
require_once 'vendor/autoload.php';
$directorName='';
$din='';
if(strcmp($director,'DirectorName1'))
{
	$directorName = $row['DirectorName1'];
	$din = $row['PAN1'];
}
else if(strcmp($director,'DirectorName2'))
{
    $directorName = $row['DirectorName1'];
	$din = $row['PAN2'];
}
else if(strcmp($director,'DirectorName3'))
{
    $directorName = $row['DirectorName3'];
	$din = $row['PAN3'];
}
else if(strcmp($director,'DirectorName4'))
{
    $directorName = $row['DirectorName4'];
	$din = $row['PAN4'];
}
else
{
    $directorName = $row['DirectorName5'];
	$din = $row['PAN5'];
}


$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
if(strcmp($header,'1')){
$text = "BLACK HOUSE STUDIO PRIVATE LIMITED\nCorporate Identity Number: U93090MH2019PTC323183\nREGISTERED OFFICE: 135 1ST FLOOR, MASTER MIND PREMISES, WING B, PALM AAREY\nMILK CLY, GOREGOAN E, MUMBAI, MH 400065\nEMAIL ID: CHIRAG@STARWOODANIMATION.COM";
$textlines = explode("\n", $text);
$textrun = $section->addHeader();
$textrun->addText(array_shift($textlines));

foreach($textlines as $line) {
    $textrun->addText($line,array('align'=>'center'));
}
}
$textrun = $section->createTextRun();
$sentence='CERTIFIED TRUE COPY OF THE RESOLUTION PASSED AT THE MEETING OF THE BOARD OF DIRECTORS OF M/s. HELD AT THE REGISTERED OFFICE OF THE COMPANY ON day AT time';
$word_arr=explode(' ', $sentence);

$styleFont = array('bold'=>true, 'size'=>12, 'name'=>'Times New Roman');
$styleFont2 = array('bold'=>true, 'size'=>12, 'name'=>'Times New Roman');
$styleFont3 = array('bold'=>true, 'size'=>12, 'name'=>'Times New Roman');

$c = 0;
for($i = 0; $i < count($word_arr); $i++) 
{
    $c++;
    if(strcmp($word_arr[$i], 'M/s.')==0) 
    {
		$word_arr[$i]='M/s. AGARWAL GUPTA AND ASSOCIATES';
        $textrun->addText($word_arr[$i].' ', $styleFont);
    }
    elseif(strcmp($word_arr[$i], 'day')==0 || strcmp($word_arr[$i], 'time')==0) 
    {
		if(strcmp($word_arr[$i], 'day')==0)
			$word_arr[$i]=$date;
		if(strcmp($word_arr[$i], 'time')==0)
			$word_arr[$i]=$time;
        $textrun->addText($word_arr[$i].' ', $styleFont3);
    }
	else
	{
		$textrun->addText($word_arr[$i].' ', $styleFont2);
	}
}
$section->addLine(['weight' => 1, 'width' => 600, 'height' => 0]);
$section->addTextBreak();

$textrun = $section->createTextRun();

$textrun = $section->createTextRun();
$sentence='The Chairman informed that the first Auditors of the Company are to be appointed in the Board Meeting within 30 days from the date of incorporation of the company. He informed that he had got consent of M/s. , Chartered Accountants, for their appointment as the first Auditors of the Company. The Board considered and passed the following resolution unanimously:';
$word_arr=explode(' ', $sentence);

$styleFont = array('bold'=>true, 'size'=>12, 'name'=>'Times New Roman');
$styleFont2 = array('bold'=>false, 'size'=>12, 'name'=>'Times New Roman');

$c = 0;
for($i = 0; $i < count($word_arr); $i++) 
{
    $c++;
    if(strcmp($word_arr[$i], 'M/s.')==0) 
    {
		$word_arr[$i]='M/s. AGARWAL GUPTA AND ASSOCIATES';
        $textrun->addText($word_arr[$i].' ', $styleFont);
    }
    else 
    {
        $textrun->addText($word_arr[$i].' ', $styleFont2);
    }
}
$section->addTextBreak();
$textrun = $section->createTextRun();
$sentence='RESOLVED THAT pursuant to the provisions of section 139 of the Companies Act, 2013, M/s. , Chartered Accountants having registration number: 033554N from whom certificate pursuant to section 139 of the Companies Act has been received, be and are hereby appointed as the first auditors of the company to hold office until the conclusion of the next annual general meeting of the company at a remuneration to be determined by the Board of Directors of the Company.';
$word_arr=explode(' ', $sentence);

$styleFont = array('bold'=>true, 'size'=>12, 'name'=>'Times New Roman');
$styleFont2 = array('bold'=>false, 'size'=>12, 'name'=>'Times New Roman');

$c = 0;
for($i = 0; $i < count($word_arr); $i++) 
{
    $c++;
    if(strcmp($word_arr[$i], 'M/s.')==0 || (strcmp($word_arr[$i], 'RESOLVED')==0 && strcmp($word_arr[$i+1], 'THAT')==0)) 
    {
		if(strcmp($word_arr[$i], 'M/s.')==0)
		$word_arr[$i]='M/s. AGARWAL GUPTA AND ASSOCIATES';
        $textrun->addText($word_arr[$i].' ', $styleFont);
    }
    else 
    {
        $textrun->addText($word_arr[$i].' ', $styleFont2);
    }
}
$section->addTextBreak();
$textrun = $section->createTextRun();
$sentence='"RESOLVED FURTHER THAT any of the Board of Directors, be and is, hereby empowered and authorized to take such steps, in relation to the above and to do all such acts, deeds, matters and things as may be necessary, proper, expedient or incidental for giving effect to this resolution and to file necessary E-Forms with Registrar of Companies."';
$word_arr=explode(' ', $sentence);

$styleFont = array('bold'=>true, 'size'=>12, 'name'=>'Times New Roman');
$styleFont2 = array('bold'=>false, 'size'=>12, 'name'=>'Times New Roman');

$c = 0;
for($i = 0; $i < count($word_arr); $i++) 
{
    $c++;
    if(strcmp($word_arr[$i], '"RESOLVED')==0 && strcmp($word_arr[$i+1], 'FURTHER')==0 && strcmp($word_arr[$i+2], 'THAT')==0) 
    {
        $textrun->addText($word_arr[$i].' ', $styleFont);
    }
    else 
    {
        $textrun->addText($word_arr[$i].' ', $styleFont2);
    }
}
$section->addTextBreak();
$textrun = $section->createTextRun();
$sentence='For M/s.';
$word_arr=explode(' ', $sentence);

$styleFont = array('bold'=>false, 'size'=>12, 'name'=>'Times New Roman');
$styleFont2 = array('bold'=>true, 'size'=>12, 'name'=>'Times New Roman', 'color'=>'#FF0000');

$c = 0;
for($i = 0; $i < count($word_arr); $i++) 
{
    $c++;
    if(strcmp($word_arr[$i], 'M/s.')==0) 
    {
		$word_arr[$i]='M/s. AGARWAL GUPTA AND ASSOCIATES';
        $textrun->addText($word_arr[$i].' ', $styleFont2);
    }
    else 
    {
        $textrun->addText($word_arr[$i].' ', $styleFont);
    }
}
$section->addTextBreak();
// Adding Text element to the Section having font styled by default...
$section->addText(
    $directorName,
    array('bold'=>true, 'size'=>12, 'name'=>'Times New Roman')
);
$section->addText(
    'Director',
    array('bold'=>true, 'size'=>12, 'name'=>'Times New Roman')
);
$textrun = $section->createTextRun();
$sentence='DIN :'.$din;
$word_arr=explode(' ', $sentence);

$styleFont = array('bold'=>false, 'size'=>12, 'name'=>'Times New Roman');

for($i = 0; $i < count($word_arr); $i++) 
{
    $c++;
    $textrun->addText($word_arr[$i].' ', $styleFont);
}

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//$objWriter->save('helloWorld.docx');
$objWriter->save('helloWorld.docx');

$temp_file_uri = tempnam('', 'xyz');
$objWriter->save($temp_file_uri);
//download code
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=helloWorl.docx');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Content-Length: ' . filesize($temp_file_uri));
readfile($temp_file_uri);
unlink($temp_file_uri); // deletes the temporary file
exit;

?>