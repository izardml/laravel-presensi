<script>
    // function openNav() {
    //     document.getElementById("mySidenav").style.width = "250px";
    //     document.getElementById("main").style.marginLeft = "250px";
    //     document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    // }
    
    // function closeNav() {
    //     document.getElementById("mySidenav").style.width = "0";
    //     document.getElementById("main").style.marginLeft= "0";
    //     document.body.style.backgroundColor = "white";
    // }

    // hamburger/sidebar
    const hamburger = document.querySelector('#hamburger');
    const sidebar = document.querySelector('#sidebar');
    const main = document.querySelector('#main');

    hamburger.addEventListener('click', function(){
        sidebar.classList.remove('-left-full');
        sidebar.classList.add('left-0');
    });

    main.addEventListener('click', function(){
        sidebar.classList.remove('left-0');
        sidebar.classList.add('-left-full');
    });

    // stickybar
    // const stickybar = document.querySelector('#stickybar');

    // function stickybar(){
    //     stickybar.classList.toggle('fixed z-40');
    // }
</script>