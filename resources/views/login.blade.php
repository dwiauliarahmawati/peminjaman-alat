<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .box {
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">

    <h2>Login</h2>

    <form method="POST" action="/login">
        @csrf

        <input
            type="email"
            name="email"
            placeholder="Email"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>