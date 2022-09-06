    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        var base_url = '<?= base_url() ?>'
    </script>
    <script src="<?= base_url("assets/js/dash_scripts.js"); ?>"></script>

    <script>
        //menu toggle
        let toggle = document.querySelector('.toggle');
        let wayfinder = document.querySelector('.wayfinder');
        let navmain = document.querySelector('.navmain');

        toggle.onclick = function() {
            wayfinder.classList.toggle('active');
            navmain.classList.toggle('active');

        }

        // add hovered class in selected list item
        let list = document.querySelectorAll('.wayfinder li');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));
    </script>
    </body>

    </html>