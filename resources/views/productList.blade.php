<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background-color: #0a3d62;
        }

        h4 {
            display: block;
            margin-block-start: 1.33em;
            margin-block-end: 1.33em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            color: black;
            unicode-bidi: isolate;
        }


        .container {
            padding: 30px;
            text-align: center;
            color: white;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2em;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            justify-content: center;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .price {
            font-size: 1.2em;
            color: black;
            margin: 10px 0;
        }

        .price span {
            text-decoration: line-through;
            color: gray;
            font-size: 0.9em;
            margin-left: 5px;
        }

        .card button {
            background: orange;
            color: white;
            padding: 10px 15px;
            border: none;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .card button:hover {
            background: darkorange;
        }

        /* Skeleton styles */
        .skeleton {
            animation: shimmer 1.5s infinite;
            background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
            background-size: 1000px 104px;
            position: relative;
            overflow: hidden;
            padding: 20px;
            margin: 10px;
        }

        .skeleton-img {
            height: 200px;
            width: 100%;
            background-color: #ccc;
            margin-bottom: 10px;
        }

        .skeleton-text {
            height: 20px;
            width: 70%;
            background-color: #ccc;
            margin-bottom: 10px;
        }

        .skeleton-btn {
            height: 30px;
            width: 40%;
            background-color: #ccc;
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }


        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 5px;
            margin: 10px 0;
            justify-content: space-around;
        }

        .qty-btn {
            background-color: #ddd;
            border: none;
            padding: 5px 10px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
        }

        .qty-btn:hover {
            background-color: #bbb;
        }

        .quantity-controls input[type="number"] {
            width: 40px;
            margin-top: 10px;
            height: 25px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .addCart_btn{
          display: block
        }
        .removeCart{
          display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>🛒 Shopping Cart</h1>
        <div class="grid" id="productListAppend">
            <div class="card skeleton">
                <div class="skeleton-img"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-btn"></div>
            </div>

            <div class="card skeleton">
                <div class="skeleton-img"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-btn"></div>
            </div>
            <div class="card skeleton">
                <div class="skeleton-img"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-btn"></div>
            </div>
            <div class="card skeleton">
                <div class="skeleton-img"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-btn"></div>
            </div>
            <div class="card skeleton">
                <div class="skeleton-img"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-btn"></div>
            </div>


            <!-- Repeat .card for other items -->
        </div>
    </div>
    <script src="{{ asset('js/cart.js') }}"></script>
</body>

</html>
