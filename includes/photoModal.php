<div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-body pb-0">
				<img src="" class="w-100"/>
			</div>
			<div class="modal-footer border-0"><a class="d-flex align-items-center gap-1 text-decoration-none text-secondary cursor-pointer" data-bs-dismiss="modal"><span>Close</span><i class="fa-light fa-times fa-lg"></i></a></div>

		</div>
		
	</div>
</div>
<script>
	(() => {
		const photoModal = document.getElementById('photoModal')
		photoModal.addEventListener('show.bs.modal', event => {
			const link = event.relatedTarget
			const url = link.querySelector('img').getAttribute('src')
			const modalImage = photoModal.querySelector('img')
			
			modalImage.src = url;
		})
	})();
	
</script>
