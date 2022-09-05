<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form1</title>
</head>
<body>
    <div class="form">
        <h1>Create Profile</h1>
        <form action="form2.php" method="POST">
        <div class="form-input">
            <label for="name">Name :</label>
            <input type="text" name="name">
        </div>
        <div class="form-input">
            <label for="nim">NIM :</label>
            <input type="text" name="nim">
        </div>
        <div class="form-input">
            <label for="fakultas">Fakultas :</label>
            <input type="text" name="fakultas">
        </div>
        <div class="form-input">
            <label for="prodi">Prodi :</label>
            <input type="text" name="prodi">
        </div>
        <div class="button">
            <button type="submit">Save</button>
        </div>
        </form>
    </div>
</body>
<style> 
*{
    margin : 0;
    padding : 0;
    box-sizing : border-box;
}

body{
    background-color: #6e64e7;
    font-family: Arial, Helvetica, sans-serif;
}

.form{
    padding : 2rem;
    margin : 8rem auto;
    width : 41rem;
    background-color:#fff;
    border-radius: 0.3rem;
}

h1{
    font-size : 1,5rem;
    margin-bottom: 1rem;
    
}

.form-input label{
    display : block;
    font-size : 1rem;
    margin : 0.5rem 0rem;
}

input[input="text"], input[type="date"]{
    padding : 0.5rem;
    width : 20rem;
    background :  #efefef;
    border: 0;
    font-size: 1rem;
    margin: 0.5rem 0rem;
}

button {
    background-color: #6e64e7;
    color : #fff;
    width : 10rem; 
    border : 0;
    padding : 0.5rem; 
    margin : 0.5rem 0rem;
}
</style>
</html>