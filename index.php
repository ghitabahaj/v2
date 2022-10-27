<?php
    require 'scripts.php' ;
	require 'scripts.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>YouCode | Scrum Board</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- ================== END core-css ================== -->
</head>
<body>

	<!-- BEGIN #app -->
	<div id="app" class="app-without-sidebar">
		<!-- BEGIN #content -->
		<div id="content" class="app-content main-style">
			<div class="d-flex justify-content-between">
				<div class=" ">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item active">Scrum Board </li>
					</ol>
					<!-- BEGIN page-header -->
					<h1 class="page-header">
						Scrum Board 
					</h1>
					<!-- END page-header -->
				</div>
				<div class="">
					<button class="btn btn-warning  rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-task" ><i class="bi bi-plus-lg"></i>&emsp; Add Task</button>
				</div>
			</div>
			<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-4 col-md-6 my-3 col-sm-12 ">
						<div class="panel panel-inverse">
						<div class=" panel-heading ">
							<h4 class="panel-title" >To do (<span id="to-do-tasks-count"></span>)</h4>
						</div>
						<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0"  id="to-do-tasks">
						   <?php
								//PHP CODE HERE
								//DATA FROM getTasks() FUNCTION
							?>
						</div>
					</div>
				</div>
				<div class="col-xxl-4 col-md-6 my-3 col-sm-12">
					<div class="panel panel-inverse">
						<div class=" panel-heading ">
							<h4 class="panel-title">In Progress (<span id="in-progress-tasks-count"></span>)</h4>

						</div>
						<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0" id="in-progress-tasks">
						   <?php
								//PHP CODE HERE
								//DATA FROM getTasks() FUNCTION
							?>
						</div>
					</div>
				</div>
				<div class="col-xxl-4 col-md-6 my-3 col-sm-12">
					<div class="panel panel-inverse">
						<div class="  panel-heading ">
							<h4 class="panel-title">Done (<span id="done-tasks-count"></span>)</h4>
						</div>						
						<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0" id="done-tasks">
					       <?php
								//PHP CODE HERE
								//DATA FROM getTasks() FUNCTION
							?>
						</div>
				</div>
			</div>
		</div>
	</div>
		<!-- END #content -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- TASK MODAL -->
		<!-- Modal content goes here -->
		<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="scripts.php" method="POST">
					<div class="modal-header">
						<h5 class="modal-title">Add Task</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="task-id">
							<div class="mb-3">
								<label class="form-label">Title</label>
								<input type="text" name="title" class="form-control" id="task-title"/>
							</div>
							<div class="mb-3">
								<label class="form-label">Type</label>
								<div class="ms-3">
									<div class="form-check mb-1">
										<input class="form-check-input" name="typeid" type="radio" value="1" id="task-type-feature"/>
										<label class="form-check-label" for="task-type-feature">Feature</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" name="typeid" type="radio" value="2" id="task-type-bug"/>
										<label class="form-check-label" for="task-type-bug">Bug</label>
									</div>
								</div>
								
							</div>
							<div class="mb-3">
								<label class="form-label">Priority</label>
								<select class="form-select" name="priorityid" id="task-priority">
									<option value="">Please select</option>
									<option value="1">Low</option>
									<option value="2">Medium</option>
									<option value="3">High</option>
									<option value="4">Critical</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select class="form-select" name="statusid" id="task-status">
									<option value="">Please select</option>
									<option value="1">To Do</option>
									<option value="2">In Progress</option>
									<option value="3">Done</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Date</label>
								<input type="date" name="date" class="form-control" id="task-date"/>
							</div>
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control"  name="description" rows="10" id="task-description"></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
		<!-- modal 2 -->
		<!-- <div class="modal fade" id="modal-task-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<div class="h1">Update Task</div>
				  </div>
				  <div class="modal-body"> -->
					<!--begin form-->
					<!-- <form action="scripts.php" name="form_update" class="form" method="POST">
						<div class="form-group">
							<label for="title" class="h3" >Title</label>
							<input type="text" class="form-control" name="title1" id="title" placeholder="title">
						</div>
						<label  class="h3 mt-2">Type</label> <br>
						<div class="form-check">
							<input type="radio" name="typeid" id="feature" value="1" class="h4">
							<label class="form-check-label h6" for="feature">Feature&emsp;</label> <br>
							<input type="radio" name="typeid" id="bug" value="2"   class="h4" >
							<label class="form-check-label h6" for="bug">Bug</label>
						</div>
						<div class="form-group">
							<label for="priority" class="h3" >Priority</label>
							<select name="priorityid"  class="form-select form-select-lg mb-3" id="priority" >
							        <option value="">Please select</option>
									<option value="1">Low</option>
									<option value="2">Medium</option>
									<option value="3">High</option>
									<option value="4">Critical</option>
							</select>
							<label for="status" class="h3" >Status</label>
							<select name="statusid"  class="form-select form-select-lg mb-3" id="status">
							        <option value="">Please select</option>
									<option value="1">To Do</option>
									<option value="2">In Progress</option>
									<option value="3">Done</option>							
							</select>
							<label for="date" class="h3" >Date</label>
							<input type="date" class="form-control" name="date" id="date">
							<label for="description" class="h3" >Description</label> <br>
							<textarea rows="5" class="form-control" name="description" id="description"></textarea>
						</div>
					</form> -->
					<!--end form-->
				  <!-- </div>
				  <div class="modal-footer">
				  <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="btn btn-danger task-action-btn" id="task-delete-btn">Delete</a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
				  </div>
				</div>
			  </div>
		</div> -->
		<!--end modal 2 -->

	
	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
    <script src="scripts.js"></script>
  


</body>
</html>