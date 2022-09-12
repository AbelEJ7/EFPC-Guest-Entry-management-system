<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">



    <!-- Boxicons CDN Link -->
    {{-- <script src="//unpkg.com/alpinejs" defer></script>
            <script src="https://cdn.tailwindcss.com"></script> --}}

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="sidebar">

    <div class="lo">

 <a href="/users/dashboard"> <img src="\images\log.png"  width="100px" height="100px" >
</a>       
    </div>

        <ul class="nav-links">
            <li>
                <a href="/users/dashboard">
                <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/Recipents/recipient">
                <i class='bx bx-user'></i>
                    <span class="links_name">Recipients</span>
                </a>
            </li>
            <li>
                <a href="/interns/intern">
                <i class='bx bx-user-plus' style="font-size: 24px;"></i>
                    <span class="links_name">Interns</span>
                </a>
            </li>
            <li>
                <a href="/weekendstaff/staff">
                <i class='bx bx-calendar'></i>
                    <span class="links_name">Weekend Staff</span>
                </a>
            </li>
            <li>
                <a href="/Reports/main">
                <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Report</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <form class="inline" method="POST"  action="/logout">
                    @csrf
                    
                    <button class="logoutbtn" type="submit"><i class='bx bx-log-out'></i>
                  <span class="links_name">Log out</span>
                    </button>
                    </form>

            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>

            </div>
            <p>Welcome!</p>

            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <i class='bx bx-user'></i> <span class="admin_name">
                    {{auth()->user()->name}}
                </span>

            </div>
        </nav>

        <div class="home-content">

           {{$slot}}

        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>


</body>

</html>

