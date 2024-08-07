<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/MAYAH-STORE-LOGO.jpg" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>@yield('title','Cash flow system')</title>
</head>

<body>
    <div class="nav" id="nav">
        <nav class="nav__content">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-chevron-right'></i>
            </div>

            <a href="#" class="nav__logo">
                <img src="assets/img/logo.jpg" alt="" class="nav__logo-img">
                <span class="nav__logo-name">Cash flow</span>
            </a>

            <div class="nav__list">
                <a href="#" class="nav__link active-link">
                    <i class='bx bx-grid-alt'></i>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="#" class="nav__link">
                    <i class='bx bx-donate-heart'></i>
                    <span class="nav__name">Donation & Tithes</span>
                </a>
                <a href="#" class="nav__link">
                    <i class='bx bx-wallet-alt'></i>
                    <span class="nav__name">Expenses</span>
                </a>
                <a href="#" class="nav__link">
                    <i class='bx bx-bar-chart-alt-2'></i>
                    <span class="nav__name">Budget Allocation</span>
                </a>
                <a href="#" class="nav__link">
                    <i class='bx bx-receipt'></i>
                    <span class="nav__name">Receipts</span>
                </a>
                <a href="#" class="nav__link">
                    <i class='bx bxs-report'></i>
                    <span class="nav__name">Financial Reports</span>
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav__link">
                        <i class='bx bxs-log-out'></i>
                        <span class="nav__name">Logout</span>
                    </button>
                </form>

                
            </div>
        </nav>
    </div>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/admin.js"></script>
</body>
</html>
