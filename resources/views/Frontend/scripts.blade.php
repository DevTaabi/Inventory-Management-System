<script>
    $(document).ready(function(){
        $("#search_item").keyup(function(){
            var str=  $("#search_item").val();
            if(str == "") {
                $( "#txtHint" ).html("<b>Blogs information will be listed here...</b>");
            }else {
                $.get( "{{ url('/search_item?id=') }}"+str, function( data ) {
                    $( "#txtHint" ).html( data );
                });
            }
        });
    });
</script>