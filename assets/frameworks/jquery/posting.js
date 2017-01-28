/*! posting v0.0.1 | (c) Januar Muhtadiin (dream.muhtadiin@gmail.com) | - */
function showPosting(id){//show posting by id
	//0
	
	//not 0
	$(".content .row:not(:first)").each(function(){
		$(this).hide();
	});
}

function post(val){
	if(""!==val.trim){
		$(".content .row:first").after(setPost(val));
	}
}

function setPost(val){
	var userName = 'januar';
	var string = '<div class="row">'
			+ '<div class="col-md-7">'
			+	'<div class="box">'
			+		'<div class="box-body">'
			+			'<span style="float:left; color:#3c8dbc;cursor:pointer;">'+userName+'</span>'
			+			'<i class="fa fa-location-arrow" '
			+			'style="float:right;cursor:pointer;padding-bottom:3px;"> </i>'
			+			'<table class="table table-striped table-hover table-timeline">'
			+				'<tr>'
			+					'<td>'
			+						val 
			+					'</td>'
			+				'</tr>'
			+			'</table>'
			+			'<span class="label label-success">aaa</span>'
			+		'</div>'
			+	'</div>'
			+'</div>'
		+'</div>';
		
	return string;
}

$(document).on("ready",function(){
	// alert("bedul");
})