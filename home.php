
<?php
ob_start();
?>

<!-- Welcome Banner -->
<div class="p-5 mb-4 text-white bg-dark rounded-3">
    <div class="container-fluid py-4">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-info text-dark mb-3">
                    YOUR STREAM, YOUR STYLE
                </span>

                <h1 class="display-4 fw-bold">
                    Welcome to h's Overlay
                </h1>

                <p class="fs-5 text-light">
                    Level up your streaming experience with stunning
                    overlays, webcam frames, stream screens and
                    graphics designed for content creators.
                </p>

                <a href="products.php" class="btn btn-info btn-lg mt-3">
                    <i class="bi bi-bag-fill me-2"></i>
                    Explore Products
                </a>
            </div>

            <div class="col-lg-4 text-center mt-4 mt-lg-0">
                <i class="bi bi-broadcast text-info" style="font-size: 9rem;"></i>
                <h3 class="fw-bold mt-3">h's Overlay</h3>
                <p class="text-info">Graphics for Every Stream</p>
            </div>
        </div>
    </div>
</div>

<!-- Features -->
<div class="row g-4 mb-5">

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center p-4">
                <i class="bi bi-palette-fill text-primary fs-1"></i>
                <h4 class="card-title mt-3">Creative Designs</h4>
                <p class="card-text text-muted">
                    Discover unique designs to match your personality
                    and streaming style.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center p-4">
                <i class="bi bi-lightning-charge-fill text-primary fs-1"></i>
                <h4 class="card-title mt-3">Digital Graphics</h4>
                <p class="card-text text-muted">
                    Find graphics for your streaming setup and
                    create a professional appearance.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center p-4">
                <i class="bi bi-display-fill text-primary fs-1"></i>
                <h4 class="card-title mt-3">Made for Streamers</h4>
                <p class="card-text text-muted">
                    Explore graphics for gaming, chatting and
                    other types of content.
                </p>
            </div>
        </div>
    </div>

</div>

<!-- Closing Banner -->
<div class="p-5 mb-4 bg-primary text-white rounded-3 text-center">
    <i class="bi bi-stars fs-1"></i>

    <h2 class="fw-bold mt-3">
        Ready to Upgrade Your Stream?
    </h2>

    <p class="fs-5">
        Explore our collection and find graphics that suit your style.
    </p>

    <a href="products.php" class="btn btn-light btn-lg mt-2">
        Shop Now <i class="bi bi-arrow-right ms-2"></i>
    </a>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
