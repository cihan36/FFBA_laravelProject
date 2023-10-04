<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <style>
    

html,
body {
	height: 100%;
}

body {
	margin: 0;
background-color : rgb(163, 202, 235);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
h1{text-align: center}

table {
	width: 1000px;
    margin: auto;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,1);
}

th,
td {
	padding: 15px;
	background-color: rgb(255,255,255,0.2);
	color: black;
}

th {
    font-size: 17px;
	text-align: left;
}

thead {
	th {
		background-color: #55608f;
	}
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}
    </style>
<h1>Page d'accueil</h1>

<table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Moyenne des votes</th>
                    <th>Nombres de votes</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie['title'] }}</td>
                    <td>{{ $movie['vote_average'] }}</td>
                    <td>{{$movie['vote_count']}}</td>
                    <td>{{$movie['overview']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>

