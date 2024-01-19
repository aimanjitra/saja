<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peribadi Pelajar UniMAP</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            background-color: #001b3d;
        }

        .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            color: white;
            overflow-y: auto;
        }

        .biodata {
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        h3 {
            font-size: 18px;
            margin-top: 0px;
            margin-left: 10;
            margin-right: auto;
            background-color: rgb(180, 172, 172);
            color: black;
            padding: 10px;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 0px;
            margin-left: auto;
            margin-right: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: white;
            color: black;
        }

        td {
            background-color: white;
            color: black;
        }

	#CGPA1 {
        text-align: right;  /* Align the content to the right */
	position: relative;
        padding-right: 20px; /* Add padding for the cross-line on the left */
   	 }

	#CGPA1::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 75%; /* Width of the cross-line */
            background-color: rgb(180, 172, 172); /* Color of the cross-line */
            margin: auto;
        }

	#CGPA2 {
        text-align: right;  /* Align the content to the right */
	position: relative;
        padding-right: 20px; /* Add padding for the cross-line on the left */
   	 }

	#CGPA2::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 75%; /* Width of the cross-line */
            background-color: rgb(180, 172, 172); /* Color of the cross-line */
            margin: auto;
        }

	#blankCell {
	   background-color: rgb(180, 172, 172);
	}

	#semesterSelector {
            width: 150px; /* Set your desired width */
            font-size: 18px; /* Set your desired font size */
            margin: 10px auto; /* Center the dropdown and add space around it */
            display: block; /* Ensure it's a block-level element for margin to work */
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="biodata">
            <h1>Biodata of Student</h1>
            <h2 id="fullName">Name: [Full Name]</h2>
            <h2 id="matric">No Matric: [No Matric]</h2>
            <h2 id="course">Course: [Course]</h2>
            <h2 id="codeCourse">Code Course: [Code Course]</h2>
            <h2 id="year">Year: [Year]</h2>
            <h2 id="semester">Semester: [Semester]</h2>
        </div>
        
        <div>
            <select id="semesterSelector" onchange="changeSemester()">
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <!-- Add options for Semester 3 to 8 as needed -->
            </select>
        </div>

        <div id="semester1" class="semesterContent">
            <table>
                                <tr>
                            <th>Code Subject</th>
                            <th>Name of Subject</th>
                            <th>Credit Hour</th>
                            <th>Result of CGPA</th>
                            <th>Result (Pass/Fail)</th>
                        </tr>
                
                        <!-- Subject 1 -->
                        <tr>
                            <td id="subjectCode1">[Subject Code]</td>
                            <td id="subjectName1">[Subject Name]</td>
                            <td id="creditHour1">[Credit Hour]</td>
                            <td id="uzw164">[UZW164]</td>
                            <td id="result1">[Result]</td>
                        </tr>
                
                        <!-- Subject 2 -->
                        <tr>
                            <td id="subjectCode2">[Subject Code]</td>
                            <td id="subjectName2">[Subject Name]</td>
                            <td id="creditHour2">[Credit Hour]</td>
                            <td id="uuw130">[UUW130]</td>
                            <td id="result2">[Result]</td>
                        </tr>
                
                        <!-- Subject 3 -->
                        <tr>
                            <td id="subjectCode3">[Subject Code]</td>
                            <td id="subjectName3">[Subject Name]</td>
                            <td id="creditHour3">[Credit Hour]</td>
                            <td id="ekt102">[EKT102]</td>
                            <td id="result3">[Result]</td>
                        </tr>
                
                        <!-- Subject 4 -->
                        <tr>
                            <td id="subjectCode4">[Subject Code]</td>
                            <td id="subjectName4">[Subject Name]</td>
                            <td id="creditHour4">[Credit Hour]</td>
                            <td id="eqt101">[EQT101]</td>
                            <td id="result4">[Result]</td>
                        </tr>
                
                        <!-- Subject 5 -->
                        <tr>
                            <td id="subjectCode5">[Subject Code]</td>
                            <td id="subjectName5">[Subject Name]</td>
                            <td id="creditHour5">[Credit Hour]</td>
                            <td id="ekt120">[EKT120]</td>
                            <td id="result5">[Result]</td>
                        </tr>
                
                        <!-- Subject 6 -->
                        <tr>
                            <td id="subjectCode6">[Subject Code]</td>
                            <td id="subjectName6">[Subject Name]</td>
                            <td id="creditHour6">[Credit Hour]</td>
                            <td id="ekt101">[EKT101]</td>
                            <td id="result6">[Result]</td>
                        </tr>
                
                        <tr>
                            <td id="blankCell"></td>
	                    <td id="CGPA1">[Total CGPA]</td>
	                    <td id="total">[Total Hour]</td>
	                    <td id="GPA1">[Average GPA 1]</td>
	                    <td id="DetectSemester1">[Active/P1]</td>
                        </tr>
            </table>

		<div id="reminderSemester1" style="margin-top: 20px; padding: 10px; background-color: #ffcccc; color: #ff0000; width: 90%; margin-left: auto; margin-right: auto;">
	    <h3>Reminder</h3>
	    <ul id="failSubjectsSemester1"></ul>
	</div>

		<div id="newSchedule1" style="margin-top: 20px; padding: 10px; background-color: #ffffff; color: #000000; width: 90%; margin-left: auto; margin-right: auto;">
		</div>

        </div>

        <div id="semester2" class="semesterContent" style="display: none;">
            <table>
                <tr>
                    <th>Code Subject</th>
                    <th>Name of Subject</th>
                    <th>Credit Hour</th>
                    <th>Result of CGPA</th>
                    <th>Result (Pass/Fail)</th>
                </tr>

                <!-- Subject 7 -->
                        <tr>
                            <td id="subjectCode7">[Subject Code]</td>
                            <td id="subjectName7">[Subject Name]</td>
                            <td id="creditHour7">[Credit Hour]</td>
                            <td id="uzw195">[UZW195]</td>
                            <td id="result7">[Result]</td>
                        </tr>

                <!-- Subject 8 -->
                        <tr>
                            <td id="subjectCode8">[Subject Code]</td>
                            <td id="subjectName8">[Subject Name]</td>
                            <td id="creditHour8">[Credit Hour]</td>
                            <td id="ekt124">[EKT124]</td>
                            <td id="result8">[Result]</td>
                        </tr>

                <!-- Subject 9 -->
                <tr>
                            <td id="subjectCode9">[Subject Code]</td>
                            <td id="subjectName9">[Subject Name]</td>
                            <td id="creditHour9">[Credit Hour]</td>
                            <td id="ekt103">[EKT103]</td>
                            <td id="result9">[Result]</td>
                        </tr>
                
                <!-- Subject 10 -->
                <tr>
                            <td id="subjectCode10">[Subject Code]</td>
                            <td id="subjectName10">[Subject Name]</td>
                            <td id="creditHour10">[Credit Hour]</td>
                            <td id="ekt119">[EKT119]</td>
                            <td id="result10">[Result]</td>
                        </tr>

                <!-- Subject 11 -->
                <tr>
                            <td id="subjectCode11">[Subject Code]</td>
                            <td id="subjectName11">[Subject Name]</td>
                            <td id="creditHour11">[Credit Hour]</td>
                            <td id="eqt102">[EQT102]</td>
                            <td id="result11">[Result]</td>
                        </tr>

                <!-- Subject 12 -->
                <tr>
                            <td id="subjectCode12">[Subject Code]</td>
                            <td id="subjectName12">[Subject Name]</td>
                            <td id="creditHour12">[Credit Hour]</td>
                            <td id="ekt104">[EKT104]</td>
                            <td id="result12">[Result]</td>
                        </tr>
                
                        <tr>
                            <td id="blankCell"></td>
	                    <td id="CGPA2">[Total CGPA]</td>
	                    <td id="total2">[Total Hour]</td>
	                    <td id="GPA2">[Average GPA 2]</td>
	                    <td id="DetectSemester2">[Active/P1]</td>
                        </tr>

                <!-- Add more rows as needed for Semester 2 -->
            </table>

		        <div id="reminderSemester2" style="margin-top: 20px; padding: 10px; background-color: #ffcccc; color: #ff0000; width: 90%; margin-left: auto; margin-right: auto;">
	    <h3>Reminder</h3>
	    <ul id="failSubjectsSemester2"></ul>
	</div>

		<div id="newSchedule2" style="margin-top: 20px; padding: 10px; background-color: #ffffff; color: #000000; width: 90%; margin-left: auto; margin-right: auto;">
		</div>
	    
    </div>


        </div>
        <script>

document.addEventListener('DOMContentLoaded', function () {

    // Function to change the displayed semester content
    window.changeSemester = function () {
                const semesterSelector = document.getElementById('semesterSelector');
                const selectedSemester = semesterSelector.value;

                // Hide all semester content
                document.querySelectorAll('.semesterContent').forEach(function (content) {
                    content.style.display = 'none';
                });

                // Show the selected semester content
                const selectedSemesterContent = document.getElementById(`semester${selectedSemester}`);
                if (selectedSemesterContent) {
                    selectedSemesterContent.style.display = 'block';
                }
            };

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if username and password are set in the URL parameters
if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    $sql = "SELECT * FROM student_comp WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "document.getElementById('fullName').textContent = 'Name: {$row['full_name']}';";
        	echo "document.getElementById('matric').textContent = 'No Matric: {$row['matrik']}';";
        	echo "document.getElementById('codeCourse').textContent = 'Code Course: {$row['code_course']}';";
        	echo "document.getElementById('year').textContent = 'Year: {$row['tahun']}';";
        	echo "document.getElementById('semester').textContent = 'Semester: {$row['sem']}';";

            echo "document.getElementById('eqt101').textContent = '{$row['eqt101']}';";
            echo "var eqt101_value = '{$row['eqt101']}';";

            echo "document.getElementById('ekt101').textContent = '{$row['ekt101']}';";
            echo "var ekt101_value = '{$row['ekt101']}';";

            echo "document.getElementById('ekt120').textContent = '{$row['ekt120']}';";
            echo "var ekt120_value = '{$row['ekt120']}';";

            echo "document.getElementById('uzw164').textContent = '{$row['uzw164']}';";
            echo "var uzw164_value = '{$row['uzw164']}';";

            echo "document.getElementById('uuw130').textContent = '{$row['uuw130']}';";
            echo "var uuw130_value = '{$row['uuw130']}';";

            echo "document.getElementById('ekt102').textContent = '{$row['ekt102']}';";
            echo "var ekt102_value = '{$row['ekt102']}';";

            //Semester 2

            echo "document.getElementById('uzw195').textContent = '{$row['uzw195']}';";
            echo "var uzw195_value = '{$row['uzw195']}';";

            echo "document.getElementById('ekt124').textContent = '{$row['ekt124']}';";
            echo "var ekt124_value = '{$row['ekt124']}';";

            echo "document.getElementById('ekt103').textContent = '{$row['ekt103']}';";
            echo "var ekt103_value = '{$row['ekt103']}';";

            echo "document.getElementById('ekt119').textContent = '{$row['ekt119']}';";
            echo "var ekt119_value = '{$row['ekt119']}';";

            echo "document.getElementById('eqt102').textContent = '{$row['eqt102']}';";
            echo "var eqt102_value = '{$row['eqt102']}';";

            echo "document.getElementById('ekt104').textContent = '{$row['ekt104']}';";
            echo "var ekt104_value = '{$row['ekt104']}';";



            // Check if $codeCourse is equal to 'UR6523002'
            $codeCourse = $row['code_course']; // Add this line to define $codeCourse
            if ($codeCourse == 'UR6523002') {
            // Update the HTML content with the course information
            echo "document.getElementById('course').textContent = 'Course: Computer Engineering';";
}

        }
    } else {
        echo "<p id='result'>Login failed. Please check your credentials.</p>";
    }
    
} else {
    echo "<p id='result'>Please provide both username and password.</p>";
}

$conn->close();
?>

// Function to convert grades to GPA
function gradeToNum($grade) {
    // Check for specific grades and return corresponding GPA
    if ($grade === 'A') {
        return 4.00;
    } else if ($grade === 'A-') {
        return 3.75;
    } else if ($grade === 'B+') {
        return 3.5;
    } else if ($grade === 'B') {
        return 3.0;
    } else if ($grade === 'B-') {
        return 2.75;
    } else if ($grade === 'C+') {
        return 2.5;
    } else if ($grade === 'C') {
        return 2.0;
    } else if ($grade === 'C-') {
        return 1.75;
    } else if ($grade === 'D+') {
        return 1.5;
    } else if ($grade === 'D') {
        return 1.0;
    } else if ($grade === 'D-') {
        return 0.75;
    } else {
        return 0.00;
    }
}

var eqt101 = gradeToNum(eqt101_value);
var ekt101 = gradeToNum(ekt101_value);
var ekt120 = gradeToNum(ekt120_value);
var uzw164 = gradeToNum(uzw164_value);
var uuw130 = gradeToNum(uuw130_value);
var ekt102 = gradeToNum(ekt102_value);

var uzw195 = gradeToNum(uzw195_value);
var ekt124 = gradeToNum(ekt124_value);
var ekt103 = gradeToNum(ekt103_value);
var ekt119 = gradeToNum(ekt119_value);
var eqt102 = gradeToNum(eqt102_value);
var ekt104 = gradeToNum(ekt104_value);


let totalCreditHours = 0;
    let failSubjects = []; // Array to store failed subjects
	let totalCreditHoursSemester1 = 0;
	let totalCreditHoursSemester2 = 0;

        
           // Education Subjects for Semester 1
const subjectsSemester1 = [
    { code: 'UZW164', name: 'KURSUS PERSIJILAN BULAN SABIT MERAH MALAYSIA I', creditHour: 1 },
    { code: 'UUW130', name: 'FALSAFAH DAN ISU SEMASA', creditHour: 2 },
    { code: 'EKT102', name: 'ASAS KEJURUTERAAN ELEKTRONIK', creditHour: 3 },
    { code: 'EQT101', name: 'MATEMATIK KEJURUTERAAN I', creditHour: 3 },
    { code: 'EKT120', name: 'PENGATURCARAAN KOMPUTER', creditHour: 4 },
    { code: 'EKT101', name: 'TEORI LITAR ELEKTRIK', creditHour: 4 },
];

// Education Subjects for Semester 2
const subjectsSemester2 = [
    { code: 'UZW195', name: 'RADIO KAMPUS [CAMPUS RADIO]', creditHour: 3 },
    { code: 'EKT124', name: 'ELEKTRONIK DIGIT I [DIGITAL ELECTRONICS I]', creditHour: 3 },
    { code: 'EKT103', name: 'KEJURUTERAAN ELEKTRIK [ELECTRICAL ENGINEERING]', creditHour: 3 },
    { code: 'EKT119', name: 'LITAR ELEKTRIK II [ELECTRIC CIRCUIT II]', creditHour: 3 },
    { code: 'EQT102', name: 'MATEMATIK KEJURUTERAAN II [ENGINEERING MATHEMATICS II]', creditHour: 3 },
    { code: 'EKT104', name: 'LITAR ELEKTRONIK ANALOG 1 [ANALOG ELECTRONIC CIRCUITS 1]', creditHour: 3 }
];


// Display subjects for Semester 1
subjectsSemester1.forEach((subject, index) => {
    const subjectCode = document.getElementById(`subjectCode${index + 1}`);
    const subjectName = document.getElementById(`subjectName${index + 1}`);
    const creditHour = document.getElementById(`creditHour${index + 1}`);

    subjectCode.textContent = subject.code;
    subjectName.textContent = subject.name;
    creditHour.textContent = subject.creditHour;

    // Add credit hours to the total
    totalCreditHoursSemester1 += subject.creditHour;
});

// Display subjects for Semester 2
subjectsSemester2.forEach((subject, index) => {
    const subjectCode = document.getElementById(`subjectCode${index + 7}`);
    const subjectName = document.getElementById(`subjectName${index + 7}`);
    const creditHour = document.getElementById(`creditHour${index + 7}`);

    subjectCode.textContent = subject.code;
    subjectName.textContent = subject.name;
    creditHour.textContent = subject.creditHour;

    // Add credit hours to the total
    totalCreditHoursSemester2 += subject.creditHour;
});


            // Display the total credit hours for Semester 1 and Semester 2
document.getElementById('total').textContent = `Total Hour: ${totalCreditHoursSemester1}`;
document.getElementById('total2').textContent = `Total Hour: ${totalCreditHoursSemester2}`;
		
		// Update the GPA Semester 1 calculation
   	        const GPA1 = (ekt102 + eqt101 + ekt101 + ekt120 + uzw164 + uuw130) / subjectsSemester1.length;

		// Display the GPA for Semester 1
		document.getElementById('GPA1').textContent = `GPA: ${GPA1.toFixed(2)}`;

		// Update the GPA Semester 2 calculation
   	        const GPA2 = (uzw195 + ekt124 + ekt103 + ekt119 + eqt102 + ekt104)/ subjectsSemester2.length;

		// Display the GPA for Semester 2
		document.getElementById('GPA2').textContent = `GPA: ${GPA2.toFixed(2)}`;

		// Check for the Semester 1
                result1.textContent = determineResult(uzw164);
                result2.textContent = determineResult(uuw130);
                result3.textContent = determineResult(ekt102);
                result4.textContent = determineResult(eqt101);
                result5.textContent = determineResult(ekt120);
                result6.textContent = determineResult(ekt101);

		// Check for Semester 2 subjects
                result7.textContent = determineResult(uzw195);
                result8.textContent = determineResult(ekt124);
                result9.textContent = determineResult(ekt103);
                result10.textContent = determineResult(ekt119);
                result11.textContent = determineResult(eqt102);
                result12.textContent = determineResult(ekt104);

		// Function to determine pass/fail result
function determineResult(grade) {
    // Check if the numeric grade is greater than or equal to 2
    return (grade >= 2) ? 'Pass' : 'Fail';
}

		    // Check for failed subjects in Semester 1
			const failSubjectsSemester1 = [];

		    if (determineResult(uzw164) === 'Fail') {
                failSubjectsSemester1.push({ code: 'UZW164', name: 'KURSUS PERSIJILAN BULAN SABIT MERAH MALAYSIA I', creditHour: 1 });
            }
            if (determineResult(uuw130) === 'Fail') {
                failSubjectsSemester1.push({ code: 'UUW130', name: 'FALSAFAH DAN ISU SEMASA', creditHour: 2 });
            }
            if (determineResult(ekt102) === 'Fail') {
                failSubjectsSemester1.push({ code: 'EKT102', name: 'ASAS KEJURUTERAAN ELEKTRONIK', creditHour: 3 });
            }
            if (determineResult(eqt101) === 'Fail') {
                failSubjectsSemester1.push({ code: 'EQT101', name: 'MATEMATIK KEJURUTERAAN I', creditHour: 3 });
            }
            if (determineResult(ekt120) === 'Fail') {
                failSubjectsSemester1.push({ code: 'EKT120', name: 'PENGATURCARAAN KOMPUTER', creditHour: 4 });
            }
            if (determineResult(ekt101) === 'Fail') {
                failSubjectsSemester1.push({ code: 'EKT101', name: 'TEORI LITAR ELEKTRIK', creditHour: 4 });
            }


// Check for failed subjects in Semester 2
const failSubjectsSemester2 = [];

            if (determineResult(uzw195) === 'Fail') {
                failSubjectsSemester2.push({ code: 'UZW195', name: 'RADIO KAMPUS [CAMPUS RADIO]', creditHour: 1 });
            }
            if (determineResult(ekt124) === 'Fail') {
                failSubjectsSemester2.push({ code: 'EKT124', name: 'ELEKTRONIK DIGIT I [DIGITAL ELECTRONICS I]', creditHour: 3 });
            }
            if (determineResult(ekt103) === 'Fail') {
                failSubjectsSemester2.push({ code: 'EKT103', name: 'KEJURUTERAAN ELEKTRIK [ELECTRICAL ENGINEERING]', creditHour: 3 });
            }
            if (determineResult(ekt119) === 'Fail') {
                failSubjectsSemester2.push({ code: 'EKT119', name: 'LITAR ELEKTRIK II [ELECTRIC CIRCUIT II]', creditHour: 3 });
            }
            if (determineResult(eqt102) === 'Fail') {
                failSubjectsSemester2.push({ code: 'EQT102', name: 'MATEMATIK KEJURUTERAAN II [ENGINEERING MATHEMATICS II]', creditHour: 3 });
            }
            if (determineResult(ekt104) === 'Fail') {
                failSubjectsSemester2.push({ code: 'EKT104', name: 'LITAR ELEKTRONIK ANALOG 1 [ANALOG ELECTRONIC CIRCUITS 1]', creditHour: 4 });
            }


// Display the fail subjects and reminder for Semester 1
const failSubjectsListSemester1 = document.getElementById('failSubjectsSemester1');
const reminderDivSemester1 = document.getElementById('reminderSemester1');

// Display the fail subjects and reminder for Semester 2
const failSubjectsListSemester2 = document.getElementById('failSubjectsSemester2');
const reminderDivSemester2 = document.getElementById('reminderSemester2');


// Display logic for Semester 1
if (failSubjectsSemester1.length > 0) {
    // Display the fail subjects
    failSubjectsListSemester1.innerHTML = failSubjectsSemester1.map(subject => `<li>${subject.name}</li>`).join('');

    // Display the reminder message
    const subjectNamesSemester1 = failSubjectsSemester1.map(subject => subject.name); // Extract subject names
    const reminderMessageSemester1 = `You should retake the ${subjectNamesSemester1.length > 1 ? 'following subjects' : 'subject'} for the next semester: ${subjectNamesSemester1.join(', ')}`;
    const reminderParagraphSemester1 = document.createElement('p');
    reminderParagraphSemester1.textContent = reminderMessageSemester1;

    // Append the reminder message to the reminderDiv
    reminderDivSemester1.appendChild(reminderParagraphSemester1);

    // Show the reminder
    reminderDivSemester1.style.display = 'block';
} else {
    reminderDivSemester1.style.display = 'none'; // Hide the reminder if no fail subjects
}



// Display logic for Semester 2
if (failSubjectsSemester2.length > 0) {
    // Display the fail subjects
    failSubjectsListSemester2.innerHTML = failSubjectsSemester2.map(subject => `<li>${subject.name}</li>`).join('');

    // Display the reminder message
    const subjectNamesSemester2 = failSubjectsSemester2.map(subject => subject.name); // Extract subject names
    const reminderMessageSemester2 = `You should retake the ${subjectNamesSemester2.length > 1 ? 'following subjects' : 'subject'} for the next semester: ${subjectNamesSemester2.join(', ')}`;
    const reminderParagraphSemester2 = document.createElement('p');
    reminderParagraphSemester2.textContent = reminderMessageSemester2;

    // Append the reminder message to the reminderDiv
    reminderDivSemester2.appendChild(reminderParagraphSemester2);

    // Show the reminder
    reminderDivSemester2.style.display = 'block';
} else {
    reminderDivSemester2.style.display = 'none'; // Hide the reminder if no fail subjects
}


// Update the detect element based on the GPA for both Semesters
const detectElementSemester1 = document.getElementById('DetectSemester1');
const detectElementSemester2 = document.getElementById('DetectSemester2');

// Stipulation for Semester 1
detectElementSemester1.textContent = (GPA1 < 2) ? 'P1' : 'Active';

// Stipulation for Semester 2
if (detectElementSemester1.textContent === 'P1') {
    // If Semester 1 is P1, check GPA for Semester 2
    detectElementSemester2.textContent = (GPA2 < 2) ? 'P2' : 'Active';
} else {
    // If Semester 1 is Active, Semester 2 can be Active or P1
    detectElementSemester2.textContent = (GPA2 < 2) ? 'P1' : 'Active';
}

		// Version 1 of new schedule information
const newScheduleDiv1 = document.getElementById('newSchedule1');
const newScheduleMessage1 = `
    <h3>New Schedule For Semester 2</h3>
    <p>For next semester, you need to take the following subjects:</p>
    <ul>
    ${subjectsSemester2.map(subject => `<li>${subject.code} - ${subject.name} [${subject.creditHour} Kredit]</li>`).join('')}
    </ul>
`;
newScheduleDiv1.innerHTML = newScheduleMessage1;

// Version 2 of new schedule information
const newScheduleDiv2 = document.getElementById('newSchedule2');
const newScheduleMessage2 = `
    <h3>New Schedule For Semester 3</h3>
        <p>For next semester, you need to take the following subjects:</p>
        <ul>
        ${failSubjectsSemester1.map(subject => `<li>${subject.code} - ${subject.name} [${subject.creditHour} Kredit]</li>`).join('')}
        <li>ABC123 - EXAMPLE SUBJECT 1</li>
        <li>DEF456 - EXAMPLE SUBJECT 2</li>
        <li>GHI789 - EXAMPLE SUBJECT 3</li>
        <!-- Add more subjects as needed -->
    </ul>
`;
newScheduleDiv2.innerHTML = newScheduleMessage2;


    const cgpa1 = document.getElementById('CGPA1');
    cgpa1.textContent = `CGPA: ${GPA1.toFixed(2)}`;

    const CGPA2= (GPA1 + GPA2)/2;
    const cgpa2 = document.getElementById('CGPA2');
    cgpa2.textContent = `CGPA: ${CGPA2.toFixed(2)}`;


});
</script>
</body>
</html>
