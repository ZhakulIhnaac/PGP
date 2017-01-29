<html>
<head>
<style>

    body{
        background-color: darkcyan
    }    
    
.menudiv{
width:900px;
height:140px;
margin: 0 auto; 
}    
    
    
.menudiv ul{
list-style-type: none;        
background-color: #033751;
}
    
.menudiv ul li{
float: left;        
width: 120px;
height: 30px;
padding: 5px;
position:relative;    
}
    
.menudiv ul li a{
color:brown;
text-decoration:none;
}    
    
.menudiv ul li ul{
display: none;
position:absolute;
left:0px;
top:30px;
}         
    
.menudiv ul li :hover ul{
    display: block;
}
    
</style>    
</head>

<body>
<div class="menudiv">
<ul>
    <li><a href="#">Ana Sayfa</a></li>    
    <li><a href="#">Hakkımızda</a></li>    
    <li><a href="#">Kategoriler</a>
        <ul>
            <li><a href="#">asp.net </a></li>
            <li><a href="#">C# </a></li>
            <li><a href="#">MSSQL </a></li>
        </ul>
    </li>
<li><a href="#">İletişim</a></li>    
</ul>    
</div>
    
</body>

</html>
