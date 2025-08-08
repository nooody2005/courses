<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/courses/assets/css/style.css">
    <style>
        .input-box {
            background: #fff;
            border: 1px solid #d1d5db71;
            border-radius: 12px;
            box-shadow: 0 20px 18px rgba(0, 0, 0, 0.07);
            padding: 24px 18px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            align-items: stretch;
            max-width: 340px;
            margin: 0 auto;
        }

        .input-box label {
            font-weight: 500;
            margin-bottom: 4px;
        }

        .input-box input[type="file"] {
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #4f8cff;
            background: #f6f8fa;
            margin-bottom: 10px;
        }

        .input-box input[type="reset"] {
            background: #f44336;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 8px 0;
            cursor: pointer;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .input-box .submit-button {
            background: #0056b3;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 0;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .input-box .submit-button:hover {
            background: #357ae8;
        }

        .input-box img {
            display: block;
            margin: 0 auto 8px auto;
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 50%;
            background: #e9ecef;
            border: 2px solid #4f8cff;
        }
    </style>
    <title>Upload your image</title>

</head>

<body>
    <div class="login-visual">
        <div class="visual-content">
            <img src="/courses/image/Group1.svg" alt="Platform Logo" class="visual-logo">
            <h2 class="visual-title">Learn Without Limits</h2>
        </div>
    </div>
    <div class="login-form-container">

        <form method="POST" class="login-form" action="/courses/main.php">
            <div class="input-box">

                <!-- where the profile pic will be uploaded and displayed to the user
            before continuing-->
                <img src="" alt="profilr pic">
                <label for="image">upload your profile pic</label>
                <input type="file" name="image" id="image" required>
                <input type="reset">
                <button type="submit" class="submit-button">
                    Sign up
                </button>
            </div>
        </form>

    </div>

</body>

</html>