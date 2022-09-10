<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>

    <h3>Contact ElmMac Pty Ltd | Laravel Form</h3>

    <div class="container">
        <form action="{{route('contact')}}" method="POST">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" placeholder="Email Address">

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="Uganda">Uganda</option>
                <option value="Canada">Canada</option>
                <option value="South Africa">South Africa</option>
            </select>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." style="height:200px">we are mail now testing the post method for the form</textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
