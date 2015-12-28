
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type ="text/css">
  body{
    margin: 20px
  }
	input{
		display: inline-block;
		margin: 0 10px 10px 0;
	}

	.block{
		width: 800px;
		margin: 10px 10px 10px 0;
		vertical-align: top;
		display: inline-block;
		border: 1px solid silver;
		border-radius: 20px;
		padding: 20px;
		
	}
  .block_small{
    width: 250px;
    margin: 10px 10px 10px 0;
    vertical-align: top;
    display: inline-block;
    border: 1px solid silver;
    border-radius: 20px;
    padding: 20px;
    
  }
  td.task_name{
    text-decoration: none;
  }
  button{
    vertical-align: top;
  }
	</style>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   	<script>
      $(document).ready(function(){

      $.get("/tasks/index_html",function(res){
        //display all
        $('#tasks').html(res);
      });

        $('form.create').submit(function(){
          $.post('/tasks/create',$(this).serialize(),function(res){
            $('#tasks').html(res);
          });
          return false;
        });
 

      });//document ready
    </script>
</head>
<body>
    <div id="tasks" class = 'block'>

    </div>
    <div id = "create_tasks" class = 'block_small'>
      <h4>Create a new Task</h4>
      <form action="/tasks/create" method = "post" class = "create">
        <input type="text" name = "name">
        <br>
        <input type="submit" class = 'btn btn-success' value = "Add Task">
      </form>
    </div>
    
  </body>
</html>