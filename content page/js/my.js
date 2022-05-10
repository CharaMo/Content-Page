$(document).ready(function(){
	
	
		$("#frmsign").submit(function(event){
			event.preventDefault();
			
				$.post("api/api.php?q=1", $("#frmsign").serialize(),function(res)
				{
					
					if(res=="ok"){
						$("#frmsign").hide(500);
						$(".msg").html("<div class=\"alert alert-success\"><strong>Success!</strong> \"You can <a href=\"index.php\" class=\"alert-link\"> login </a>now.\"</div>");
						
					}
					
					else {
						$("#frmsign").hide(500);
						$(".msg").html("<div class=\"alert alert-warning\"><strong>Warning!</strong> \"Your email exists.<a href=\"signup.php\" class=\"alert-link\"> Sign up </a> again\"</div>"+res);
						
					}
				});
		});
		
		
	
		$("#frmlogin").submit(function(event){
			event.preventDefault();
			
			$.post("api/api.php?q=2", $("#frmlogin").serialize(),function(res)
			{
				if(res=="ok"){
					window.location.href="user.php";
					
				}
				
				else{
					$("#frmlogin").hide(500);
					$(".msg1").html("<div class=\"alert alert-warning\"><strong>Warning!</strong> \"Your email or your password is wrong.<a href=\"index.php\" class=\"alert-link\"> Login </a> again\"</div>"+res);
				}
			});
		});
		
		
		$("#frmcreate").submit(function(event){
			event.preventDefault();
			
			$.post("api/api.php?q=3", $("#frmcreate").serialize(),function(res)
			{
				if(res=="ok"){
					$("#frmcreate").hide(500);
					$(".msg2").html("<div class=\"alert alert-success\"><strong>Success!</strong> \"Your data saved\"</div>");
				}
				
				else{
					$("#frmcreate").hide(500);
					$(".msg2").html("<div class=\"alert alert-warning\"><strong>Warning!</strong> \"Data error.<a href=\"create.php\" class=\"alert-link\"> Create </a> again\"</div>"+res);
				}
			});
		});
		
		
		$("#frmprof").submit(function(event){
			event.preventDefault();
			
			$.post("api/api.php?q=7", $("#frmprof").serialize(), function(res)
			{
				if(res=="ok"){
					$("#frmprof").hide(500);
					$(".msg").html("<div class=\"alert alert-success\"><strong>Success!</strong> \"Your data updated\"</div>");
				}
				
				else {
					$("#frmprof").hide(500);
					$(".msg").html("<div class=\"alert alert-warning\"><strong>Warning!</strong>\"Data error.<a href=\"myprofile.php\" class=\"alert-link\">Try again</a>\"</div>");
				}
			});
		});
		
		
		$("#frmedit").submit(function(event){
			event.preventDefault();
			
			$.post("api/api.php?q=9", $("#frmedit").serialize(),function(res)
			{
				console.log(res);
				if(res=="ok"){
					$("#frmedit").hide(500);
					$("#msg2").html("<div class=\"alert alert-success\"><strong>Success!</strong> \"Your data updated\"</div>");
				}
				
				else{
					$("#frmedit").hide(500);
					$("#msg2").html("<div class=\"alert alert-warning\"><strong>Warning!</strong> \"Data error.<a href=\"mycontents.php\" class=\"alert-link\"> Try again</a>\"</div>"+res);
				}
			});
		});
		
		$("#src").keyup(function(){
			var con=$(".cnt");
			var s1=$("#src").val().toLowerCase();
			for (i=0;i<con.length;i++){
				if($(con[i]).text().toLowerCase().indexOf(s1)<0) $(con[i]).hide();
				else $(con[i]).show();
			}
		});
		
		
		
		$("#src1").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$(".tt1 tr").filter(function() {
		 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
		});	
	
});
		function getmyContents(){
		
			$.get("api/api.php?q=4", function(res){
				var js=JSON.parse(res);
				console.log(js);
				html1="";
				for(i=0;i<js.length;i++) {
					
			
					html1+="<div class=cnt><h2 style='cursor:pointer' onclick=\"putmymodal("+js[i].idc+")\">"+js[i].title+"</h2><p>"+js[i].description.substring(0,200)+"</p></div>";
				
			
				}
				$("#cont").html(html1);
			});
		}
		
		
		
		function getallContents(){
			$.get("api/api.php?q=10", function(res){
				var js=JSON.parse(res);
				
				html3="";
				html3+=" <table class='table table-hover tt1'>";
				html3+="<tr><th>Title</th><th>Datetime</th><th>Users</th></tr>";
				for(i=0;i<js.length;i++){
					
					html3+="<tr style='cursor:pointer' onclick=\"putallmodal("+js[i].idc+")\"><td>"+js[i].title+"</td><td>"+js[i].date1+"</td><td>"+js[i].fullname+"</td></tr>";
					
				
				}
				html3+="</table>";
				$("#cont2").html(html3);
			});
		}
		
		
		function putallmodal(id1){
			$("#myModal").modal('show');
				
				$.get("api/api.php?q=6&id="+id1, function(res){
					var js=JSON.parse(res);
					
					$("#mtitle").html(js.title);
					$("#mbody").html(js.description);
					html2="<a href='"+js.url+"'></a> - User:"+js.fullname+" -Date: "+js.date1+"";
					$("#mfooter").html(html2);
		});
		
		}
			

		
		
		
		function putmymodal(id1){
			
			$("#myModal").modal('show');
			
			$.get("api/api.php?q=6&id="+id1, function(res){
				var js=JSON.parse(res);
				
				$("#mtitle").html(js.title);
				$("#mbody").html(js.description);
				html2="<button onclick='edit("+id1+")'>Edit</button><button onclick='delete1("+id1+")'>Delete</button>";
				$("#mfooter").html(html2);
		
				
			});
			
			
		}
		
		
		function getmyData(){
			$.get("api/api.php?q=5", function(res){
				var js= JSON.parse(res);
				console.log(js);
				$("#flname").val(js.fullname);
				$("#pwd").val(js.password);
				$("#email").val(js.email);
				$("#phone").val(js.phone);
				$("#sex").val(js.sex);
			});
		}
		
		
		function edit(id1){
			window.location.href="edit.php?id="+id1;
		}
		
		function getEdit(id1){
			
			$.get("api/api.php?q=6&id="+id1, function(res){
				var js=JSON.parse(res);
				$("#title").val(js.title);
				$("#descr").html(js.description);
				$("#url").val(js.url);
			});
		}
		
		
		function delete1(id1){
			$.get("api/api.php?q=8&id="+id1, function(res){
				$(".cnt"+id1).remove();
				$("#myModal").modal('hide');
				
				getmyContents();
			});
		}
		
		function getallUsers(){
			$.get("api/api.php?q=11", function(res){
				var js=JSON.parse(res);
				html1="";
				
				for(i=0;i<js.length;i++)
				{
					html1+="<tr><td>"+js[i].fullname+"</td><td>"+js[i].email+"</td><td>"+js[i].phone+"</td></tr>";
				}
				$("#allu").html(html1);
			
		});
		}
		
		
	
	
	
	
	
	
	
