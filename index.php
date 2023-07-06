<?php
session_start();
if(empty($_SESSION['User_check'])){
	$out= '
	<li><button type="button" class="btn" data-toggle="modal" data-target="#basicExampleModal">Login</button></li>
	';
}else{
	$out= '
	<li><a class="btn" href="project.php">See Projects Here</a></li>
	<li><a href="logout.php" class="btn">Logout</a></li>
	';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Kaizen</title>
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<canvas id=c></canvas>
	<div class="container-fluid">
		<!-- Header Section -->
		<div class="row header">
			<div class="col-sm-4 logo">
				<div class="logo-section">
					<h1 class="animated bounceInDown delay-1s">Student Kaizen</h1>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="khali-section">
					<div id="nav" class="col-sm-12">
						<ul>
							<li><a class="btn" href="index.php">Home</a></li>
							<li><a class="btn" href="about_us.php">About Us</a></li>
							<?php echo $out;?>
							<!-- <li><button type="button" class="btn" data-toggle="modal" data-target="#basicExampleModal">Login</button></li> -->
							<?php include "modal.php";?>
							<li><a class="btn" href="feedback.php">Feedback & Suggestions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Archives Sections -->
		<div class="container">
			<div id="parent-index" class="row">
				<div class="col-sm-4">
					<div class="home-call-index">
						<!-- <p> -->
							<ul>
								<li><a class="showSingle" target="1">Overview</a></li>
								<li><a class="showSingle" target="2">Decide on the purpose</a></li>
								<li><a class="showSingle" target="3">Plan the project</a></li>
								<li><a class="showSingle" target="4">Review the plan</a></li>
								<li><a class="showSingle" target="5">Abstract submission</a></li>
								<li><a class="showSingle" target="6">Organizing</a></li>
								<li><a class="showSingle" target="7">Research</a></li>
								<li><a class="showSingle" target="8">Structuring the project</a></li>
								<li><a class="showSingle" target="9">Review and refine</a></li>
								<li><a class="showSingle" target="10">Design the project</a></li>
								<li><a class="showSingle" target="11">Feedback of the project</a></li>
								<li><a class="showSingle" target="12">Conclusion</a></li>

							</ul>
						<!-- </p> -->
					</div>
				</div>
				<div class="col-sm-8">
					<div class="home-result-index">
						<div id="div1" class="targetDiv">
							<b><p>
								<h3>Overview</h3></br>
								Project report is a part and parcel of the curriculum for every student in school, college, professional course or doctorate programme. This article briefs about the steps to be considered while writing a good project report for the school/ college starting from general guidelines to be followed before writing a project, structure of a report, refinement of the project to the point of receiving and giving feedback on the project report.
							</p></b></br>
							<p>Project work is a major activity for all students during their school or college days. Many people are known for coming out with creative ideas but there are very few of them who actually bring the idea on paper and present the facts in the form of a good project report. Mostly, all project reports appear to be similar as they all present the basic objective, description of the process and the benefit gained or conclusion drawn from the process. However, there are a few reports which stand out from others even though they would have followed the same pattern. This is because they would have taken extra effort to make the project report simple, clear, systematic and in a presentable manner.</br></br>

							Let's look at the steps involved in submission of a project work at school or college which can help you to be a class apart from others.</p>
						</div>
						<div id="div2" class="targetDiv">
							<p>
								<h3>Decide on the purpose</h3></br>
								The first step involved deciding on the topic of the project. A brain storming session can be held with the family or with friends to decide on the best topic to choose for a project. It is very rare that schools would give a specific topic for a project work. They basically give an idea and every student is allowed to run his imagination to decide on the topic for the project. </br></br>

							Detail the purpose of the project once the topic has been decided. The main aim should be that the project should be read by everyone. The final goal should be writing a report for others to read and comprehend. </br></br>

							The audience intended to addressed is to be kept in mind. Initially, the audience might be just the student, mentor and the examiner which is a short term aim. However, in long term, juniors, peers and other colleagues would also read the project. The project should be of high quality worth publishing and also to enable the future generation to learn from it and improve on the work done on the project.</p>
						</div>
						<div id="div3" class="targetDiv">
							<p>
								<h3>Plan the project</h3></br>
								Once the topic has been decided, the planning stage begins. An overall idea of the time frame for the project, sources from which information for the project is to obtained, people to be contacted for the project work, materials required for the project and overall idea about the sub-topics to be covered in the project work. The plan should be clear and concise. The student should be clear about eh aims and objectives of undertaking the project work.</br></br>

								In short the concept of the project should be clear with full details of:</br></br>

								What is the actual plan?</br>
								What are the exact requirements of the project?</br>
								Which particular area is to be concentrated?</br>
								How much research is required?</br>
								How can the project be made to look or sound different?</br>
							</p>
						</div>
						<div id="div4" class="targetDiv">
							<p>
								<h3>Review the plan</h3></br>
								A review at the preliminary stage of the project work will help in smooth progress of the project. The overall plan with all details mentioned above should be written in a note pad and reviewed after a day to ensure that every point is covered and the overall plan conforms to the project idea. It is always beneficial to give a day gap for review as mind generates fresh ideas after a break. 														</br>	
							The important point to be remembered is that even as a project progresses, the review process should be in ind. keep thinking about the outline of the project so that continuous improvement can be done.</p>
						</div>
						<div id="div5" class="targetDiv">
							<p>
								<h3>Abstract submission</h3></br>
								Most colleges, professional courses or doctorate courses require an abstract of the project to be submitted before the student pursues the project. The abstract needs to be detailed in a step by step manner and in simple English so that the instructor or mentor can have a good idea about the aim of the project and the benefits by undertaking the project.</br></br>

							Ensure that the abstract is eye catching and makes sense to others.</p>
						</div>
						<div id="div6" class="targetDiv">
							<p>
								<h3>Organizing</h3></br>
								Once the plan formulated and abstract approved, the next step is to organize things in accordance with the plan. All materials required should be kept ready, time to be devoted to the project allocated properly and all reference material identified. The new ideas which keep occurring in the process should be noted down clearly in a notepad kept separately for project work.</br>

							The approach to be followed while organizing the project report should be a top-bottom approach as is the management style of reporting.</br></br>

							This is a three step procedure for continual improvement: </br>
							First outlay the main heading details;</br>
							Write the sub heading details;</br>
							Finally a paragraph outlay of the project.</br></br>

							The ideas generated during the paragraph outlay should in the form of points, either numbered or bulleted, which will help in detailed writing of the project. Any possibility of graphs, diagrams, mathematical workings, presentation in tabular form should be explored and added in the paragraph outline.</p>
						</div>
						<div id="div7" class="targetDiv">
							<p>
								<h3>Research</h3></br>
								Research is the most important part for the success of any project.The information required for undertaking the project should be thoroughly researched through various sources of information. The internet throws up an ocean of information on any topic, this can be supplemented by books from libraries and also opinions from friends and family. The project reports of earlier batch of students can also be referred for further details and guidance.</br></br>

							Any external source of information, for example, if a survey is to be conducted as a part of the project, the survey should be conducted at the earliest so that the outcome can be known and the project can be modelled around this outcome. </p>
						</div>
						<div id="div8" class="targetDiv">
							<p>
								<h3>Structuring the project</h3></br>
								Once the information required for the project has been obtained and the reference details collected, the action of structuring and writing the project should be commenced. The project work should be systematically done as per the plan and the lay out planned in the initial stages. important points to be noted while writing the project are:</br></br>

							Summary of the project should be clear and should give an idea of the overall content or purpose of the project activity.</br>

							The description in the project should comprise of objective of the project, basic concept highlighted, main heading of the activity with sub-headings within each heading, conclusion drawn from the research activity undertaken and the ultimate benefit or result of the project should be clear and presented in a point wise manner. </br></br>

							Main points to be kept in mind while writing the project report should be:</br></br>

							The paragraphs should not be too lengthy. The title of the paragraphs should be catchy and self explanatory of the content of the paragraph. </br></br>

							Details taken from an external source should be clearly stated and the references should be given at the end of the project with names of the reference material.</br></br>

							Spacing between paragraphs should be optimum.</br></br>

							Highlighting of important concepts should be done carefully. Too much highlighting might dampen the impression of the project.</br></br>

							Margins on the left side of each page should be uniform.</br></br>

							Images increase the overall value of a project. Meaningful and self explanatory mages should be added to describe a process or benefit from a process in the project.
							</p>
						</div>
						<div id="div9" class="targetDiv">
							<p>
								<h3>Review and refine</h3></br>
								Any report cannot be perfect at the first shot. Every report should be re- read and refined multiple times to bring out the best possible project.</br>
							The final project should be critically self-reviewed and critically evaluated to assess if the project has been formulated based on the idea conceptualised while beginning the project. Any deviations should be rectified immediately and project re- designed as per the set goals.</br>
							The refinement should be done at every possible stage in order to bring out the best quality project report.</br></br>

							Three steps should be followed during review of the project:</br>
							Self review</br>
							Peer review and critical feedback</br>
							Mentor/ instructor review</p>
						</div>
						<div id="div10" class="targetDiv">
							<p>
							<h3>Design the project</h3></br>
						The project should be designed before submission. The saying 'Looks make a man' applies perfectly to a project report. A good project is judged by its look and feel by the reader. A well presented project work has a greater chance of being rated the best and being referred by seniors, juniors and peers.</p>
						</div>
						<div id="div11" class="targetDiv">
							<p>
								<h3>Feedback of the project</h3></br>
								It is always best to obtain a feedback after completion of the report and before submission of the project. Self review is always not good as we would not be in a position to point any shortcomings. A peer review would also not be fruitful as everyone in the group would be aware of the project and would not be in. Position to evaluate and provide feedback in a critical manner.</br></br>

								A feedback by a third person who has knowledge of the topic being written brings out better ideas to improve the project.</br></br>

								The person giving a feedback should keep the following things in mind:</br>
								Is the title and abstract meaningful and catchy?</br>
								Does the introduction present the overall essence of the project?</br>
								Is the detailed section meaningful and does to present facts clearly?</br>
								Is the project different from prior work or other reports?</br>
								Are the images, tables, graphs clear and understandable to a layman?</br>
								Are the final conclusion or result of the project report meaningful and presents something new to the reader?</br></br>

								The reviewer should be encouraged to give a fair report without considering personal relationship and the person receiving feedback should take it in the right sense.
								</p>
						</div>
						<div id="div12" class="targetDiv">
							<p>
								<h3>Conclusion</h3></br>
								The presentation, innovativeness and the detailed description in the project enhances the overall impression about a student and a mentor always prefers students with such special skills. Anyone can just study and gain good marks in exams but such special activities enhance the image of a student. Hence, it is very mortar that every project work or extra curricular activity is taken seriously and meticulously worked as this also develops presentation skills for the professional life.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="assets/js/func.js"></script>
</body>
</html>