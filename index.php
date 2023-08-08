<?php
    require_once("validation.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation 1</title>
    <style>
        * {
            margin: 0;
        }

        body {
            font-size: 1.25rem;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
        }

        form {
            padding: 1.75rem;
            border: 1px solid black;
        }

        form > *:not(:last-child) {
            margin-block-end: 1rem;
        }

        .as {
            color: red;
        }

        button {
            width: 100%;
            background-color: coral;
            color: white;
            border: none;
            cursor: pointer;
            padding: 1rem 0;
            font: inherit;
            text-transform: uppercase;
            letter-spacing: .2rem;
        }
        
        input {
            font: inherit;
        }

        div {
            display: flex;
            justify-content: flex-start;
            gap: .5rem;
        }
    </style>
</head>
<body>
    <h1>
        PHP Form Validation
    </h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p style="color: red">
            * requered field 
        </p>
        <div>
            <label for="name">Name:</label>
            <input id="name" type="text" name="name">
            <span class="as">*<?php echo $nameErr ?></span>
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input id="email" type="email" name="email">
            <span class="as">* <?php echo $emailErr ?></span>
        </div>
        <div>
            <label for="url">Website:</label>
            <input id="website" type="url" name="website">
            <span class="as">* <?php echo $websiteErr ?></span>
        </div>
        <div>
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        </div>
        <div>
            <span for="gender">Gender: </span>
            <input type="radio" name="gender" value="female" id="female"><label for="female"> Female</label>
            <input type="radio" name="gender" value="Male" id="male"><label for="male"> Male</label>
            <input type="radio" name="gender" value="Other" id="other"><label for="other"> Other</label>
            <span class="as">* <?php echo $genderErr; ?></span>
        </div>
        <button type="submit" name="submit">
            Submit
        </button>
    </form>
</body>
</html>