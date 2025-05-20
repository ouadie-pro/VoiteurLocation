<?php
    include('../includes/navbar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link rel="stylesheet" href="../bootstrap-5.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../icons/all.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Car Image and Details Section -->
            <div class="col-lg-6">
                <!-- Main Car Card -->
                <div class="card border-0 shadow rounded-4 overflow-hidden h-100">
                    <div class="position-relative">
                        <img src="../img_voiteur/car sport/car sport (1).jpg" class="card-img-top img-fluid" alt="Car Image" style="height: 300px; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title fw-bold mb-0"> Voiture de Sport Premium</h4>
                            <span class="badge bg-primary rounded-pill">Available</span>
                        </div>
                        
                        <p class="card-text text-muted">Découvrez le luxe et la performance avec notre voiture de sport premium. Idéale pour les escapades de week-end ou pour faire une impression mémorable lors d’occasions spéciales.</p>
                        
                        <div class="border-top border-bottom py-3 my-3">
                            <div class="row text-center g-0">
                                <div class="col-4">
                                    <div class="p-2">
                                        <i class="fas fa-tachometer-alt text-primary mb-2 fs-4"></i>
                                        <p class="mb-0 small fw-bold">305 km/h</p>
                                        <small class="text-muted">Top Speed</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2 border-start border-end">
                                        <i class="fas fa-gas-pump text-primary mb-2 fs-4"></i>
                                        <p class="mb-0 small fw-bold">8.5L/100km</p>
                                        <small class="text-muted">Fuel Economy</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2">
                                        <i class="fas fa-car-side text-primary mb-2 fs-4"></i>
                                        <p class="mb-0 small fw-bold">2-door</p>
                                        <small class="text-muted">Type</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 fw-bolder fs-5">€199<span class="text-muted fs-6">/day</span></p>
                            </div>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1 text-dark">(4.5)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Reservation Form Section -->
            <div class="col-lg-6">
                <div class="card border-0 shadow rounded-4 h-100">
                    <div class="card-header bg-primary text-white p-4 rounded-top-4 border-0">
                        <h4 class="mb-0"><i class="fas fa-calendar-check me-2"></i>Book Your Ride</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="demande.php" method="post">
                            <div class="row g-3">
                                <!-- Pickup Date -->
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Pickup Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-calendar-alt text-primary"></i></span>
                                        <input type="date" class="form-control" placeholder="Start date" name="dateD">
                                    </div>
                                </div>
                                
                                <!-- Return Date -->
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Return Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-calendar-check text-primary"></i></span>
                                        <input type="date" class="form-control" placeholder="End date" name="dateR">
                                    </div>
                                </div>
                                
                                <!-- CIN -->
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">CIN / ID Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-id-card text-primary"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter your ID" name="ID">
                                    </div>
                                </div>
                                
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-phone text-primary"></i></span>
                                        <input type="tel" class="form-control" placeholder="Your phone number" name="phone">
                                    </div>
                                </div>
                                
                                <!-- Convocation -->
                                <div class="col-12">
                                    <label class="form-label fw-bold">Convocation</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-file-alt text-primary"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter convocation number" name="conve">
                                    </div>
                                </div>
                                
                                <!-- Comments -->
                                <div class="col-12">
                                    <label class="form-label fw-bold">Additional Information</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-comment text-primary"></i></span>
                                        <textarea class="form-control" rows="5" placeholder="Special requests or additional information" style="resize: none;" name="texxt"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100" name="go">
                                    <i class="fas fa-check-circle me-2"></i>Confirm Booking
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>