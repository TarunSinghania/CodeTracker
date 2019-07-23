$( document ).ready(function() {	// body...
	//$('.second-level-menu-list').append('<li>ADD TO</li> ');
 	
 	//$('.second-level-menu-list').append('<input type="text" id ="tags">');
	///$('#header').append('<select id ="da" class="js-example-basic-multiple" name="states[]" multiple="multiple"><option value="dp">DP</option><option value="graph">Graphs</option><option value="Segment trees">Segment Trees</option></select>');
	$('#header').append('<select id ="da" class="js-example-basic-multiple" name="states[]" multiple="multiple"><option value="dp">DP</option><option value="Segment trees">Segment Trees</option><option value="math">math</option><option value="greedy">greedy</option><option value="data structures">data structures</option><option value="brute force">brute force</option><option value="graphs">graphs</option><option value="dfs and similar">dfs and similar</option><option value="bfs">bfs</option><option value="trees">trees</option><option value="constructive algorithms">constructive algorithms</option><option value="binary search">binary search</option><option value="sortings">sortings</option><option value="string">string</option><option value="number theory">number theory</option><option value="combinatorics">combinatorics</option><option value="divide and conquer">divide and conquer</option><option value="probabilities">probabilities</option><option value="flows">flows</option><option value="geometry">geometry</option><option value="dsu">dsu</option><option value="bitmasks">bitmasks</option><option value="two pointers">two pointers</option><option value="fft">fft</option><option value="shortest paths">shortest paths</option><option value="bitmasks">bitmasks</option><option value="hashing">hashing</option><option value="games">games</option><option value="string suffix structures">string suffix structures</option><option value="graph matchings">graph matchings</option><option value="interactive">interactive</option><option value="meet-in-the-middle">meet-in-the-middle</option><option value="chinese remainder theorem">chinese remainder theorem</option><option value="interactive">interactive</option><option value="ternarty search">ternarty search</option></select>');
 	
 	$('.js-example-basic-multiple').select2();
	$('.select2-container').addClass('onc');
 	$('#header').append('<button type="button" id="done" class="btn b2 " style="color:white;">Done</button>');
 	$('#header').append('<button type="button" id="todo" class="btn b1" style="color:white;"> To-do</button>');

   
	$('#todo').click(function(event) {
 		 //var tags = $('#tags').val().split(",");
 		console.log( $('#da').val());
 		 var tags = $('#da').val();
 		 chrome.runtime.sendMessage({work: "todo", tags :tags });
 	  	alert("This program was added to to-do.");
 	});

 	$('#done').click(function(event) {
 	 // var tags = $('#tags').val().split(",");
 	  var tags = $('#da').val();
 	  	console.log( $('#da').val());
 	  chrome.runtime.sendMessage({work: "done", tags :tags });
 	  alert("This program was added to done");
	});


});