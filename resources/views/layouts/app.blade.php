<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 20px;
        background-color: #f4f6f9;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
    }

    nav {
        margin: 20px 0;
        text-align: center;
    }

    nav a {
        text-decoration: none;
        padding: 8px 15px;
        background-color: #2c3e50;
        color: white;
        border-radius: 5px;
        margin: 0 5px;
        transition: 0.3s;
    }

    nav a:hover {
        background-color: #1abc9c;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        background: white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    th {
        background-color: #2c3e50;
        color: white;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    button, input[type="submit"] {
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background-color: #1abc9c;
        color: white;
        transition: 0.3s;
    }

    button:hover, input[type="submit"]:hover {
        background-color: #16a085;
    }

    input, select {
        padding: 6px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-top: 4px;
    }

    .field {
        margin-bottom: 12px;
    }

    .errors {
        background-color: #ffe6e6;
        border: 1px solid #ff4d4d;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>
