<!DOCTYPE html>
<html>
<head>
<title>Solo Cup Detection, Ltd.</title>

<?php require_once('./assets/php/incl.php'); ?>
</head>
<body>
	<header>
		<h1>Solo Cup Detection, Ltd.</h1>
		<h2>a project by Don McCurdy</h2>
	</header>
	<article id="content">
		<p>This is what my content looks like.</p>
		
		      <div id="fb-root"></div>
		      <script>
		        window.fbAsyncInit = function() {
		          FB.init({
		            appId      : '127705910720396', // App ID
		            channelUrl : './assets/php/channel.php', // Channel File
		            status     : true, // check login status
		            cookie     : true, // enable cookies to allow the server to access the session
		            xfbml      : true  // parse XFBML
		          });
		          FB.api('/me', function(user) {
		            if (user) {
		              var image = document.getElementById('image');
		              image.src = 'https://graph.facebook.com/' + user.id + '/picture';
		              var name = document.getElementById('name');
		              name.innerHTML = user.name
		            }
		          });
		        };
		        // Load the SDK Asynchronously
		        (function(d){
		           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		           if (d.getElementById(id)) {return;}
		           js = d.createElement('script'); js.id = id; js.async = true;
		           js.src = "//connect.facebook.net/en_US/all.js";
		           ref.parentNode.insertBefore(js, ref);
		         }(document));
		      </script>

      <div align="center">
        <img id="image"/>
        <div id="name"></div>
      </div>
		
		
		
	</article>
	<footer>
		<p>For CSE519T Advanced Machine Learning at Washington University in St. Louis</p>
	</footer>

</body>
</html>
