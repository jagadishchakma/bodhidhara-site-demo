<div class="news-comment" id="comments">
	<div class="row"> 
		<div class="col-md-2"> 
			<?php
				$sql = "SELECT * FROM bodhi_comments WHERE news_id='$a_id' ORDER BY id DESC";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_num_rows($result);
			?>
			<h3>মন্তব্য ( <?php echo $row;?> )</h3>
		</div>
		<div class="col-md-6"> 
			<?php 
				if($row > 0){
					while($view = mysqli_fetch_assoc($result)){
						echo'
						<div class="comment">
							<div class="commenter-info">
								<span class="commenter"><img src="/busers/'.$view['uimg'].'" alt="'.$view['name'].'" style="border-radius: 50%;width: 50px;height:50px"/></span>
								<span class="commenter-name">'.$view['name'].'</span>
							</div>
							<div class="txtComment">
								<p class="comment-date">'.get_time_ago($view['comdate']).'</p>
								<p>'.comment(nl2br($view['com'])).'</p>
							</div>
						</div>';
					}
				}
			?>
		</div>
		<div class="col-md-4"> 
			<?php
			if(isset($_COOKIE["bodhi_user_pass"])){ ?>
			<div class="comment-toggle"><h2><button class="glyphicon glyphicon-plus" data-toggle="collapse" data-target="#collapseComment" aria-expanded="false" aria-controls="collapseComment"></button>  মন্তব্য করুন </h2></div>
			<div class="collapse" id="collapseComment"> 
				<span id="jwPollAjaxWorking"></span>
				<div class="card card-body" id="jwPollVoteFormContainer">
					<form id="vote_the_poll"> 
						
						<textarea class="com" name="com" cols="30" rows="3" placeholder="আপনার মন্তব্য" required></textarea>
						
					</form>
					<input class="btn btn-dark" type="submit" id="com-submit" value="মন্তব্য"/>
				</div>
			</div>
			<?php }else{?>
			<div class="default-comment"> 
				<p>মন্তব্য করতে <a class="btn btn-primary" data-toggle="modal" data-target="#loginModal">লগইন</a> অথবা <a data-toggle="modal" data-target="#registerModal" style="color: blue;font-size: 20px;cursor: pointer">রেজিস্টার</a> করুন</p>
				<div class="comment-toggle"><h2><button class="glyphicon glyphicon-plus" data-toggle="collapse" data-target="#collapseComment" aria-expanded="false" aria-controls="collapseComment"></button> অতিথি হিসেবে মন্তব্য করুন </h2></div>
				<div class="collapse" id="collapseComment"> 
					<span id="jwPollAjaxWorking"></span>
					<div class="card card-body" id="jwPollVoteFormContainer">
						<form id="vote_the_poll"> 
							<input type="text" class="name" name="guest-name" placeholder="আপনার নাম"/>
							<br>
							<textarea class="com" name="com" cols="30" rows="3" placeholder="আপনার মন্তব্য"></textarea>
							<br>
						</form>
						<input class="btn btn-dark" type="submit" id="com-submit" value="মন্তব্য"/>
					</div>
				</div>
			</div>
			<?php }
			?>
		</div>
	</div>
	<script>
		$('.glyphicon-plus').click(function(){ 
			$('.glyphicon-plus').toggleClass('glyphicon-minus');
		});
	</script>
	<script>
		$('#jwPollAjaxWorking').hide();	
		$("#com-submit").click(function(){
			if($(".name").val() == ""){ 
				alert('Please Enter Your Name'); 
				return false;
			}
			if($(".com").val() == ""){ 
				alert('Please Enter Your Comment'); 
				return false;
			}
			var data = $("#vote_the_poll").serialize();
			$('#jwPollAjaxWorking').show();
			$.ajax({
				type: 'post',
				url: '../comment.php?id=<?php echo $a_id; ?>&category=<?php echo $category; ?>',
				data: data,
				beforeSend: function(){
					$('#jwPollAjaxWorking').html("<img src='../img/spinner1.gif' width='50' height='50'/>");
					$('#jwPollVoteFormContainer').hide();
					},
				success: function(data){
					$('#jwPollAjaxWorking').html(data);
					window.location='<?php echo "/".$category."/article/".$a_id."/".$_GET["title"] ?>';
					},
				error: function(){
					$('#jwPollAjaxWorking').html("Error");
					$('#jwPollVoteFormContainer').show();
					}
			});
		})	
	</script>
</div>