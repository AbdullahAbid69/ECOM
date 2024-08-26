<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" href="{{asset('Frontend/css/homepage.css')}}">
</head>

<body>
   @include('User.Includes.sidebar')



{{-- main content below --}}



    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            @include('User.Includes.topbar')
        </div>
        <div class="main-content">
            @include('User.Includes.products')
        </div>
        @include('User.Includes.footer')
    </section>
</body>




















<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
</script>

</html>
