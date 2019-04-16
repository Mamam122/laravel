<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>


<div>
  <form method="post" action="{{url}}">
       {{csrf_field()}}
    <label for="fname">Judul</label>
    <input type="text" id="fname" name="judul" placeholder="Masukkan judul...">

    <label for="lname">Penerbit</label>
    <input type="text" id="lname" name="penerbit" placeholder="Masukkan Penerbit...">

    <label for="lname">Tahun Terbit</label>
    <input type="text" id="lname" name="tahunterbit" placeholder="date/month/years">

    <label for="lname">Pengarang</label>
    <input type="text" id="lname" name="pengarang" placeholder="Masukkan pengarang...">
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
