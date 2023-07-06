$(document).ready(function(){
	tproject();
	function tproject(){
		$.ajax({
			url : "action.php",
			method : "post",
			data : {admin_home_reload:1},
			// dataType : 'json',
			success : function(data){
				// console.log(data);
				$('#tusers').html(data);
			}
		});
	}

	tcomments();
	function tcomments(){
		$.ajax({
			url : "action.php",
			method : "post",
			data : {admin_count_comment:1},
			// dataType : 'json',
			success : function(data){
				// console.log(data);
				$('#viewers').html(data);
			}
		});
	}

	tfeedback();
	function tfeedback(){
		$.ajax({
			url : "action.php",
			method : "post",
			data : {admin_count_feedback:1},
			// dataType : 'json',
			success : function(data){
				// console.log(data);
				$('#feedback').html(data);
			}
		});
	}

	sfeedback();
	function sfeedback(){
		$.ajax({
			url : "action.php",
			method : "post",
			data : {admin_show_feedback:1},
			// dataType : 'json',
			success : function(data){
				// console.log(data);
				$('#present').html(data);
			}
		});
	}

	sproject();
	function sproject(){
		$.ajax({
			url : "action.php",
			method : "post",
			data : {admin_show_project:1},
			// dataType : 'json',
			success : function(data){
				// console.log(data);
				$('#viewprojectsource').html(data);
			}
		});
	}

	// select filter function
	$(document).on('click', '#filterSelect', function(e){
	e.preventDefault(); 
		var filter=$('#filterSelect').val();
		$.ajax({
			url : "../actions/action.php",
			method : "post",
			data : {loadproducts:1,filter:filter},
			dataType : 'json',
			success : function(data){
				$('#updatedfields').html(data);
				
			}
		});
	});

	// add products
	$('#add-products').on('submit',function(e){
		e.preventDefault();
		$.ajax({
			url : "action.php",
			method : "post",
			data : new FormData(this),
			contentType : false,
			processData : false,
			success : function(data){
				console.log(data);
				alert(data);
				// if(data=="Product's added!!"){
				// 	$('#add-products')[0].reset();
				// }
				$('#add-products')[0].reset();
			}
		});
	});

	// update btn triggers
	var product_price;
	var status;
	$('body').delegate('.updatebtn','click',function(e){
		e.preventDefault();
		var product_id = $(this).attr("id");
		product_price=$('#updateprice'+product_id).val();
		status=$('#status'+product_id).val();
		$.ajax({  
        	url:"../actions/action.php",  
        	method:"POST",
        	data:{  
        	    update:1,
        	    product_id:product_id,
        	    product_price:product_price,
        	    status:status
        	},  
        	success:function(data){
        		if(data=="yes"){
        			alert("This Poduct is updated. Keep going on or select category to see the Price of Products!!");
        		}
        		if(data=="error"){
        			alert("Something went wrong!!");
        		}
        		                  
        	}  
        });  
	});


	// delete btn triggers
	$('body').delegate('.delbtn','click',function(e){
		e.preventDefault();
		var product_id = $(this).attr("id");
		var pdimage=$('#productimage'+product_id).val();
		$.ajax({  
        	url:"../actions/action.php",  
        	method:"POST",
        	data:{  
        	    delete:1,
        	    product_id:product_id,
        	    pdimage:pdimage
        	},  
        	success:function(data){
        		if(data=="deleted"){
        			alert("Products is Deleted!!!");
        		}
        		if(data=="Image Can't Deleted"){
        			alert("Product's can't deleted because maybe you deleted image of products.");
        		}
        		if(data=="Products can't Deleted."){
        			alert("Products error you need to check database!!!");
        		}
        		                  
        	}  
        });  
	});
	
});

// order page function

