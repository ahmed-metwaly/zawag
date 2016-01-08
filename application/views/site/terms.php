<?php require_once 'template/pagesHeader.php'; ?>





<div class="section-new-pages">
	<!-- section-new-pages -->
	<div class="container">
		<div class="row">

			<div class="panel-group" id="accordion-3" role="tablist" aria-multiselectable="false">
				
								<div class="panel panel-default">
					<!-- new tap -->
					<div class="panel-heading" role="tab" id="headingOne-3">
						<h4 class="panel-title">
شروط الاستخدام
							<a role="button" data-toggle="collapse" data-parent="#accordion"  aria-expanded="true" aria-controls="collapseOne-3"></a>
						</h4>
					</div>

					<div id="collapseOne-3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne-3">
						<div class="panel-body"><?php echo $siteInfo->si_terms_service; ?></div>
					</div>
				</div>
				
			</div>

		</div>
	</div>
</div>
<!-- end section-new-pages -->


<?php require_once 'template/footer.php'; ?>