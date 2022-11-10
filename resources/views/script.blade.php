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
        sidebar.classList.remove('hidden');
    });

    main.addEventListener('click', function(){
        sidebar.classList.add('hidden');
    });
</script>