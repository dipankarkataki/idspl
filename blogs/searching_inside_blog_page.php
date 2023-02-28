<style>
    .search-outer-div {
        height: 100vh;
        width: 100%;
        background-color: #00000085;
        position: fixed;
        z-index: 15;
        display: none;
    }

    .search-inner-div {
        height: 500px;
        width: 90%;
        background-color: #ffffff40;
        position: fixed;
        top: 20%;
        left: 5%;
        z-index: 20;
        border-radius: 5px;
    }

    .search-inner-div .content-area {
        position: absolute;
        top: 30%;
        left: 10%;
        padding: 30px;
        display: flex;
        flex-direction: row;
    }

    .search-inner-div .content-area input {
        width: 900px;
        height: 70px;
        margin-right: -5px;
    }

    .search-inner-div .content-area #searchBtn {
        height: 70px;
        padding-top: 24px;
    }

    #closeSearchBtn {
        font-size: 20px;
        color: black;
        float: right;
        background-color: #ffffff40;
        padding: 20px;
        border-radius: 0px 0px 0px 10px;
    }

    #closeSearchBtn:hover {
        background-color: white;
    }
    .d-none{
        display: none;
    }
    .d-block{
        display: block;
    }
</style>

<div class="search-outer-div">

    <div class="search-inner-div">
        <a href="javascript:void(0);" id="closeSearchBtn">
            <i class="fa fa-times" aria-hidden="true"></i>
        </a>
        <div class="content-area">
            <input type="text" name="searchQuery" id="searchQuery" class="form-control" autocomplete="off" placeholder="Type here..">
            <a id="searchBtn" href="#" class="btn btn-warning">
                <i class="fa fa-search"></i>
                Search</a>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

<script>
    $("#navSearchBtn").on("click", function() {
        $(".search-outer-div").addClass("d-block");
    });
</script>

<script>
    $("#closeSearchBtn").on("click", function() {
        $(".search-outer-div").addClass("d-none");
        $(".search-outer-div").removeClass("d-block");
    });
</script>

<!--  Search Query  -->
<script>
    $("#searchQuery").typeahead({
        minLength: 4,
        source: function(query, result) {
            $.ajax({
                url: "../search.php",
                method: "GET",
                data: {
                    query: query
                },
                dataType: "json",
                success: function(data) {
                    result($.map(data, function(item) {
                        return item.title
                    }));
                }
            })
        },
    })
</script>

<!--  Search Button  -->
<script>
    $("#searchBtn").on("click", function(e) {
        e.preventDefault();
        let search_value = $("#searchQuery").val();

        $.ajax({
            url: "../submit_search.php",
            type: "POST",
            data: {
                search_value: search_value
            },
            // dataType:"json",
            success: function(data) {
                let details = JSON.parse(data);
                if (details.type == "blog") {
                    window.location = `submit_views.php?id=${details.id}`;
                } else if (details.type == "portfolio") {
                    location.replace('../'+details.location);
                }
            }
        });
    });
</script>