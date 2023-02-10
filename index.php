<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  
  
</head>
<body>

	<div class="calculator">
		<!-- <h3 class="text-center bg-primary"> Simple Calculator</h3> -->
		<form name="form1">
		<input type="text" class="form-control display" value="0" name="display">
		</form>
		<div class="div">
		<button class="btn btn-primary btn" value="7" onclick="displayMe(this.value)">7</button>
		<button class="btn btn-primary btn" value="8" onclick="displayMe(this.value)">8</button>
		<button class="btn btn-primary btn" value="9" onclick="displayMe(this.value)">9</button>
		<button class="btn btn-info btn" value="&#247;" onclick="displayMe(this.value)">&#247;</button>
	</div>
	<div class="div">
		<button class="btn btn-primary btn" value="4" onclick="displayMe(this.value)">4</button>
		<button class="btn btn-primary btn" value="5" onclick="displayMe(this.value)">5</button>
		<button class="btn btn-primary btn" value="6" onclick="displayMe(this.value)">6</button>
		<button class="btn btn-info btn" value="&times;" onclick="displayMe(this.value)">&times;</button>
	</div>
	<div class="div">
		<button class="btn btn-primary btn" value="1" onclick="displayMe(this.value)">1</button>
		<button class="btn btn-primary btn" value="2" onclick="displayMe(this.value)">2</button>
		<button class="btn btn-primary btn" value="3" onclick="displayMe(this.value)">3</button>		
		<button class="btn btn-info btn" value="-" onclick="displayMe(this.value)">-</button>
	</div>
	<div class="div">
		<button class="btn btn-primary btn" value="0" onclick="displayMe(this.value)">0</button>
		<button class="btn btn-primary btn" value="00" onclick="displayMe(this.value)">00</button>
		<button class="btn btn-primary btn" value="." onclick="displayMe(this.value)">.</button>		
		<button class="btn btn-info btn" value="+" onclick="displayMe(this.value)">+</button>
	</div>
	<div class="div">
		<button class="btn btn-danger btn" onclick="Clear()">C</button>
		<button class="btn btn-danger btn" value="Del" onclick="DeleteMe()">Del</button>
		<button class="btn btn-info btn" onclick = "squireRoot()">&#8730;</button>
		<button class="btn btn-info btn" value="=" onclick = "results()">=</button>
		
	</div>


	</div>
	<script>

function displayMe(x){
	// alert(document.form1.display.value[0]);
		if(document.form1.display.value[0] < 1)
		{
			document.form1.display.value = x;
		}
		else
		{
			document.form1.display.value =  document.form1.display.value + x;
		}
	}
function results()
	{
	var exp = document.form1.display.value;
	if(exp)
	{
	document.form1.display.value = eval(exp)
	}
	}
function Clear()
	{
		document.form1.display.value = 0;
	}
function squireRoot()
	{	
			document.form1.display.value = Math.sqrt(document.form1.display.value);
	}
function DeleteMe()
		{
			//var txt = document.form1.display.value;
			document.form1.display.value = document.form1.display.value.substring(0, document.form1.display.value.length-1);

		}
</script>

</body>
</html>

