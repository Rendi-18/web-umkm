<script src="/vendor/jquery/jquery.js"></script>
<script src="/vendor/popper/popper.js"></script>
<script src="/vendor/js/bootstrap.js"></script>
<script src="/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="/vendor/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="/js/main-dashboard.js"></script>

<!-- Page JS -->
<script src="/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

{{-- Trix --}}
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault()
    })
</script>

{{-- Preview Image --}}
<script>
    function previewImage() {
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector('.img-preview')

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }

    function previewImageUmkm() {
        const image = document.querySelector('#upload')
        const imgPreview = document.querySelector('.img-preview')

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>
