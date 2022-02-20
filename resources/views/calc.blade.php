<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="crad card-body">
        <div class="row mt-5 ">
            <div class="col-3 mb-3">
                <input type="text" id="number_one" class="form-control">
            </div>
            <div class="col-3">
                <input type="text" id="number_two" class="form-control">
            </div>
            <div class="col-3">
                <div id="output" class="h1 text-danger">output</div>
            </div>
        </div>
    </div>

    <script>
        let btnOne = document.getElementById('number_one');
        let btnTwo = document.getElementById('number_two');

        let numberOne = 0;
        let numberTwo = 0;

        let output = document.getElementById('output');

        btnOne.onkeyup = () => {
            numberOne = document.getElementById('number_one').value;
            numberTwo = document.getElementById('number_two').value;

            // console.log(parseInt(numberOne));
            if (parseInt(numberOne) === NaN || numberOne === '') {
                numberOne = 0;
            }
            if (parseInt(numberTwo) === NaN || numberTwo === '') {
                numberTwo = 0;
            }
            // console.log(numberOne);

            let sum = parseInt(numberOne) + parseInt(numberTwo);
            document.getElementById('output').innerText = sum;
        }
        btnTwo.onkeyup = () => {
            numberOne = document.getElementById('number_one').value;
            numberTwo = document.getElementById('number_two').value;

            if (parseInt(numberOne) === NaN || numberOne === '') {
                numberOne = 0;
            }
            if (parseInt(numberTwo) === NaN || numberTwo === '') {
                numberTwo = 0;
            }

            let sum = parseInt(numberOne) + parseInt(numberTwo);
            document.getElementById('output').innerText = sum;
        }
    </script>
</body>

</html>