$(document).ready(function(){
	
	jQuery(function(){
	        //  jQuery('#showall').click(function(){
	        //        jQuery('.targetDiv').show();
	        // });
	        jQuery('.showSingle').click(function(){
	              jQuery('.targetDiv').hide();
	              jQuery('#div'+$(this).attr('target')).show();
	        });
	});



	// user login
	$('#signup_form').hide();
	$('#signup_show').on('click',function(e){
		e.preventDefault();
		$('#signup_form').slideToggle();
		$('#login_form').slideToggle();
	})

	$('#login_show').on('click',function(e){
		e.preventDefault();
		$('#signup_form').slideToggle();
		$('#login_form').slideToggle();
	})

	$('#login_form').on('submit',function(e){
		e.preventDefault();
		$.ajax({
			url: 'actions/action.php',
	      	method: 'POST',
	      	data: new FormData(this),
	      	contentType: false,
	      	processData: false,
	      	success: function(data){
	      		if(data='success'){
	      			window.location="project.php";
	      		}else{
	      			alert(data);
	      		}
			}
		});
	});

	$('#signup_form').on('submit',function(e){
		e.preventDefault();
		$.ajax({
			url: 'actions/action.php',
	      	method: 'POST',
	      	data: new FormData(this),
	      	contentType: false,
	      	processData: false,
	      	success: function(data){
	      		if(data=='success'){
	      			window.location="project.php";
	      		}else{
	      			alert(data);
	      		}
			}
		});
	});








	$('#archives-find').prop('disabled', true);
	$('#choose_batch').prop('disabled', true);
	$('#choose_group').prop('disabled', true);

	$("#choose_branch").on('change', function(e){
		e.preventDefault();
		$("#br_def").hide();
		$('#choose_batch').removeAttr("disabled");
	});
	
	$("#choose_batch").on('change', function(e){
		e.preventDefault();
		$("#ba_def").hide();
		$('#choose_group').removeAttr("disabled");
	});

	$("#choose_group").on('change', function(e){
		e.preventDefault();
		$("#gr_def").hide();
		$('#archives-find').removeAttr("disabled");
	});

	function comments(pro_id_js){
		$.ajax({
			url: "actions/action.php",
			method: 'POST',
			data: {
				rec_comment:1,
				pro_id:pro_id_js
			},
			success:function(data){
				// console.log(data);
				$('.comments_line').html(data);
			}
		});
	}

	var pro_id_js;
	$('#archives-find').on('click',function(e){
		e.preventDefault();
		$('#archives-find').prop('disabled', true);
		var jsbranch=$('#choose_branch').val();
		var jsbatch=$('#choose_batch').val();
		var jsgroup=$('#choose_group').val();
		// alert(jsbranch);
		$.ajax({
			url : "actions/action.php",
			method : 'POST',
			dataType : 'JSON',
			data : {
				archive:1,
				branch:jsbranch,
				batch:jsbatch,
				group:jsgroup
			},
			success : function(data){
				console.log(data);
				$(".your-project").toggle(5);
				$('#title').html(data[1]);
				$('#p_overview').html(data[2]);
				$('#down_syn').html(data[3]);
				$("#click_to_download").attr("href", data[3]);
				$('#projects_id').val(data[0]);	
				pro_id_js=$('#projects_id').val();	
				comments(pro_id_js);
			}
		});
	});


	$('#comment_submit').on('click', function(e){
		var comentor_name_js=$('#commentor_name').val();
		var comentor_comment_js=$('#commentor_comment').val();
	    e.preventDefault();
	    $.ajax({
	      url: 'actions/action.php',
	      method: 'POST',
	      data: {
	      	comments:1,
	      	commentor_name:comentor_name_js,
	      	commentor_comment:comentor_comment_js,
	      	pro_id_p:pro_id_js
	      },
	      success: function(data){
			comments(pro_id_js);
			$('#insert_comment')[0].reset();	      	
	      }
	    });
	 });

	// administration
	$('#admin_submit').on('click', function(e){
		e.preventDefault();
		var a_name=$('#admin_name').val();
		var a_password=$('#admin_password').val();
		$.ajax({
			url: 'actions/action.php',
			method: 'POST',
			data: {
				admin_submit:1,
				name:a_name,
				pass:a_password
			},
			success: function(data){
				console.log(data);
				$('#login_admin')[0].reset();
				if(data='success'){
					window.location="admin/index.php";
				}
				if(data=='User Not Found!!'){
					alert('Please check your Username & Password!');
				}
			}
		});
	});

	$('#feedback_button').on('click', function(e){
		e.preventDefault();
		var js_roll=$('#feedback_roll').val();
		var js_email=$('#feedback_email').val();
		var js_qry=$('#feedback_query').val();
		// alert(js_roll);
		$.ajax({
			url: 'actions/action.php',
			method: 'POST',
			data: {
				feedback_submit:1,
				roll:js_roll,
				email:js_email,
				query:js_qry
			},
			success: function(data){
				console.log(data);
				$('#f_form')[0].reset();
				
			}
		});
	});
	
});





var w = c.width = window.innerWidth,
    h = c.height = window.innerHeight,
    ctx = c.getContext( '2d' ),
    
    minDist = 10,
    maxDist = 30,
    initialWidth = 10,
    maxLines = 100,
    initialLines = 4,
    speed = 5,
    
    lines = [],
    frame = 0,
    timeSinceLast = 0,
    
    dirs = [
   // straight x, y velocity
      [ 0, 1 ],
      [ 1, 0 ],
      [ 0, -1 ],
    	[ -1, 0 ],
   // diagonals, 0.7 = sin(PI/4) = cos(PI/4)
      [ .7, .7 ],
      [ .7, -.7 ],
      [ -.7, .7 ],
      [ -.7, -.7]
    ],
    starter = { // starting parent line, just a pseudo line
      
      x: w / 2,
      y: h / 2,
      vx: 0,
      vy: 0,
      width: initialWidth
    };

function init() {
  
  lines.length = 0;
  
  for( var i = 0; i < initialLines; ++i )
    lines.push( new Line( starter ) );
  
  ctx.fillStyle = '#222';
  ctx.fillRect( 0, 0, w, h );
  
  // if you want a cookie ;)
  // ctx.lineCap = 'round';
}
function getColor( x ) {
  
  return 'hsl( hue, 80%, 50% )'.replace(
  	'hue', x / w * 360 + frame
  );
}
function anim() {
  
  window.requestAnimationFrame( anim );
  
  ++frame;
  
  ctx.shadowBlur = 0;
  ctx.fillStyle = 'rgba(0,0,0,.02)';
  ctx.fillRect( 0, 0, w, h );
  ctx.shadowBlur = .5;
  
  for( var i = 0; i < lines.length; ++i ) 
    
    if( lines[ i ].step() ) { // if true it's dead
      
      lines.splice( i, 1 );
      --i;
      
    }
  
  // spawn new
  
  ++timeSinceLast
  
  if( lines.length < maxLines && timeSinceLast > 10 && Math.random() < .5 ) {
    
    timeSinceLast = 0;
    
    lines.push( new Line( starter ) );
    
    // cover the middle;
    ctx.fillStyle = ctx.shadowColor = getColor( starter.x );
    ctx.beginPath();
    ctx.arc( starter.x, starter.y, initialWidth, 0, Math.PI * 2 );
    ctx.fill();
  }
}

function Line( parent ) {
  
  this.x = parent.x | 0;
  this.y = parent.y | 0;
  this.width = parent.width / 1.25;
  
  do {
    
    var dir = dirs[ ( Math.random() * dirs.length ) |0 ];
    this.vx = dir[ 0 ];
    this.vy = dir[ 1 ];
    
  } while ( 
    ( this.vx === -parent.vx && this.vy === -parent.vy ) || ( this.vx === parent.vx && this.vy === parent.vy) );
  
  this.vx *= speed;
  this.vy *= speed;
  
  this.dist = ( Math.random() * ( maxDist - minDist ) + minDist );
  
}
Line.prototype.step = function() {
  
  var dead = false;
  
  var prevX = this.x,
      prevY = this.y;
  
  this.x += this.vx;
  this.y += this.vy;
  
  --this.dist;
  
  // kill if out of screen
  if( this.x < 0 || this.x > w || this.y < 0 || this.y > h )
    dead = true;
  
  // make children :D
  if( this.dist <= 0 && this.width > 1 ) {
    
    // keep yo self, sometimes
    this.dist = Math.random() * ( maxDist - minDist ) + minDist;
    
    // add 2 children
    if( lines.length < maxLines ) lines.push( new Line( this ) );
    if( lines.length < maxLines && Math.random() < .5 ) lines.push( new Line( this ) );
    
    // kill the poor thing
    if( Math.random() < .2 ) dead = true;
  }
  
  ctx.strokeStyle = ctx.shadowColor = getColor( this.x );
  ctx.beginPath();
  ctx.lineWidth = this.width;
  ctx.moveTo( this.x, this.y );
  ctx.lineTo( prevX, prevY );
  ctx.stroke();
  
  if( dead ) return true
}

init();
anim();

window.addEventListener( 'resize', function() {
  
  w = c.width = window.innerWidth;
  h = c.height = window.innerHeight;
  starter.x = w / 2;
  starter.y = h / 2;
  
  init();
} )



