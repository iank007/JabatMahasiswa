<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="row">
			<div class="col-md-10" style="background-image:url('<?=base_url('/assets/images/mami-guitar1.jpg')?>'); 
										background-size:cover;height:300px;">
<!--				<img src="<?=base_url('/assets/images/mami-guitar1.jpg')?>" width="100%" height="300px"> -->
				<ul class="horizontal" style="position:absolute;bottom:0;right:0;">
					<li><button>Leave</button></li>
					<li><button>Share</button></li>
					<li><button>Notifications</button></li>
					<li><button>...</button></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10" style="background-color:white;">
				<ul class="horizontal">
					<li><button>Discussion</button></li>
					<li><button>Members</button></li>
					<li><button>Events</button></li>
					<li><button>Videos</button></li>
					<li><button>Photos</button></li>
					<li><button>Files</button></li>
					<li style="float:right;"><input type="text" placeholder="Search this group"></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-7">
				 <div class="box">
					<div class="box-header with-border multiple col-md-12">
						<div class="box-title col-md-3"><center>Write Post</div>
						<div class="box-title col-md-3"><center>Add Photo/Video</div>
						<div class="box-title col-md-3"><center>Creat poll</div>
						<div class="box-title col-md-3"><center>More</div>
					</div>
					<div class="box-body">
						<table class="table table-striped table-hover table-timeline">
							<tr>
								<td>
									
								</td>
							</tr>
						</table>
						<span class="label label-success readyOn" onclick="post(postingTextarea.value);"
							style="cursor:pointer;">Send</span>
						
					</div>
				</div>
			</div>
			<div class="col-md-3">
				 <div class="box">
					<div class="box-header with-border">
						Add Members
					</div>
					<div class="box-body">
						<input type="text" style="width:100%">
						<span>Members</span>
						<table class="table table-striped table-hover table-timeline">
							<tr>
								<td>
									<img src="<?=base_url('/assets/images/user1.jpg')?>" height="45px" width="45px">
								</td>
								<td>
									<img src="<?=base_url('/assets/images/user1.jpg')?>" height="45px" width="45px">
								</td>
								<td>
									<img src="<?=base_url('/assets/images/user1.jpg')?>" height="45px" width="45px">
								</td>
								<td>
									<img src="<?=base_url('/assets/images/user1.jpg')?>" height="45px" width="45px">
								</td>
							</tr>
						</table>
						<span class="label label-success readyOn" onclick="post(postingTextarea.value);"
							style="cursor:pointer;">Send</span>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script type="javascript">
	$(document).on("ready", function() {
		alert("januar");
	});
</script>