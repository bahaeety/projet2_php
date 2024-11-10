<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library E-commerce Navbar with Basket Icon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons from jsDelivr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        /* Custom Styles */
        .navbar {
            background-color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-family: 'Georgia', serif;
            font-weight: bold;
            color: #3A3A3A;
        }
        .nav-link {
            color: #3A3A3A !important;
        }
        .nav-link:hover {
            color: #0066CC !important;
        }
        .search-bar {
            width: 300px;
        }
        .account-icon {
            font-size: 1.5rem;
        }
        /* Basket Icon with Badge */
        .basket-icon-wrapper {
            position: relative;
            font-size: 1.8rem; /* Adjust size of the basket icon */
            color: #333; /* Explicit color for visibility */
        }
        .basket-badge {
            position: absolute;
            top: -8px;
            right: -12px;
            font-size: 0.75rem;
            background-color: #dc3545;
            color: white;
            border-radius: 50%;
            padding: 4px 6px;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .search-bar {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Brand Logo -->
        <a class="navbar-brand" href="#">LibraryHub</a>
        
        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar links and search bar -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                
                <!-- Dropdown for Categories -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        <li><a class="dropdown-item" href="#">Fiction</a></li>
                        <li><a class="dropdown-item" href="#">Non-Fiction</a></li>
                        <li><a class="dropdown-item" href="#">Children's Books</a></li>
                        <li><a class="dropdown-item" href="#">Academic</a></li>
                        <li><a class="dropdown-item" href="#">Magazines</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Best Sellers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">New Arrivals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            
            <!-- Search bar -->
            <form class="d-flex">
                <input class="form-control me-2 search-bar" type="search" placeholder="Search books..." aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
            
            <!-- Account icon and Basket with Badge -->
            <div class="d-flex align-items-center ms-3">
                <a href="#" class="text-decoration-none text-dark me-3">
                    <i class="bi bi-person-circle account-icon"></i>
                </a>
                
                <!-- Basket Icon with Badge -->
                <div class="basket-icon-wrapper">
                    <a href="#" class="text-decoration-none text-dark">
                        <i class="bi bi-basket-fill"></i> <!-- Bootstrap Basket Icon from jsDelivr -->
                    </a>
                    <!-- Badge for number of items in the basket -->
                    <span class="basket-badge">3</span>
                </div>
            </div>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
