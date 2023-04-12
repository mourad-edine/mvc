<style>
    .art{
        text-decoration: none;
        height: 130px;
        width: 288px;
    }
</style>
<div id="global-loader">
</div>
<div class="page-wrapper">
<div class="content">
<div class="row">
<style>
        .mark {
            background-color: #d7ffe7 !important
        }

        .mark .gsearch {
            font-size: 20px
        }

        .unmark {
            background-color: #e8e8e8 !important
        }

        .unmark .gsearch {
            font-size: 10px
        }

        .marktext {
            font-weight: bold;
            background-color: antiquewhite;
        }
    </style>
    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                 <input type="text" id="client" class="form-control input-lg" placeholder="client" />
                 <input type="date" id="" class="form-control input-lg mt-3" placeholder="date" />
                 <input type="text" id="" class="form-control input-lg mt-3" placeholder="durée" />
                 <button class="btn btn-warning mt-3">submit</button>
     
            </div>
            <div class="col-md-6">
                
                <input type="text" id="gsearchsimple" class="form-control input-lg" placeholder="rechercher coach" />

                <ul class="list-group">

                </ul>
                
                <div id="localSearchSimple"></div>
                <div id="detail" style="margin-top:16px;"></div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#gsearchsimple').keyup(function() {
            var query = $('#gsearchsimple').val();
            $('#detail').html('');
            $('.list-group').css('display', 'block');
            if (query.length == 2) {
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('.list-group').html(data);
                    }
                })
            }
            if (query.length == 0) {
                $('.list-group').css('display', 'none');
            }
        });

        $('#localSearchSimple').jsLocalSearch({
            action: "Show",
            html_search: true,
            mark_text: "marktext"
        });

        $(document).on('click', '.gsearch', function() {
            var email = $(this).text();
            $('#gsearchsimple').val(email);
            $('.list-group').css('display', 'none');
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    email: email
                },
                success: function(data) {
                    $('#detail').html(data);
                }
            })
        });
    });

   
</script>


</div>



</div>
</div>
</div>

</div>
</div>
</div>
</div>
