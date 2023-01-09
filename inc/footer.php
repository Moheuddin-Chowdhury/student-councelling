</div>

	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul >
			<li><a href="https://www.facebook.com/">Md Moheuddin Chowdhury</a></li>
			<li><a href="https://www.facebook.com/">Hriiday Krisna</a></li>
			<li><a href="https://www.facebook.com/">Nur Sourav</a></li>
		</ul>
	  </div>
	  <?php 
                    $query = "SELECT * FROM tbl_footer WHERE id ='1'";
                    $footernote = $db->select($query);
                    if ($footernote) {
                        while ($result = $footernote->fetch_assoc()) {
                            ?>
	  <p>&copy; <?php echo $result['note'] ?> 2021- <?php echo date('Y'); ?></p>
	  <?php
                        }
                    } ?>
	</div>
	<div class="fixedicon clear">
		<?php 
                    $query = "SELECT * FROM tbl_social WHERE id ='1'";
                    $social_media = $db->select($query);
                    if ($social_media) {
                        while ($result = $social_media->fetch_assoc()) {
                            ?>
		<?php
                        }
                    } ?>
	</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>
