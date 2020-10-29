<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!-- Styles -->
<body>

                            <input type="text" name="name" id="name">


                            <input type="text" name="roll" id="roll">


                            <button class="btn btn-primary" id="kkk">Submit</button>


                                <table id="uiData">

                                </table>


<script type="text/javascript">
        $('#kkk').click(function(){
            alert('hell')
        })

    function Hbd(){

        axios.get('/ajax')
            .then(function (response) {
               if(response.status == 200){


                var jsonData = response.data;

                    $.each(jsonData, function(i, item) {
                        $("<tr>").html(
                            "<td>" + response.data.name + "</td>" +
                            "<td>" + response.data.roll + "</td>"
                        ).appendTo('#uiData');


                    }
               }
            })
            .catch(function (error) {
                alert(error);
            });
    }
</script>

<script type="text/javascript">
    $('#submitBtn').click(function(){
        let nameValue = $('#name').val();
        let rollValue = $('#roll').val();


        axios.post('/ajax/post', {
            name: nameValue,
            roll: rollValue
            })
            .then(function (response) {
                // $('#form_id').find('input:text').val('');
                $('#name').val(' ');
                $('#roll').val(' ');

            })
            .catch(function (error) {
                alert(error);
            });

    })
</script>


</body>
</html>
