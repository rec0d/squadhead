<header>
 			<nav>
				
				<ul class="topnav">
                    <a href="index.html" class="header-brand"><img src="img/logo.png"></a>
  					<li><a class="active" href="#home">Home</a></li>
  					<li><a href="#ranks">Ranks</a></li>
  					<li><a href="#maps">Maps</a></li>
  					<li><a href="#store">Store</a></li>
  					<li><a href="#character">Character</a></li>
				</ul>			
 				
 			</nav>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
      $(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 

    // passes on every "a" tag 
    $(" a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).closest("li").addClass("active");
        }
    });
});

    </script>
</header>
