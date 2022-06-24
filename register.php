<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <h1>Register Page</h1>
        </div>
        <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email_input" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password_input" placeholder="Password">
        </div>
            <!-- <div class="form-group">
                <small class="form-text text-muted">Don't have an account? <a href="register.php">register</a></small>
            </div> -->
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="sign_Up">Register</button>
            <a href="index.php" type="button" class="btn btn-secondary">Login</a>
        </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-app.js";
    // import { getDatabase } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-database.js";
    import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-auth.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyAiI__9cARPmS-M9AbI25QNiQGgdRYX2bo",
        authDomain: "tech-test-fe60d.firebaseapp.com",
        databaseURL: "https://tech-test-fe60d-default-rtdb.firebaseio.com",
        projectId: "tech-test-fe60d",
        storageBucket: "tech-test-fe60d.appspot.com",
        messagingSenderId: "38509120807",
        appId: "1:38509120807:web:4aba5b0bf6597d5e70ad02"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    // const database = getDatabase(app);
    const auth = getAuth();

    sign_Up.addEventListener('click', (e)=>{

        var email = document.getElementById('email_input').value;
        var password = document.getElementById('password_input').value;

        createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
            // Signed in 
            const user = userCredential.user;
            alert('User Created')
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            alert(errorMessage)
        });

    });
    </script>
  </body>
</html>