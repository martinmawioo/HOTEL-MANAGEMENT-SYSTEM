<?php include('header.php'); ?>
<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
	
        <div id="page">
           <?php include ('nav_sidebar.php');?>
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">
                        

                    </div>
                    <div id="body">








                        <h3>About US</h3>
                        <div class="hero-unit-table">

							<div id="accordion">
										<h3>About The Company</h3>
										<div>Moosikay Melos Musical Instruments Corporation, a musical instruments company, retailers, distributes, 
										and markets various musical instruments. The company store will be place on Polentes Building, second floor,
										Extension Street, Silay City The company offers electric guitars, bass guitars, acoustic guitars, guitar amplifiers, 
										drums, piano, bass amplifiers, basses, portable sound systems, audio products, and related equipment; and accessories,
										including strings, replacement parts, cases, straps, clothing, and more. The company was founded in 2006 and is based
										in Silay City, Negros Occidental , Philippines.  </div>
										<h3>Mission</h3>
										<div>Moosikay Melos- an outlet that provide individuals the satisfaction of owning a wide range of high 
											quality and reliable musical instruments.</div>
										<h3>Vision</h3>
										<div>We fill the joy of music into every household, through quality musical instruments and holistic music 
											tutorials.</div>
										<h3>About the Developer</h3>
										<div>T and T (Tried and True ) Software Solutions is a software firm which provides software to cater every business needs. As our tag line
										says" Your Problem ,Our Solution".</div>
							</div>
                        </div>
                    </div>
                    <div id="footer">
                        <?php include('footer.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('footer_bottom.php');
    ?>
		<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
</body>
</html>