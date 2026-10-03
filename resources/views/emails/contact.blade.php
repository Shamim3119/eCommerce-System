<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>

body{
    font-family:Arial,Helvetica,sans-serif;
    background:#f5f5f5;
    padding:30px;
}

.container{
    max-width:700px;
    margin:auto;
    background:#ffffff;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 0 15px rgba(0,0,0,.08);
}

.header{
    background:#0d6efd;
    color:#fff;
    text-align:center;
    padding:25px;
}

.header h2{
    margin:0;
}

.content{
    padding:30px;
}

table{
    width:100%;
    border-collapse:collapse;
}

td{
    padding:12px;
    border-bottom:1px solid #e8e8e8;
    vertical-align:top;
}

.label{
    width:150px;
    font-weight:bold;
    color:#555;
}

.message-box{
    background:#f8f9fa;
    border-left:5px solid #0d6efd;
    padding:20px;
    margin-top:15px;
    white-space:pre-line;
}

.footer{
    background:#f5f5f5;
    text-align:center;
    padding:15px;
    color:#888;
    font-size:13px;
}

</style>
</head>
<body>

<div class="container">

<div class="header">
    <h2>New Contact Form Submission</h2>
</div>

<div class="content">

<table>

<tr>
    <td class="label">Name</td>
    <td>{{ $data['name'] }}</td>
</tr>

<tr>
    <td class="label">Email</td>
    <td>{{ $data['email'] }}</td>
</tr>

<tr>
    <td class="label">Subject</td>
    <td>{{ $data['subject'] }}</td>
</tr>

</table>

<h3>Message</h3>

<div class="message-box">
{{ $data['message'] }}
</div>

</div>

<div class="footer">
This email was sent from the PALBD website contact form.
</div>

</div>

</body>
</html>