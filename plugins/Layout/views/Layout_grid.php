<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Grid | CSScaffold</title>
	
	<style type="text/css">
		<?= file_get_contents(CSScaffold::$cached_file); ?>
	</style>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			if (window.location.href.indexOf('grid')>0) 
			{
				$('#page').addClass('showgrid');
			}
		});
	</script>

</head>
<body>

<div class="container">

	<div class="columns-12">
		<h1>Grid</h1>
		<p class="page-intro">These are the grid tests and examples. They're using the classes and the mixins to create layouts. These tests
		are made specifically for the grid setup in master.css and will probably break if you use anything other than 12 columns.
		This is just meant to provide an example to work from.</p>
	</div>
	
	<hr/>
	
	<div class="box columns-12">
		<h2>Setting up your grid</h2>
		<p>You need to setup your grid in your CSS to take advantage of the Layout plugin. To create your grid, use <code>@grid</code>:</p>
			
			<pre><code>@grid
{
	column-width:50;
	column-count:12;
	gutter-width:10px;
	baseline:20px;
}</code></pre>

		</div>
	
	<hr/>
	
	<div class="wireframe">
		<div class="box columns-12">
			<h2>Layout Method 1 - Using classes</h2>
			<p>This section uses normal <code>div</code>s with columns classes on them. For example:</p>
			<pre><code>&lt;div class="columns-1">&lt;/div></code></pre>
			<p>This is one method for creating layouts which will be familiar to you if you've used Blueprint or 960.gs. All of these classes are generated
			automatically for you based on those grid settings. You have access to:</p>
			<ul>
				<li>.columns-x</li>
				<li>.columns-x</li>
				<li>.group</li>
				<li>.push-x</li>
				<li>.pull-x</li>
				<li>.baseline-up</li>
				<li>.baseline-down</li>
				<li>.baseline</li>
				<li>.append-x</li>
				<li>.prepend-x</li>
			</ul>
			
			<p>See the <a href="http://wiki.github.com/anthonyshort/csscaffold/layout">wiki page about layout classes</a> for more information.</p>
		</div>
		<div class="columns-1"></div>
		<div class="columns-11 last"></div>
		<div class="columns-2"></div>
		<div class="columns-10 last"></div>
 		<div class="columns-3"></div>
 		<div class="columns-9 last"></div>
 		<div class="columns-4"></div>
 		<div class="columns-8 last"></div>
 		<div class="columns-5"></div>
 		<div class="columns-7 last"></div>
 		<div class="columns-6"></div>
 		<div class="columns-6 last"></div>
 	</div>
 	
 	<hr/>
 	
 	<div id="custom-content" class="wireframe">
		<div class="box columns-12">
			<h2>Layout Method 2 - Using Mixins</h2>
			<p><a href="http://wiki.github.com/anthonyshort/csscaffold/mixins">Mixins</a> are a really great way to create dynamic CSS and reduce the number of classes in your markup. In this example, I've named 
			the elements for what they are - #header, #content, #sub-content etc - so they are semantically correct. Now I can use Mixins in the CSS
			to lay them out:</p>
			<pre><code>#header		{ +columns(12); }
#content 	{ +columns(6); }
#sub-content 	{ +columns(3); }
#aside 		{ +columns(3); }
#footer 	{ +columns(12); }</code></pre>

			<p><code>+columns</code> is a Mixin which is built-in to Scaffold, but will only function when you have the Layout plugin enabled and 
			setup your grid using <code>@grid</code>. You can check out the <a href="http://wiki.github.com/anthonyshort/csscaffold/mixins">documentation for Mixins</a>.</p>
		</div>
		<div id="header"></div>
		<div id="content"></div>
		<div id="sub-content"></div>
		<div id="aside"></div>
		<div id="footer"></div>
	</div>
 	
 	<hr/>
 	
 	<div class="box columns-12">
 		<h2>Push and pull</h2>
 		<p>You can move grid units around by using the <code>.push</code> and <code>.pull</code> classes. This example may look broken, 
 		but all of these units have been pushed, pulled and shifted on the baseline.</p>
 		
 		<p>See the <a href="http://wiki.github.com/anthonyshort/csscaffold/layout">documentation</a> for the layout classes for more information.</p>
 	</div>
 	
	<div class="wireframe">
		
		<div class="columns-3 push-1"></div>
		<div class="columns-5 push-3"></div>
		<div class="columns-6 push-6"></div>
		<div class="columns-2 append-3">Appended with 3</div>
		<div class="columns-4 pull-2">Pulled back over the previous column and baseline shift down</div>
		<div class="columns-5 last baseline-up-1">Baseline shift up one</div>
	</div>
	
	<hr />
	
	<div class="box columns-12">
		<h2>Content tests</h2>
		<p>This example shows how you can style up your content using classes in the markup. It's based on Jason Santa Maria's Modular Layout System. Most of the 
		classes here have been generated for you.</p>
		
		<p>Take a look at the markup for this section or <a href="../stylesheets/demo/layout.css?raw">view the css</a>.</p>
	</div>
	
	<div id="content-test" class="columns-12">
  
		<h2>Example Layout Guidelines</h2>
 
		<div class="figure columns-4 left">
			<img src="image.png" class="baseline-6" alt="" />
			<p>Images go in a div with the classes &#8220;<code>figure size direction</code>&#8221;. &#8220;<code>size</code>&#8221; can be <code>columns-x</code> where x is the number of columns. Captions go in a <code>p</code>.</p>
		</div>
 
		<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
 
		<h4>Lorem Ipsum Dolor</h4>
 
		<div class="figure columns-2 right">
			<img src="image.png" class="baseline-6" alt="" />
			<p>Right image.</p>
		</div>
 
		<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
 
		<div class="figure columns-2 push-2 left">
			<img src="image.png" class="baseline-6" alt="" />
			<p>For inset images, add the class <code>push-x</code> to push it x-number of columns to the <code>figure</code> div.</p>
		</div>
 
		<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata.</p>
		
		<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata.</p>
 
		<img src="image.png" alt="" class="figure columns-12 solo baseline-10" />
		<p class="caption columns-3">For images without captions, or captions set apart, add <code>solo</code> to the <code>figure</code> div, and move the caption <code>p</code> directly outside it using similar styles (e.g., &#8220;<code>caption columns-2 left</code>&#8221;).</p>
 
 
		<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
 
		<img src="image.png" class="figure columns-6 baseline-6 left" />
 
		<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
 
	</div>

</div>


</body>
</html>