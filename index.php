<a href="form.html">Make Your Resume </a>


<?php
if(isset($_POST['firstname']) and isset($_POST['lastname'])
and isset($_POST['age']) and isset($_POST['email']) and isset($_POST['sex'])
and isset($_POST['nationality']) and isset($_POST['language']) and isset($_POST['course']) and isset($_POST['intersted']) 
and isset($_POST['skills']) and isset($_POST['education']) and isset($_POST['Work']) and isset($_POST['objective'])
and isset($_POST['strengths']))
{
    $firstname = $_POST['firstname']; $lastnam = $_POST['$lastnam']; $age = $_POST['age']; $email = $_POST['email'];
    $sex = $_POST['sex']; $nationality = $_POST['$nationality']; $language = $_POST['language']; $course = $_POST['course']; 
    $intersted = $_POST['intersted']; $skills = $_POST['skills']; $education = $_POST['education']; $work = $_POST['work'];
    $objective = $_POST['objective']; $strengths = $_POST['strengths'];
     
}

?>
