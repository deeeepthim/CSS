<!DOCTYPE html>
<html>
<head>
	<title>assignmentcss19</title>
	<style type="text/css">
	

		body{
			background-color: black;
			/*color: white;*/
		}
		header,nav,article,section,footer,aside{
			display: block;
		}
		#container{
			width: 1000px;
			margin-right: 50px;
			margin-left: 70px;
		}
		a{
			color: white;
			text-decoration: none;
		}
		.lis{
			display: inline;
		    padding-right: 40px;
		    float: right;
		    color: white;

		}
		h1{
			float: left;
			color: white;

		}
		h3{
			color: white;
		}
		article{
			width: 30%;
		}
		#fst{

			float: left;
			margin-left: 20px;
		}
		#sec{
              float: left;
             margin-left:50px;
	

		}
		#thrd{
			float: right;
			margin-left:20px;
			
		

		}
		#foto{
			float: left;
		}
		#lucina{
			float: left;
		}
		#first{
			float: left;
		}
		#second{

			float: left;
		}
		.nnav{
			text-decoration: underline;
			list-style-type: none;
			line-height: 50px;
			margin-left: -40px;

		}
		hr{
			margin-left: -40px;
			width: 100%;
			border: 1px dotted grey;
		}
		p{
			color: grey;
		}

		


	</style>
</head>
<body>
<div id="container">
	<header>
		<h1>ARTIFICE</h1>
	    <ul>
	      <nav>
            <li class="lis"><a href="">CONTACT</a></li>
	        <li class="lis"><a href="">ABOUT</a></li>
	        <li class="lis"><a href="">PHOTOS</a></li>
	        <li class="lis"><a href="">BLOG</a></li>
	         <li class="lis"><a href="">HOMEPAGE</a></li> 
	      </nav>
	    </ul>
	</header>

	<section>
		<img src="images/pic1.jpg">
		</section>
		<aside>
			<article id="fst">
				<h3>WELCOME TO ARTICLE</h3>
				<P>This is <b>Article</b>,a free,fully standerds-compliant css template by <ins>TEMPLATED.</ins>This images used in the template arefrom <ins> PDPhoto.</ins>This free template is released under the <ins>Creative Commons Attribution</ins>license,so you're pretty much free to do whatever you want with it (even useit commercially)provided you give us credit fot it...Have fun :)</P>
			<article id="first" style="margin-right:100px">
    		   <h3>SUSCIPIT SED <br>PELLENTESQUE<br>NASCETUR</h3>
    		   <img id="foto" src="images/pic2.jpg" >
    		   <p id="lucina">Lacinia natoque<br>faucibusfringilla<br>egestas</p>
    	   </article>
				<article id="second">
    		   <h3>
    			PENATIBUS AMET<br> SED CONSEQUANT<br> ACCUMSAN
    		   </h3>
    		   <img src="images/pic4.jpg" width="95%">
    	</article>
    </article>

			<article id="sec">
				<h3>FRINGILLA PHARETRA QUIS</h3>
				<p>Phasellus condimentum quis nec suscipit vel phasellus rutrum.Tincidunt posuere eu integer risus magna lorem ipsum veroeros. </p>
			 <article style="width: 100%">
				<h3>VOLUTPAT CONDIMENTUM<br>AUCTOR DOLORE</h3>
				<p>Sapien  ullamcorper mus penatibus viverra curae erat<br>consectetur.Scelerisque eleifend quis ullamcoper<br>ante laoreet scelerisque.  </p>
				<nav>
					<ul>
						<li class="nnav"><a href="">Quis pellentesque orci cras</a></li>
						<hr>
						<li class="nnav"><a href="">Fringilla laoreet ultrices rhoncus</a></li>
						<hr>
					</ul>
				</nav>

			 </article>
			</article>
			<article id="thrd">
				<h3>VOLUTPAT CONDIMENTUM<br>AUCTOR MAGNA</h3>
				<p>Rhoncus et dui dignissim elementum.Vivamus lorem eu nisl phasellus lorem dolore.</p>
				<article style="width: 100%;">
					<nav>
						<ul>
							<li class="nnav"><a href="">Mollis ornarearcu suscipit</a></li>
							<hr>
							<li class="nnav"><a href="">Accumsanquam ante</a></li>
							<hr>
							<li class="nnav"><a href="">Volutpat odio neque posuere</a></li>
							<hr>
							<li class="nnav"><a href="">Volutpat urna tristique quisque</a></li>
						</ul>
					</nav>
					<h3>CUBILIA TURPIS</h3>
					<nav class="nnav">
					<a href="" style="margin-left: 40px">Libero duis ultrices</a>
					</nav>
				</article>
			</article>
		</aside>
    <aside>
    	
    </aside>
		
	

</div>
</body>
</html>