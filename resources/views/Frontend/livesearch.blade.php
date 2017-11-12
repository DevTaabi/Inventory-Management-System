

    <!-- search box container starts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <div class="search">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon" style="color: white; background-color: blue;">Product SEARCH</span>
                    <input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Enter Product Name Here">
                </div>
            </div>
        </div>
    </div>
    <!-- search box container ends  -->
    <div id="txtHint" class="title-color" style="padding-top:50px; text-align:center;" ></div>


<script>
    $(document).ready(function(){
        $("#search").keyup(function(){
            var str=  $("#search").val();
            if(str == "") {
                $( "#txtHint" ).html("<b>Blogs information will be listed here...</b>");
            }else {
                $.get( "{{ url('demos/livesearch?id=') }}"+str, function( data ) {
                    $( "#txtHint" ).html( data );
                });
            }
        });
    });
</script>

    <script>
        $(document).ready(function(){
            $("#search").keyup(function(){
                var str=  $("#search").val();
                if(str == "") {
                    $( "#txtHint" ).html("<b>Blogs information will be listed here...</b>");
                }else {
                    $.get( "{{ url('demos/livesearch?id=') }}"+str, function( data ) {
                        $( "#txtHint" ).html( data );
                    });
                }
            });
        });
    </script>
