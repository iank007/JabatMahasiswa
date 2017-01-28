<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="content-wrapper">
	<section class="content-header">
		<?php echo $pagetitle; ?>
		<?php echo $breadcrumb; ?>
	</section>

	<section class="content">
		<div class="row">
			
			<div class="col-md-7">
				 <div class="box">
					<div class="box-header with-border multiple">
						<div class="box-title left" onclick="location.href='<?php echo site_url('admin/users/profile/'.$user_login['id']); ?>'"><center>Your Posts</div>
						<div class="box-title right" onclick="showPosting(0);"><center>Other's</div>
					</div>
					<div class="box-body">
						<table class="table table-striped table-hover table-timeline">
							<tr>
								<td>
									<textarea id="postingTextarea" style='width:485px;height:100px;resize:none;'
									placeholder="what's up ?"></textarea>
								</td>
							</tr>
						</table>
						<span class="label label-success readyOn" onclick="post(postingTextarea.value);"
							style="cursor:pointer;">Send</span>
						
						<!-- <table id="timeline" class="table table-striped table-hover">
							<tbody>
						<?php foreach ($user_info as $user):?>
								<tr>
									<th><?php echo lang('users_ip_address'); ?></th>
									<td><?php echo $user->ip_address; ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_firstname'); ?></th>
									<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_lastname'); ?></th>
									<td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_username'); ?></th>
									<td><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_email'); ?></th>
									<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_created_on'); ?></th>
									<td><?php echo date('d-m-Y', $user->created_on); ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_last_login'); ?></th>
									<td><?php echo ( ! empty($user->last_login)) ? date('d-m-Y', $user->last_login) : NULL; ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_status'); ?></th>
									<td><?php echo ($user->active) ? '<span class="label label-success">'.lang('users_active').'</span>' : '<span class="label label-default">'.lang('users_inactive').'</span>'; ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_company'); ?></th>
									<td><?php echo htmlspecialchars($user->company, ENT_QUOTES, 'UTF-8'); ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_phone'); ?></th>
									<td><?php echo $user->phone; ?></td>
								</tr>
								<tr>
									<th><?php echo lang('users_groups'); ?></th>
									<td>
								<?php foreach ($user->groups as $group):?>
										<?php echo '<span class="label" style="background:'.$group->bgcolor.'">'.htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8').'</span>'; ?>
								<?php endforeach?>
									</td>
								</tr>
							<?php endforeach;?>
							</tbody>
						</table> -->
					</div>
				</div>
			 </div>

			<div class="col-md-3">
				 <div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">xxxx</h3>
					</div>
					<div class="box-body">


					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-7">
				<div class="box">
					<div class="box-body">
						<span style="float:left; color:#3c8dbc;cursor:pointer;"><?=$user_login['username'];?></span>
						<i class="fa fa-location-arrow" 
						style="float:right;cursor:pointer;padding-bottom:3px;"> </i>
						<table class="table table-striped table-hover table-timeline">
							<tr>
								<td>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</td>
							</tr>
						</table>
						<span class="label label-success">aaa</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-7">
				<div class="box">
					<div class="box-body">
						<span style="float:left; color:#3c8dbc;cursor:pointer;">Januar Muhtadiin</span>
						<i class="fa fa-location-arrow" 
						style="float:right;cursor:pointer;padding-bottom:3px;"> </i>
						<table class="table table-striped table-hover table-timeline">
							<tr>
								<td><img src="https://almsaeedstudio.com/themes/AdminLTE/dist/img/boxed-bg.jpg" width="100%" height="300px" />
								</td>
							</tr>
						</table>
						<span class="label label-success">bbb</span>
					</div>	
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-7">
				<div class="box">
					<div class="box-body">
						<span style="float:left; color:#3c8dbc;cursor:pointer;">Januar Muhtadiin</span>
						<i class="fa fa-location-arrow" 
						style="float:right;cursor:pointer;padding-bottom:3px;"> </i>
						<table class="table table-striped table-hover table-timeline">
							<tr>
								<td>
									<iframe width="400" height="300"
									src="https://www.youtube.com/embed/h3ULUq3JfMI">
									</iframe>
								</td>
							</tr>
						</table>
						<span class="label label-success">bbb</span>
					</div>	
				</div>
			</div>
		</div>
	</section>
</div>