<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/welcome" method="POST">
        @csrf
        <h1>Buat Account Baru</h1>
        <div>
            <h2>Sign Up Form</h2>
            <div>
                <label>First Name : <br>
                    <input type="text" name="firstName">
                </label>
                <br><br>
                <label>Last Name : <br>
                    <input type="text" name="lastName">
                </label>
                <br><br>
                <label>
                    Gender : <br>
                    <input type="radio" name="gender">Man<br>
                    <input type="radio" name="gender">Woman<br>
                    <input type="radio" name="gender">Other
                </label>
                <br><br>
                <label for="">Nationality : <br>
                    <select name="nationality" id="">
                        <option value="indonesia">Indonesia</option>
                        <option value="inggris">Inggris</option>
                        <option value="other">Other</option>
                    </select>
                </label>
                <br><br>
                <label for="">Language Spoken :
                    <br>
                    <input type="checkbox">Bahasa Indonesia <br>
                    <input type="checkbox">English <br>
                    <input type="checkbox">Other <br>
                </label>
                <br>
                <label for="">Bio : <br>
                    <textarea name="bio" id="" cols="30" rows="10"></textarea>
                </label>
                <br><br>
                <input type="submit" value="Sign Up" name="" id="">
            </div>
        </div>
    </form>
</body>

</html>
