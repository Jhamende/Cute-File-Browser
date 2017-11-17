
<!DOCTYPE html>
<html> 
	<head lang="en">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Vasco File Browser</title>
		<!-- Include our stylesheet -->
		<link href="assets/css/styles.css" rel="stylesheet"/> 

		<link rel="stylesheet" href="/assets/fancybox-master/dist/jquery.fancybox.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	</head> 
	<body>
			<div class="filemanager">
			<div class="search">
				<input type="search" placeholder="Find a file.." />
			</div>
			<div class="breadcrumbs"></div>
			<button class="button" onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</button>
			<a class="button" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>

			<ul class="data"></ul>
			<div class="nothingfound">
				<div class="nofiles"></div>
				<span>No files here.</span>
			</div>
				
			</div>

<script>
function goBack() {
    window.history.back();
}
</script>


		<!-- Include our script files -->
		<!--- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
		<!-- <script src="https://code.jquery.com/jquery-2.2.4.js"></script> -->
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/fancybox-master/dist/jquery.fancybox.js"></script>



<script>
$('.fancybox-media').fancybox({
    type: 'iframe',
    width: 800,
    height: 580,
    // add
    fitToView: false,
    iframe : {
      preload : false
    }
});

</script>


	</body>
</html>
