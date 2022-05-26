    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>


<script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass('active');
            $('[data-toggle="tooltip"]').tooltip();
            $('.dropdown-toggle').dropdown();
        })
        function hidediv()
        {
            document.getElementById("alert").style.visibility="hidden";
        }
        setTimeout("hidediv()",3000);
        
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    

</body>
</html>