<header>
    <ul class="nav">
      <li><a href="welcome.php">Logo </a></li>
      <li><a href="skapa.php">Om oss</a></li>
      <li><a href="boking.php">Vad vi gör</a></li>
    </ul>
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