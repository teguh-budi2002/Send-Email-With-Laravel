<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Tutorial Laravel Mail | guhcoding.com</title>
</head>
<body>
    <p>Hallo, <b>{{$data['name']}}</b></p>
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$data['name']}}</td>
      </tr>
      <tr>
        <td>Komentar</td>
        <td>:</td>
        <td>{{$data['feedback']}}</td>
      </tr>
    </table>
    <p>Terimakasih <b>{{$data['name']}}</b> telah memberi komentar.</p>
</body>
</html>