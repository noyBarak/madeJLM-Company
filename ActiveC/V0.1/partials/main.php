<?php session_start(); ?>
<div id="main_wrap">
    <div id = "filter_main">
    Filter<br>
        <div class="filters" id="over80_filter">
            GPA 80+
        </div>
        <div class="filters"id="hasInstatution_filter">
            Oxford only
        </div>
        <div class="filters">
            GenderA

        </div>
        <div class="filters" id='clr_filter'>
            Clear
        </div>
    </div>
    <div id = "show_std">
two
    </div>
    <div id = "std_info">
	<?php
		$link = mysql_connect("5.100.253.198", "jobmadeinjlm","q1w2e3r4");
		if (!$link) {
			die("Could not connect: " . mysql_error());
		}
		$db_selected = mysql_select_db("jobmadei_db", $link);
		if (!$db_selected) {
			die ("Can't use internet_database : " . mysql_error());
		}
		$result = mysql_query ('SELECT * FROM student');
		$img_src = "../img/profilepic.png";
		while ($row = mysql_fetch_assoc($result)) {
		    if( !is_null($row['profile']) ){
                    $img_src="../../../../MadeinJLM-students/mockup/".$row['profile'];
            }
			echo "<div class='head' id='head_".$row['ID']."' > ";
			echo "<div class='head_image' id='headimage_".$row['ID']."' >".
			    "<img src=".$img_src." width='120px' height='110px'>".
			 "</div>";
			print_r($row['first_name']);
			echo "</div>";
		}



	?>
	<script>
	var id="-1";
	document.addEventListener('click', function(e) {
		e = e || window.event;
		var target = e.target || e.srcElement,
			text = target.textContent || text.innerText;
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
		
	if(target.className =="head" || target.className =="head_image"){
			console.log("this is the id : "+target.id);
			
			id =target.id.substring(target.id.indexOf("_")+1,target.id.length);
			console.log("this is the id : "+id);
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("show_std").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+id+"&func="+"1",true);
        xmlhttp.send();
			
			$("#show_std").show("slow", function() {
				// Animation complete.
			});
    } else { 
		
		if(target.id =="std_info"){
			$("#show_std").hide("slow", function() {
				// Animation complete.
			});
		}

		}
		if(target.id == "over80_filter" ){
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("std_info").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","getuser.php?q="+id+"&func="+"2",true);
			xmlhttp.send();
		}
		if(target.id == "hasInstatution_filter" ){
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("std_info").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","getuser.php?q="+id+"&func="+"3",true);
			xmlhttp.send();
		}
		if(target.id == "clr_filter" ){
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("std_info").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","getuser.php?q="+id+"&func="+"4",true);
			xmlhttp.send();
		}
		

	}
	, false);
	</script>
	
	
	
    </div>
</div>